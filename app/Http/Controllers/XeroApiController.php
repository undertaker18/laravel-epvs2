<?php

namespace App\Http\Controllers;

use App\Models\XeroAuth;
use App\Models\XeroInvoice;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class XeroApiController extends Controller
{

    protected $clientId;
    protected $clientSecret;
    protected $authotizarionBase64;
    protected $scope;
    protected $state;
    protected $authRedirectUri;
    protected $tokenRedirectUri;
    protected $authUrl;
    protected $grantType;
    protected $tenantId;

    public function __construct()
    {
        // CHANGE THIS WHEN THERE IS NEW ACCOUNT
        $this->clientId = '65E0B44A363548B5AEB2EC886C8E7CFB';
        $this->clientSecret = 'kUJNi_WpmiMZBtFFjQswH2fdCHX1jDL93NpdWztuk-c17G2X';
        $this->authotizarionBase64 = 'NjVFMEI0NEEzNjM1NDhCNUFFQjJFQzg4NkM4RTdDRkI6a1VKTmlfV3BtaU1aQnRGRmpRc3dIMmZkQ0hYMWpETDkzTnBkV3p0dWstYzE3RzJY';
        $this->tenantId = '56f717fe-5558-4932-9c1d-8be1da1264f2';
        $this->authRedirectUri = 'http://localhost:8000/v1/xero/token';
        $this->tokenRedirectUri = 'http://localhost:8000/v1/xero/token';
        // -- END

        $this->scope = 'offline_access accounting.transactions openid profile email accounting.contacts accounting.settings';
        $this->state = '123';
        $this->authUrl = "https://login.xero.com/identity/connect/authorize?response_type=code&client_id=$this->clientId&scope=$this->scope&redirect_uri=$this->authRedirectUri";
    }

    public function getAuth()
    {
        $authUrl = "https://login.xero.com/identity/connect/authorize?response_type=code&client_id=$this->clientId&scope=$this->scope&redirect_uri=$this->authRedirectUri";

        return redirect($authUrl);
    }

    public function getToken(Request $request)
    {
        $code = $request->input('code');

        $this->grantType = 'authorization_code';

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://identity.xero.com/connect/token?grant_type=$this->grantType",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => "code=$code&client_id=$this->clientId&client_secret=$this->clientSecret&scope=$this->scope&state=$this->state&redirect_uri=$this->tokenRedirectUri&grant_type=$this->grantType",
            CURLOPT_HTTPHEADER => array(
                'cache-control: no-cache',
                'Content-Type: application/x-www-form-urlencoded',
                "Authorization: Basic $this->authotizarionBase64",
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $responseArray = json_decode($response, true);

        $xeroAuth = [
            'code' => $code,
            'xero_expires_datetime' => strtotime('+1800 seconds'),
            'xero_refresh_token' => $responseArray['refresh_token']
        ];

        DB::table('xero_auth')->truncate();
        DB::table('xero_auth')->insert($xeroAuth);

        Session::put('xero_access_token_final', $responseArray['token_type'] . ' ' . $responseArray['access_token']);
        Session::put('xero_code', $code);
        Session::put('xero_expires_datetime', strtotime('+1800 seconds'));
        Session::put('xero_refresh_token', $responseArray['refresh_token']);
        return $response;
    }

    public function tokenRefresh()
    {

        $this->grantType = 'refresh_token';
        $refresh_token = XeroAuth::first()->xero_refresh_token;
        $code = XeroAuth::first()->code;
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://identity.xero.com/connect/token",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => "code=$code&client_id=$this->clientId&client_secret=$this->clientSecret&scope=$this->scope&state=$this->state&redirect_uri=$this->tokenRedirectUri&grant_type=$this->grantType&refresh_token=$refresh_token",
            CURLOPT_HTTPHEADER => array(
                'cache-control: no-cache',
                'Content-Type: application/x-www-form-urlencoded',
                "Authorization: Basic $this->authotizarionBase64",
                'Cookie: _abck=64DAFBA79734E77CF5D24180B735F8A2~-1~YAAQD0IkFzH/46iHAQAAGsgO5gmPVeDPUk/WPPFx2xY1KLIy4DvxzmetqLEW9Ubc7jTUOB/227TALACfb4QXfjB0k+CSaBjyFo8+IVzFocljYnzKIj4eKin/7nVgdds4Otn+wsk1siuRSW4XKNLaEZqV4F99vYBqgmOd9wjCHOz6jaSR405N617zhGG2mDvfsdXzta7i0vDlE6UAo2qYllljQxtd4Su6H6Fui3b/2Iv7l/ANq0Y4SJ6ioxe2Sa340Al3g8VYkncSPPP+F0pa3gQrQ9itu0eV8VDTJtzRtEx8YRwEWz8XMIVvHaZ1wRFin++BzpB6q/E7A9gnUgR6SA6RV0fkGDZ/Df2q6BFpTNlZpwLZNbOQoz37Zw+cAoArnZG4Ukk=~-1~-1~-1; ak_bmsc=D9FAEC952203A5451F504B7C49254898~000000000000000000000000000000~YAAQRGjcF0ZivOaHAQAAlyvF5hPXy4JnplcXuGnO8QxUiAbQ8EP9s8f3RJ3m1OPlG0SzmqfrvV1zRzy3uVas3PJKAQveDStc1CsEC8Gzeje/Lo0G6zaArxAgjLSWJcU6Qet97Dvk4zSf56WrGCqjSvnbu+YpcKuhh4tlFJgRb1hQUMVwlWfqeqCAHIRvwvWT8c9wnczMjioZcTmDHmusBz7a2xyZA8xTh/rj7j/6V7Ig+gzNbEb5i4SkBRcJYR6BxQWYFPt4eGBXnkI2daWEbpzDGzsxYzK+LVY2NU9XaWw2nhYzF8gFziAvkP3ElFC53VBcmQQCiFrJTsZ+PGcYqXiqK99b9tQet+Iv6Gk3rCKSzhy0rCavqC2xc+xI9eg=; bm_sv=5DEE05F775AC70C13ED06CF323223340~YAAQp3TZF0aRf+aHAQAAnjWR5hP667jVS+zE+bgeFKQ9V/NJ51tDfUd1aguAQEunnLcruSHGLVdEM7ZyxX7J6LYPC/9p8hsDWWXnD0pgxX5GqOnC+C9FARnGZUo1ovL2HprxyODnFfyJatNCA5xdRe6MReHUZfi05F+BCkH9jrp2AXK51PQm1lP+Ei0SBk8lE9jGLN2oNNYTd8jL+Djq8+Kiw7W4i7RkfwLmmDG24jH9/xgkcSsflF3GRJEqPg==~1; bm_sz=116034C10A0844D12AC09CDCAA8255A2~YAAQTGjcF4D5P+SHAQAA9J/U5hPN/ynGClsPhnoOJkxtjxJOK4cfEQ+h1X/xdToBR8/HVF+EuuUQH1SYg3Po0bFPEmMTaJ40ZlfVpUwnKMJxb93DJczcxx4/MXIo3YagNQ5P4eiC3jc4hhTQYKhJtLcIx9nwnqWUxHs+bDSI4xO59FlorfFdNQFzs/qyQLCx+94OX/E0SnrucRsPXVnODgQL42xKpm9TZUcGrpAskBF2kYOLT3NgeI05I4XwCeUhEU92ZV7Jca3Wc/ZOWWTRAOUgySnqHB3FNym7L2GSsZbLia9SvUU7z64abb0u2v2xQHOPYySH0PX3~3752503~3420995; Device=9795df7db0b648b0a5b1ca5b22c78526'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $responseArray = json_decode($response, true);

        $xeroAuth = [
            'code' => $code,
            'xero_expires_datetime' => strtotime('+1800 seconds'),
            'xero_refresh_token' => $responseArray['refresh_token']
        ];

        DB::table('xero_auth')->truncate();
        DB::table('xero_auth')->insert($xeroAuth);

        Session::put('xero_access_token_final', $responseArray['token_type'] . ' ' . $responseArray['access_token']);
        Session::put('xero_code', $code);
        Session::put('xero_expires_datetime', strtotime('+1800 seconds'));
        Session::put('xero_refresh_token', $responseArray['refresh_token']);

        return $response;
    }

    private function isTokenExpired()
    {
        if (is_null(session('xero_access_token_final'))) {
            return true;
        }

        if (session('xero_expires_datetime')) {
            return session('xero_expires_datetime') < strtotime('now');
        }
    }

    private function getRefreshToken()
    {
        if ($this->isTokenExpired() === true
            || (XeroAuth::first()->xero_expires_datetime < strtotime('now'))) {
            $this->tokenRefresh([]);
        }
        return;
    }

    public function postInvoice($params = [])
    {
        $this->getRefreshToken();
        $curl = curl_init();
        $authorization = Session::get('xero_access_token_final');
        $tenantId = $this->tenantId;

        $contactId = $params['contactId'];
        $description = $params['description'];
        $amount = $params['amount'];
        $lineAmount = $params['lineAmount'];
        $date = $params['date'];
        $dueDate = $params['dueDate'];
        $reference = $params['reference'];

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.xero.com/api.xro/2.0/Invoices',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS =>
            "{
                'Invoices': [
                  {
                    'Type': 'ACCREC',
                    'Contact': {
                      'ContactID': '$contactId'
                    },
                    'LineItems': [
                      {
                        'Description': '$description',
                        'Quantity': 1,
                        'UnitAmount': '$amount',
                        'AccountCode': '200',
                        'TaxType': 'NONE',
                        'LineAmount': '$lineAmount'
                      }
                    ],
                    'Date': '$date',
                    'DueDate': '$dueDate',
                    'Reference': '$reference',
                    'Status': 'AUTHORISED'
                  }
                ]
              }"
,
            CURLOPT_HTTPHEADER => array(
              "xero-tenant-id: $tenantId",
              "Authorization: $authorization",
              'Accept: application/json',
              'Content-Type: application/json',
              'Cookie: _abck=64DAFBA79734E77CF5D24180B735F8A2~-1~YAAQD0IkFzH/46iHAQAAGsgO5gmPVeDPUk/WPPFx2xY1KLIy4DvxzmetqLEW9Ubc7jTUOB/227TALACfb4QXfjB0k+CSaBjyFo8+IVzFocljYnzKIj4eKin/7nVgdds4Otn+wsk1siuRSW4XKNLaEZqV4F99vYBqgmOd9wjCHOz6jaSR405N617zhGG2mDvfsdXzta7i0vDlE6UAo2qYllljQxtd4Su6H6Fui3b/2Iv7l/ANq0Y4SJ6ioxe2Sa340Al3g8VYkncSPPP+F0pa3gQrQ9itu0eV8VDTJtzRtEx8YRwEWz8XMIVvHaZ1wRFin++BzpB6q/E7A9gnUgR6SA6RV0fkGDZ/Df2q6BFpTNlZpwLZNbOQoz37Zw+cAoArnZG4Ukk=~-1~-1~-1; ak_bmsc=32E7BDF6ED6F5FE5FB3C2907536A21A1~000000000000000000000000000000~YAAQS2jcFw0ONayHAQAAeMoO5hPKPg70B1CNZO/q3neu+CC8x7S2GwDSPKDpQ0SADARMPPT43/QPIXNOrsW5Fcr5xaj14nktkVkiYpCTdzmN4b8OzqdesZw5zYsHQBZKqNq5aO+cmgRf3iV+0YL3Ov4Tl7zV7hO3k7nYY7C7XS/3EAs9Fi/G3CSuTC1oG8HDk/dWNdqcqBenz20/dGnNnn+vY7wEe2XybQyXANJlw7qqEiIv9QZNVoZuskzPRBCcEtJXwl5FFscfFAF944eb+zXEwZgnZlDU5sBwdiU/NXi281C/zB10rni64M/KfGICixG0czTuh6AZERvkGF4GUiEqGw3Udo22DcdZRPwrxZeGyHMESYnWwvo=; bm_sv=240373A82D3A6511CD237D28E05C0B59~YAAQp3TZF++A/+WHAQAAF5Yx5hPEk7asjtsShHcArtxKyQMEgFzu1H8VOtMCNTxd6PXzxZ2ezGvnTRF73GCrGwFPm+3TR2PT8UzWQ72mJY4Bbe3ZHsRzKIlIfPqYTxWTLuraqUCULuJtup9HmfRyPLFnt7g/3rmKDCQHFscCEL4Xhh/QDtwJ6HqaYDXL6oUt48DCaGMqWh6vL4wEYjNHCbjW4ioQkIabcGcVAG91/U75Q83IBX7FC6Cf4fjRwO0=~1; bm_sz=517EC7602D2DC87B370B646AE3AC8A88~YAAQD0IkFzL/46iHAQAAGsgO5hPkvs/PGRUJ2attVsN7vS2RWYKOkfYzLGgjhRMvh7AQkXM0xgyn0Yp6tvOZANl536IigaIYE2lBUfTQWj6CL6Hk3PnhnbxrVWJomtxxq6vdtvybel8mWWUDSyRivyAXL3xijOZ02iR/wz7F5OnK3xjeTNOo6BjDjWgKjj73Qa9p3qpJK+KAWgG1QP5e4j5gkt7f5+MlvdKhWDkMNYwlgmIa3mJif5EszA68XUu/8HoyWsfKYbJnPX8tLXOgsi4GRRdl21CsZgU5ddEEah/y~4343353~3621955'
            ),
          ));

        $response = curl_exec($curl);
        curl_close($curl);
        return $response;

    }

    public function getInvoice(Request $request)
    {
        $this->getRefreshToken();

        $curl = curl_init();
        $authorization = Session::get('xero_access_token_final');
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.xero.com/api.xro/2.0/Invoices',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS =>'{ "Invoices": [ { "Type": "ACCREC", "Contact": { "ContactID": "85d15bf3-207f-4278-8449-e12dade98c66" }, "LineItems": [ { "Description": "THIS IS A TEST", "Quantity": 2, "UnitAmount": 20, "AccountCode": "200", "TaxType": "NONE", "LineAmount": 40 } ], "Date": "2023-05-04", "DueDate": "2023-12-10", "Reference": "Xero - University Payment System", "Status": "AUTHORISED" } ] }',
            CURLOPT_HTTPHEADER => array(
              'xero-tenant-id: 9b095c99-9f1d-4703-ab1e-27f968adebb5',
              "Authorization: $authorization",
              'Accept: application/json',
              'Content-Type: application/json',
              'Cookie: _abck=64DAFBA79734E77CF5D24180B735F8A2~-1~YAAQD0IkFzH/46iHAQAAGsgO5gmPVeDPUk/WPPFx2xY1KLIy4DvxzmetqLEW9Ubc7jTUOB/227TALACfb4QXfjB0k+CSaBjyFo8+IVzFocljYnzKIj4eKin/7nVgdds4Otn+wsk1siuRSW4XKNLaEZqV4F99vYBqgmOd9wjCHOz6jaSR405N617zhGG2mDvfsdXzta7i0vDlE6UAo2qYllljQxtd4Su6H6Fui3b/2Iv7l/ANq0Y4SJ6ioxe2Sa340Al3g8VYkncSPPP+F0pa3gQrQ9itu0eV8VDTJtzRtEx8YRwEWz8XMIVvHaZ1wRFin++BzpB6q/E7A9gnUgR6SA6RV0fkGDZ/Df2q6BFpTNlZpwLZNbOQoz37Zw+cAoArnZG4Ukk=~-1~-1~-1; ak_bmsc=32E7BDF6ED6F5FE5FB3C2907536A21A1~000000000000000000000000000000~YAAQS2jcFw0ONayHAQAAeMoO5hPKPg70B1CNZO/q3neu+CC8x7S2GwDSPKDpQ0SADARMPPT43/QPIXNOrsW5Fcr5xaj14nktkVkiYpCTdzmN4b8OzqdesZw5zYsHQBZKqNq5aO+cmgRf3iV+0YL3Ov4Tl7zV7hO3k7nYY7C7XS/3EAs9Fi/G3CSuTC1oG8HDk/dWNdqcqBenz20/dGnNnn+vY7wEe2XybQyXANJlw7qqEiIv9QZNVoZuskzPRBCcEtJXwl5FFscfFAF944eb+zXEwZgnZlDU5sBwdiU/NXi281C/zB10rni64M/KfGICixG0czTuh6AZERvkGF4GUiEqGw3Udo22DcdZRPwrxZeGyHMESYnWwvo=; bm_sv=240373A82D3A6511CD237D28E05C0B59~YAAQp3TZF++A/+WHAQAAF5Yx5hPEk7asjtsShHcArtxKyQMEgFzu1H8VOtMCNTxd6PXzxZ2ezGvnTRF73GCrGwFPm+3TR2PT8UzWQ72mJY4Bbe3ZHsRzKIlIfPqYTxWTLuraqUCULuJtup9HmfRyPLFnt7g/3rmKDCQHFscCEL4Xhh/QDtwJ6HqaYDXL6oUt48DCaGMqWh6vL4wEYjNHCbjW4ioQkIabcGcVAG91/U75Q83IBX7FC6Cf4fjRwO0=~1; bm_sz=517EC7602D2DC87B370B646AE3AC8A88~YAAQD0IkFzL/46iHAQAAGsgO5hPkvs/PGRUJ2attVsN7vS2RWYKOkfYzLGgjhRMvh7AQkXM0xgyn0Yp6tvOZANl536IigaIYE2lBUfTQWj6CL6Hk3PnhnbxrVWJomtxxq6vdtvybel8mWWUDSyRivyAXL3xijOZ02iR/wz7F5OnK3xjeTNOo6BjDjWgKjj73Qa9p3qpJK+KAWgG1QP5e4j5gkt7f5+MlvdKhWDkMNYwlgmIa3mJif5EszA68XUu/8HoyWsfKYbJnPX8tLXOgsi4GRRdl21CsZgU5ddEEah/y~4343353~3621955'
            ),
          ));

        $response = curl_exec($curl);

        curl_close($curl);

        echo '<pre>';
        echo $response;
    }

    public function postPayment($params)
    {
        $this->getRefreshToken();
        $authorization = Session::get('xero_access_token_final');
        $tenantId = $this->tenantId;

        $curl = curl_init();
        $invoiceId = $params['invoiceId'];
        $amount = $params['amount'];
        $date = $params['date'];
        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.xero.com/api.xro/2.0/Payments',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>
        "{
            'Payments': [
              {
                'Account': {
                  'Code': '970'
                },
                'Amount': '$amount',
                'Date': '$date',
                'Invoice': {
                  'InvoiceID': '$invoiceId',
                  'LineItems': []
                }
              }
            ]
          }",
            CURLOPT_HTTPHEADER => array(
            "xero-tenant-id: $tenantId",
            "Authorization: $authorization",
            'Accept: application/json',
            'Content-Type: application/json',
            'Cookie: _abck=64DAFBA79734E77CF5D24180B735F8A2~-1~YAAQD0IkFzH/46iHAQAAGsgO5gmPVeDPUk/WPPFx2xY1KLIy4DvxzmetqLEW9Ubc7jTUOB/227TALACfb4QXfjB0k+CSaBjyFo8+IVzFocljYnzKIj4eKin/7nVgdds4Otn+wsk1siuRSW4XKNLaEZqV4F99vYBqgmOd9wjCHOz6jaSR405N617zhGG2mDvfsdXzta7i0vDlE6UAo2qYllljQxtd4Su6H6Fui3b/2Iv7l/ANq0Y4SJ6ioxe2Sa340Al3g8VYkncSPPP+F0pa3gQrQ9itu0eV8VDTJtzRtEx8YRwEWz8XMIVvHaZ1wRFin++BzpB6q/E7A9gnUgR6SA6RV0fkGDZ/Df2q6BFpTNlZpwLZNbOQoz37Zw+cAoArnZG4Ukk=~-1~-1~-1; ak_bmsc=32E7BDF6ED6F5FE5FB3C2907536A21A1~000000000000000000000000000000~YAAQS2jcFw0ONayHAQAAeMoO5hPKPg70B1CNZO/q3neu+CC8x7S2GwDSPKDpQ0SADARMPPT43/QPIXNOrsW5Fcr5xaj14nktkVkiYpCTdzmN4b8OzqdesZw5zYsHQBZKqNq5aO+cmgRf3iV+0YL3Ov4Tl7zV7hO3k7nYY7C7XS/3EAs9Fi/G3CSuTC1oG8HDk/dWNdqcqBenz20/dGnNnn+vY7wEe2XybQyXANJlw7qqEiIv9QZNVoZuskzPRBCcEtJXwl5FFscfFAF944eb+zXEwZgnZlDU5sBwdiU/NXi281C/zB10rni64M/KfGICixG0czTuh6AZERvkGF4GUiEqGw3Udo22DcdZRPwrxZeGyHMESYnWwvo=; bm_sv=240373A82D3A6511CD237D28E05C0B59~YAAQFWncF7rXH+aHAQAAsGBl5hMtOdc4myxjOJOQSTDResdK6T+Tz4OxRY3cDcgAPFPOq/B2VOArD/2mKII0wLNH1ZfXgnvg8QexRi5Mby7z82YfRiQ93SCKF1mIKU5LylbIGjTrLrB4i66T9eWZ3aN7I0XSUvclPlSSPdYBdn6XjoXlspWbYRRf7+Cle91pbGGDiozeQi77Ji00A7AVud/BGwxu8VyqAAK0G1gIAGmDO1xpmTCn96uMbeaUoNQ=~1; bm_sz=517EC7602D2DC87B370B646AE3AC8A88~YAAQD0IkFzL/46iHAQAAGsgO5hPkvs/PGRUJ2attVsN7vS2RWYKOkfYzLGgjhRMvh7AQkXM0xgyn0Yp6tvOZANl536IigaIYE2lBUfTQWj6CL6Hk3PnhnbxrVWJomtxxq6vdtvybel8mWWUDSyRivyAXL3xijOZ02iR/wz7F5OnK3xjeTNOo6BjDjWgKjj73Qa9p3qpJK+KAWgG1QP5e4j5gkt7f5+MlvdKhWDkMNYwlgmIa3mJif5EszA68XUu/8HoyWsfKYbJnPX8tLXOgsi4GRRdl21CsZgU5ddEEah/y~4343353~3621955'
        ),
        ));

        $response = curl_exec($curl);
        return $response;
    }

    public function postAccounts()
    {
        $this->getRefreshToken();
        $authorization = Session::get('xero_access_token_final');
        $tenantId = $this->tenantId;

        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.xero.com/api.xro/2.0/Contacts',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $this->generateAccounts(),
            CURLOPT_HTTPHEADER => array(
            "xero-tenant-id: $tenantId",
            "Authorization: $authorization",
            'Accept: application/json',
            'Content-Type: application/json',
            'Cookie: _abck=64DAFBA79734E77CF5D24180B735F8A2~-1~YAAQD0IkFzH/46iHAQAAGsgO5gmPVeDPUk/WPPFx2xY1KLIy4DvxzmetqLEW9Ubc7jTUOB/227TALACfb4QXfjB0k+CSaBjyFo8+IVzFocljYnzKIj4eKin/7nVgdds4Otn+wsk1siuRSW4XKNLaEZqV4F99vYBqgmOd9wjCHOz6jaSR405N617zhGG2mDvfsdXzta7i0vDlE6UAo2qYllljQxtd4Su6H6Fui3b/2Iv7l/ANq0Y4SJ6ioxe2Sa340Al3g8VYkncSPPP+F0pa3gQrQ9itu0eV8VDTJtzRtEx8YRwEWz8XMIVvHaZ1wRFin++BzpB6q/E7A9gnUgR6SA6RV0fkGDZ/Df2q6BFpTNlZpwLZNbOQoz37Zw+cAoArnZG4Ukk=~-1~-1~-1; ak_bmsc=32E7BDF6ED6F5FE5FB3C2907536A21A1~000000000000000000000000000000~YAAQS2jcFw0ONayHAQAAeMoO5hPKPg70B1CNZO/q3neu+CC8x7S2GwDSPKDpQ0SADARMPPT43/QPIXNOrsW5Fcr5xaj14nktkVkiYpCTdzmN4b8OzqdesZw5zYsHQBZKqNq5aO+cmgRf3iV+0YL3Ov4Tl7zV7hO3k7nYY7C7XS/3EAs9Fi/G3CSuTC1oG8HDk/dWNdqcqBenz20/dGnNnn+vY7wEe2XybQyXANJlw7qqEiIv9QZNVoZuskzPRBCcEtJXwl5FFscfFAF944eb+zXEwZgnZlDU5sBwdiU/NXi281C/zB10rni64M/KfGICixG0czTuh6AZERvkGF4GUiEqGw3Udo22DcdZRPwrxZeGyHMESYnWwvo=; bm_sv=240373A82D3A6511CD237D28E05C0B59~YAAQFWncF7rXH+aHAQAAsGBl5hMtOdc4myxjOJOQSTDResdK6T+Tz4OxRY3cDcgAPFPOq/B2VOArD/2mKII0wLNH1ZfXgnvg8QexRi5Mby7z82YfRiQ93SCKF1mIKU5LylbIGjTrLrB4i66T9eWZ3aN7I0XSUvclPlSSPdYBdn6XjoXlspWbYRRf7+Cle91pbGGDiozeQi77Ji00A7AVud/BGwxu8VyqAAK0G1gIAGmDO1xpmTCn96uMbeaUoNQ=~1; bm_sz=517EC7602D2DC87B370B646AE3AC8A88~YAAQD0IkFzL/46iHAQAAGsgO5hPkvs/PGRUJ2attVsN7vS2RWYKOkfYzLGgjhRMvh7AQkXM0xgyn0Yp6tvOZANl536IigaIYE2lBUfTQWj6CL6Hk3PnhnbxrVWJomtxxq6vdtvybel8mWWUDSyRivyAXL3xijOZ02iR/wz7F5OnK3xjeTNOo6BjDjWgKjj73Qa9p3qpJK+KAWgG1QP5e4j5gkt7f5+MlvdKhWDkMNYwlgmIa3mJif5EszA68XUu/8HoyWsfKYbJnPX8tLXOgsi4GRRdl21CsZgU5ddEEah/y~4343353~3621955'
        ),
        ));

        $response = curl_exec($curl);
        return $response;
    }

    private function generateAccounts()
    {
        $accountArray =  [
            'Pauline Baumbach',
            'Ella Schulist',
            'Daphnee Strosin',
            'Yvonne Lesch',
            'Erna Harber',
            'Maya Jenkins',
            'Shanna Jaskolski',
            'Danyka Fritsch',
            'Celine Cormier',
            'Kyla Dibbert'
        ];
        $createAccountPostParam = [];
        foreach ($accountArray as $value) {
            $name = explode(' ', $value);
            $createAccountPostParam['Contacts'][] = [
                "Name"=> $value,
                "FirstName"=> $name[0],
                "LastName"=> $name[1],
                "EmailAddress"=> implode('_', $name). "@test.com",
                "ContactPersons"=> [
                    [
                    "FirstName"=> $name[0],
                    "LastName"=> $name[1],
                    "EmailAddress"=> implode('_', $name). "@test.com",
                    "IncludeInEmails" => "true"
                    ]
                ]
            ];

        }
        return json_encode($createAccountPostParam);
    }

    public function getAccounts()
    {
        $this->getRefreshToken();

        $authorization = Session::get('xero_access_token_final');
        $tenantId = $this->tenantId;

        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.xero.com/api.xro/2.0/Contacts',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
        "xero-tenant-id: $tenantId",
        "Authorization: $authorization",
        'Accept: application/json',
        'Content-Type: application/json',
        'Cookie: _abck=64DAFBA79734E77CF5D24180B735F8A2~-1~YAAQD0IkFzH/46iHAQAAGsgO5gmPVeDPUk/WPPFx2xY1KLIy4DvxzmetqLEW9Ubc7jTUOB/227TALACfb4QXfjB0k+CSaBjyFo8+IVzFocljYnzKIj4eKin/7nVgdds4Otn+wsk1siuRSW4XKNLaEZqV4F99vYBqgmOd9wjCHOz6jaSR405N617zhGG2mDvfsdXzta7i0vDlE6UAo2qYllljQxtd4Su6H6Fui3b/2Iv7l/ANq0Y4SJ6ioxe2Sa340Al3g8VYkncSPPP+F0pa3gQrQ9itu0eV8VDTJtzRtEx8YRwEWz8XMIVvHaZ1wRFin++BzpB6q/E7A9gnUgR6SA6RV0fkGDZ/Df2q6BFpTNlZpwLZNbOQoz37Zw+cAoArnZG4Ukk=~-1~-1~-1; ak_bmsc=32E7BDF6ED6F5FE5FB3C2907536A21A1~000000000000000000000000000000~YAAQS2jcFw0ONayHAQAAeMoO5hPKPg70B1CNZO/q3neu+CC8x7S2GwDSPKDpQ0SADARMPPT43/QPIXNOrsW5Fcr5xaj14nktkVkiYpCTdzmN4b8OzqdesZw5zYsHQBZKqNq5aO+cmgRf3iV+0YL3Ov4Tl7zV7hO3k7nYY7C7XS/3EAs9Fi/G3CSuTC1oG8HDk/dWNdqcqBenz20/dGnNnn+vY7wEe2XybQyXANJlw7qqEiIv9QZNVoZuskzPRBCcEtJXwl5FFscfFAF944eb+zXEwZgnZlDU5sBwdiU/NXi281C/zB10rni64M/KfGICixG0czTuh6AZERvkGF4GUiEqGw3Udo22DcdZRPwrxZeGyHMESYnWwvo=; bm_sv=240373A82D3A6511CD237D28E05C0B59~YAAQFWncF7rXH+aHAQAAsGBl5hMtOdc4myxjOJOQSTDResdK6T+Tz4OxRY3cDcgAPFPOq/B2VOArD/2mKII0wLNH1ZfXgnvg8QexRi5Mby7z82YfRiQ93SCKF1mIKU5LylbIGjTrLrB4i66T9eWZ3aN7I0XSUvclPlSSPdYBdn6XjoXlspWbYRRf7+Cle91pbGGDiozeQi77Ji00A7AVud/BGwxu8VyqAAK0G1gIAGmDO1xpmTCn96uMbeaUoNQ=~1; bm_sz=517EC7602D2DC87B370B646AE3AC8A88~YAAQD0IkFzL/46iHAQAAGsgO5hPkvs/PGRUJ2attVsN7vS2RWYKOkfYzLGgjhRMvh7AQkXM0xgyn0Yp6tvOZANl536IigaIYE2lBUfTQWj6CL6Hk3PnhnbxrVWJomtxxq6vdtvybel8mWWUDSyRivyAXL3xijOZ02iR/wz7F5OnK3xjeTNOo6BjDjWgKjj73Qa9p3qpJK+KAWgG1QP5e4j5gkt7f5+MlvdKhWDkMNYwlgmIa3mJif5EszA68XUu/8HoyWsfKYbJnPX8tLXOgsi4GRRdl21CsZgU5ddEEah/y~4343353~3621955'
        ),
        ));

        $response = curl_exec($curl);
        return $response;
    }

    public function syncAccounts() {
        $this->getRefreshToken();
        $result = [
            'status' => true,
            'error' => []
        ];

        try {
             // get all accounts from API
            $xeroAccounts = $this->getAccounts();

            $xeroAccountsArray = json_decode($xeroAccounts, true);

            if ($xeroAccountsArray['Status'] !== "OK") {
                throw new Exception('Something Went wrong on the API');
            }
            $accountToSync = [];
            foreach ($xeroAccountsArray['Contacts'] as $key => $value) {
                $accountToSync[] = [
                    'xero_account_id' => $value['ContactID'],
                    'xero_account_name' => $value['Name']
                ];


                // dev todo: to remove ; test data generator
                $invoiceTest[] = [
                    'xero_account_id' => $value['ContactID'],
                    'description' => 'with Sync',
                    'amount' => '20',
                    'reference' => 'reference',
                    'email' => 'laverdad.epvsystem@gmail.com',
                    'receipt_type' => 'gcash',
                    'receipt_src' => '/assets/sample-receipts/pesonet-gateway.jpg'
                ];
            }
            // dev todo: to remove ; test data generator
            DB::table('xero_invoice')->truncate();
            DB::table('xero_invoice')->insert($invoiceTest);

            // truncate table then delete
            DB::table('xero_users')->truncate();
            DB::table('xero_users')->insert($accountToSync);
            
        } catch (Exception $e) {
            $result = [
                'status' => false,
                'error' => $e->getMessage()
            ];
        }

        return json_encode($result);
    }


    public function makeInvoiceAndPay(Request $request)
    {
        $this->getRefreshToken();
        $result = [
            'status' => true,
            'error' => []
        ];

        $invoiceIdsCsv = $request->input('invoice_ids');
        $invoiceIdsArray = explode(',', $invoiceIdsCsv);
        $invoiceXeroData = XeroInvoice::whereIn('id', $invoiceIdsArray)->get();
        foreach($invoiceXeroData as $value) {
            $invoiceParams = [];
            $invoiceParams['contactId'] = $value->xero_account_id;
            $invoiceParams['description'] = $value->description;
            $invoiceParams['amount'] = $value->amount;
            $invoiceParams['lineAmount'] = $value->amount;
            $invoiceParams['date'] = Carbon::now()->format('Y-m-d');
            $invoiceParams['dueDate'] = Carbon::now()->addDay('1')->format('Y-m-d');
            $invoiceParams['reference'] = $value->reference;

            try {
                $invoiceResult = $this->postInvoice($invoiceParams);
                $invoiceResultArray = json_decode($invoiceResult, true);

                if ($invoiceResultArray['Status'] !== "OK") {
                    throw new Exception('Something Went wrong on the Post Invoice API: ' . $invoiceParams['contactId']);
                }

                $invoiceID = $invoiceResultArray['Invoices'][0]['InvoiceID'];

                $paymentArray['invoiceId'] = $invoiceID;
                $paymentArray['amount'] = $invoiceParams['amount'];
                $paymentArray['date'] = $invoiceParams['date'];

                $paymentResult = $this->postPayment($paymentArray);
                $paymentResultArray = json_decode($paymentResult, true);
                if ($paymentResultArray['Status'] !== "OK") {
                    throw new Exception('Something Went wrong on the Post Payment API: ' . $invoiceParams['contactId']);
                }

                $value->status = 1;
                $value->save();
            } catch (Exception $e) {
                $result = [
                    'status' => false,
                    'error' => $e->getMessage()
                ];
            }

        }
        return json_encode($result);
    }
}
