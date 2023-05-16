<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use veryfi\Client;

class FormController extends Controller
{
        // for privacy
    public function showPrivacy(Request $request )
    {
        return view('form.privacy-form');
    }

//=========================================================================================

        // for profile
    public function showProfile(Request $request )
    {
        $firstname=$request->input('firstname');
        $lastname=$request->input('lastname');

        return view('form.profile-form', compact('firstname','lastname'));
    }

    public function postProfile(Request $request )
    {
        return view('form.profile-form');
    }

//=========================================================================================


        // for upload
    public function showUpload(Request $request )
    {
        return view('form.upload-form');
    }

    public function postUpload(Request $request )
    {
        return view('form.upload-form');
    }


//=========================================================================================

        // for verify
    public function showVerify(Request $request )
    {
        // get from session
        $type = Session::get('receipt_type');
        $receipt = Session::get('receipt');

        if (is_null($receipt) || is_null($type)) {
            return redirect()->route('upload-form');
        }

        // Veryfi API Credentials
        // Change when Veryfi expires
        $client_id = 'vrfRNNDKzOCalsn1fMoHEPw13jYIsMDwnBbAfUJ';
        $client_secret = 'bbxAZXGKwh1AKTzgUhyZ8xzw2ykZJ9iH0pnNUjlnfnYJ8tjxCDNt4sHtMiPrwbWUAGkT8WZ87W7c8l4vsRLJjAKsZNX3oUze135SSE4JaCO47U7tIlEhDuAa2ELYwklb';
        $username = 'jordanearlpascua1';
        $api_key = '4849078385c87162e2e014c19b99383a';
        // end

        $file = public_path() . '/ASSETS/receipts/temp/' . $receipt;

        // Veryfi API
        $veryfi_client = new Client($client_id, $client_secret, $username, $api_key);
        $categories = array('Advertising & Marketing', 'Automotive');
        $return_associative = true;
        $delete_after_processing = false;
        $response = $veryfi_client->process_document($file, $categories, $delete_after_processing);

        $json_response = json_decode($response, $return_associative);
        $finalresult = '';

        // Depends on $type = receipt type
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

            /**
             * New receipt Type
             *  case 'new_receipt type':
             *      $finalResult = $this->someCustomeMethod($json_response);    --> use $finalResultVariable
             *
             *
             *      // create new method within this File
             *      Sample method: getDataBdoCashTransactionSlip()
             *
             *
             *      // format
             *      $finalResult = [
             *          'dateTime' => Y-m-d H:i:s
             *          'referenceNumber' => 'data'
             *          'amount' => float --> currency 'PHP' not included
             *      ];
             *
             *  break;
             */

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
        return view('form.verify-form', compact('details'));
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
        $gcashFinalResult['referenceNumber'] = $this->getValueBetweenstrings($json_response['ocr_text'], 'InstaPay Trace No.', 'Ref No.');
        $gcashFinalResult['amount'] = floatval($json_response['line_items'][0]['total']);
        return $gcashFinalResult;
    }

    private function getDataGcash($json_response) {
        $gcashFinalResult['dateTime'] = $json_response['date'];
        $gcashFinalResult['referenceNumber'] = $this->getValueBetweenstrings($json_response['ocr_text'], 'InstaPay Trace No.', 'Ref No.');
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


//=========================================================================================

        // for summary
    public function showSummary(Request $request )
    {
        return view('form.summary-form');
    }

    public function postSummary(Request $request )
    {
        return view('form.summary-form');
    }


//=========================================================================================


        // for submit
    public function showSubmit(Request $request )
    {
        return view('form.submit-form');
    }


//=========================================================================================

   

}
