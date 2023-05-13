<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use veryfi\Client;

class FormController extends Controller
{
        // for privacy
    public function privacy(Request $request )
    {
        return view('privacy-notice-form');
    }
        // for profile
    public function profile(Request $request )
    {
        $firstname=$request->input('firstname');
        $lastname=$request->input('lastname');

        return view('profile-form', compact('firstname','lastname'));
    }

        // for upload
    public function upload(Request $request )
    {
        return view('upload-form-2');
    }

    public function postUpload(Request $request) {

        if($request->hasFile('receipt')){
            $image = $request->file('receipt');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('ASSETS/receipts/temp/'), $filename);

            Session::put('receipt_type', $request->input('receipt_type'));
            Session::put('receipt', $filename);
            return redirect()->route('verify-form');
        }
        return redirect()->back()->with('error', 'Please Upload your Receipt.');
    }

        // for verify
    public function verify(Request $request )
    {
        $type = Session::get('receipt_type');
        $receipt = Session::get('receipt');

        $client_id = 'vrfzC6v7NcwuER96kIkXyxlwiGsb5UPVpmBOSy8';
        $client_secret = 'YryRAGBSexUNPbsFSj0JzvmHhr3PxdI9vgTf3jKsGwb3w0DhyfLaGUpwwLxAE6lJdkKEDe1cSy6PB8VUr2m4VeGoVmi7xi506XBIfo5NmU39EdpgLO1ktBrgPJJvikN2';
        $username = 'pgw.2023.01';
        $api_key = '25b85e2df9baeaa13fbbee9ff283c1e8';
        $file = public_path() . '/ASSETS/receipts/temp/' . $receipt;

        $veryfi_client = new Client($client_id, $client_secret, $username, $api_key);
        $categories = array('Advertising & Marketing', 'Automotive');
        $return_associative = true;
        $delete_after_processing = false;
        $response = $veryfi_client->process_document($file, $categories, $delete_after_processing);

        $json_response = json_decode($response, $return_associative);
        $finalresult = '';
        switch ($type) {
            case 'gcash':
                $finalResult = $this->getDataGcash($json_response);
                break;
            case 'instapay':
                $finalResult = $this->getDataInstapay($json_response);
                break;
            case 'gcash_instapay':
                $finalResult = $this->getDataGcashInstapay($json_response);
                break;
            case 'bdo_mobile_banking':
                $finalResult = $this->getDataBdoMobileBanking($json_response);
                break;
            case 'bdo_cash_transaction_slip':
                $finalResult = $this->getDataBdoCashTransactionSlip($json_response);
                break;
            default:
                echo 'Invalid Update';
        }

        $dateTime = is_null($finalResult['dateTime']) ? NULL : Carbon::createFromFormat('Y-m-d H:i:s', $finalResult['dateTime']);
        $finalResult['date'] = is_null($dateTime) ? NULL :$dateTime->format('Y-m-d');
        $finalResult['time'] = is_null($dateTime) ? NULL :$dateTime->format('H:i:s');

        $details = [
            'ocr_result' => $finalResult,
            'receipt' => "/ASSETS/receipts/temp/". $receipt
        ];
        return view('verify-form', compact('details'));
    }

        // for summary
    public function summary(Request $request )
    {
        return view('summary-form');
    }

        // for submit
    public function submit(Request $request )
    {
        return view('submit-form');
    }

    private function getValueBetweenstrings($paragraph ,$string1, $string2) {
        $stringOnePosition = strpos($paragraph, $string1, 0);
        $stringTwoPosition =  strpos($paragraph, $string2, $stringOnePosition);

        return rtrim(ltrim(substr($paragraph, $stringOnePosition + (strlen($string1)), $stringTwoPosition - $stringOnePosition - (strlen($string1)))));
    }

    private function getDataBdoMobileBanking($json_response) {
        $gcashFinalResult['dateTime'] = $json_response['date'];
        $gcashFinalResult['referenceNumber'] = $this->getValueBetweenstrings($json_response['ocr_text'], 'Reference No.', 'Send Money Type');
        $gcashFinalResult['amount'] = floatval($json_response['total']);
        return $gcashFinalResult;
    }

    private function getDataGcashInstapay($json_response) {
        $gcashFinalResult['dateTime'] = $json_response['date'];
        $gcashFinalResult['referenceNumber'] = $json_response['document_reference_number'];
        $gcashFinalResult['amount'] = floatval($json_response['line_items'][0]['total']);
        return $gcashFinalResult;
    }

    private function getDataGcash($json_response) {
        $gcashFinalResult['dateTime'] = $json_response['date'];
        $gcashFinalResult['referenceNumber'] = $json_response['document_reference_number'];
        $gcashFinalResult['amount'] = floatval($json_response['line_items'][0]['total']);
        return $gcashFinalResult;
    }

    private function getDataInstapay($json_response) {
        $gcashFinalResult['dateTime'] = $json_response['date'];
        $gcashFinalResult['referenceNumber'] = $json_response['invoice_number'];
        $gcashFinalResult['amount'] = floatval($json_response['subtotal']);
        return $gcashFinalResult;
    }

    private function getDataBdoCashTransactionSlip($json_response) {
        $gcashFinalResult['dateTime'] = $json_response['date'];
        $gcashFinalResult['referenceNumber'] = $json_response['document_reference_number'];

        $string1 = 'Cash In:';
        $string2 = '.';
        $stringOnePosition = strpos($json_response['ocr_text'], $string1, 0);
        $stringTwoPosition =  strpos($json_response['ocr_text'], $string2, $stringOnePosition);

        $amount = rtrim(ltrim(substr($json_response['ocr_text'], $stringOnePosition + (strlen($string1)), $stringTwoPosition + 3 - $stringOnePosition - (strlen($string1)))));
        $gcashFinalResult['amount'] = (float)number_format(floatval(str_replace(",","",($amount))), 2, '.', '');
        return $gcashFinalResult;
    }


}
