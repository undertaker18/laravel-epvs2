<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use veryfi\Client;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Privacy;
use App\Models\Profile;
use App\Models\UploadForm;
use App\Models\Payment;

class FormController extends Controller
{
        // for privacy
    public function privacy(Request $request )
    {
        $privacy = new Privacy();
        return view('form.privacy-notice-form', compact('privacy'));
    }
    
    public function postPrivacy(Request $request)
    {
        $request->validate([
            'privacy_notice' => 'required',
        ]);

        $privacy = new Privacy();

        $counter = Privacy::count() + 1; // Get the count of existing records and increment by 1
        $paddingLength = 9; // Generate a random padding length between 1 and 9

        $privacy->privacy_key = 'PK-' . str_pad($counter, $paddingLength, '0', STR_PAD_LEFT);
        $privacy->privacy_notice = $request->privacy_notice;

        if ($privacy->save()) {
            $request->session()->put('LoggedUser', $privacy->privacy_key);
            return redirect('/profile-form');
        }

        return redirect('/privacy-form');
    }

    
    //=================================================================================

        // for profile
    public function profile(Request $request )
    {
        $counts = $request->input('counts');
        $countForm = $request->input('counts') + 1 ; // Initial value for $count

        
        $data = ['LoggedUserPrivacy'=>Privacy::where('privacy_key','=', session('LoggedUser'))->first()];
        return view('form.profile-form', $data)
        ->with('countForm', $countForm)
        ->with('counts', $counts);
     
    

    }

    public function postProfile(Request $request)
    {
        $validatedData = $request->validate([
            'fullname' => 'required',
            'email' => 'required',
            'scholarshipStatus' => 'required',
            'department' => 'required',
            'section_course' => 'required',
            'grade_year' => 'required',
            'student_type' => 'required',
        ]);

        $profile = new Profile();
        $profile->profile_key = $request->profile_key;
        $profile->fullname = $validatedData['fullname'];
        $profile->email = $validatedData['email'];
        $profile->scholarshipStatus = $validatedData['scholarshipStatus'];
        $profile->department = $validatedData['department'];
        $profile->section_course = $validatedData['section_course'];
        $profile->grade_year = $validatedData['grade_year'];
        $profile->student_type = $validatedData['student_type'];
        $profile->save();

        try {
            $profile->save();
        } catch (\Exception $e) {
           
            // Log the error or handle it as needed
            return redirect('/submit-form')->with('error', 'Failed to save the profile.');
        }

        $request->session()->put('LoggedUser', $profile->profile_key);
        return redirect('/upload-form');
    }

    
    //========================================================================================
        
    // for upload
    public function upload(Request $request )
    {
        
        $data = ['LoggedUserProfile'=>Profile::where('profile_key','=', session('LoggedUser'))->first()];
        return view('form.upload-form-2', $data);
    }


    public function postUpload(Request $request) {

        if ($request->hasFile('receipt')) {
            $image = $request->file('receipt');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('ASSETS/receipts/temp/'), $filename); // save to temporary folder
        
            // Store data in session
            $request->session()->put('receipt_type', $request->input('receipt_type'));
            $request->session()->put('receipt', $filename);

            $uploadform = new UploadForm();
            $uploadform->uploadform_key = $request->uploadform_key;
            $uploadform->receipt_type = $request->input('receipt_type'); // Add the receipt type to the object
            $uploadform->receipt_filename = $filename; // Add the receipt filename to the object
            
            $uploadform->save();
            
            // Store 'LoggedUser' in session
            
            $request->session()->put('LoggedUser', $uploadform->uploadform_key);
            return redirect()->route('verify-form');

        }
        
        return redirect()->back()->with('error', 'Please Upload your Receipt.');
    }


    // =========================================================================================
        // for verify
    public function verify(Request $request )
    {   
        // get from session
        $type = Session::get('receipt_type');
        $receipt = Session::get('receipt');

        if (is_null($receipt) || is_null($type)) {
            return redirect()->route('upload-form');
        }

        // Veryfi API Credentials
        // Change when Veryfi expires
        //$client_id = 'vrfRNNDKzOCalsn1fMoHEPw13jYIsMDwnBbAfUJ';
        //$client_secret = 'bbxAZXGKwh1AKTzgUhyZ8xzw2ykZJ9iH0pnNUjlnfnYJ8tjxCDNt4sHtMiPrwbWUAGkT8WZ87W7c8l4vsRLJjAKsZNX3oUze135SSE4JaCO47U7tIlEhDuAa2ELYwklb';
        //$username = 'jordanearlpascua1';
        //$api_key = '4849078385c87162e2e014c19b99383a';
        // end

        $client_id = 'vrfxpWEN0irTTKozo7eP8wjymtcdnFwv9y1Mg4n';
        $client_secret = '7xIvhgX41I5Urdk3gX9Z8s0basM0U0a42LW2i2EGhtuGw5oBakfIhK6cfO2eJXbid1Oz0tca1dEpAbYuNOM4tMvOnnFRvx724RlASKDgW3eKDmmAx3ujR5H2FhdyM4cA';
        $username = 'jordanearlimperialpascua20';
        $api_key = '4f708f480170a044368643ef0929850e';

        $file = public_path() . '/assets/receipts/temp/' . $receipt;

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
                'receipt' => "/ASSETS/receipts/temp/". $receipt,
                
            ];
            
            $data = ['LoggedUserUploadForm'=>UploadForm::where('uploadform_key','=', session('LoggedUser'))->first()];
                return view('form.verify-form', $data)
                ->with('details', $details);

        }

        public function postVerify(Request $request )
        {
            $request->validate ([
                'payment_for' => 'required',
                'reference' => 'required|unique:payment',
                'amount' => 'required',
                'date' => 'required',
                
            ]);
    
            $payment  = new Payment();

            $payment->payment_key = $request->payment_key;
           
            $payment->payment_for = $request->payment_for;
            $payment->reference = $request->reference;
            $payment->amount = $request->amount;
            $payment->date = $request->date;
            $payment->time = $request->time;
            
            $payment->save();

            // Store 'LoggedUser' in session
            $request->session()->put('LoggedUser', $payment->payment_key);
           
            return redirect('/summary-form')
            ->with('success', ' Submitted Successfully!!!');

        }

        //==============================================================================================================

        
            // for summary
        public function summary(Request $request )
        {
            $profile = Profile::all();
            $uploadform = UploadForm::all();
            $payment = Payment::all();

            return redirect('/submit-form', compact('profile','uploadform', 'payment'));

            return view('form.summary-form');
        }


        public function postSummary(Request $request )
        {

            return view('form.summary-form');
        }


        //=====================================================================================================
            // for submit
        public function submit(Request $request )
        {
            return view('form.submit-form');
        }

        

        private function getValueBetweenstrings($paragraph ,$string1, $string2) {
            $stringOnePosition = strpos($paragraph, $string1, 0);
            $stringTwoPosition =  strpos($paragraph, $string2, $stringOnePosition);

            return rtrim(ltrim(substr($paragraph, $stringOnePosition + (strlen($string1)), $stringTwoPosition - $stringOnePosition - (strlen($string1)))));
        }

        // create new method within this File
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


}
