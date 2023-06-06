<?php

namespace App\Http\Controllers;

use App\Mail\PaymentSummary;
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
use App\Models\XeroInvoice;
use Exception;
use Illuminate\Support\Facades\Mail;
use App\Models\XeroUsers;
use App\Models\YearLevelElem;
use App\Models\YearLevelJunior;
use App\Models\YearLevelSenior;
use App\Models\YearLevelCollege;

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
        $paddingLength = 5; // Generate a random padding length between 1 and 5

        $privacy->privacy_key = 'EPVS-ID-' . str_pad($counter, $paddingLength, '0', STR_PAD_LEFT);
        $privacy->privacy_notice = $request->privacy_notice;

        if ($privacy->save()) {
            return redirect('/profile-form');
        } else {
            $errorMessage = 'Failed to save privacy notice. Please try again.';
            return view('form.privacy-notice-form', compact('errorMessage'));
        }
    }

    


    //=================================================================================

    public function profile(Request $request)
    {
        $counts = $request->input('counts');
        $countForm = $request->input('counts') + 1; // Initial value for $count

        $searchQuery = $request->input('search');
        $results = []; // Initialize the $results variable as an empty array

        if ($searchQuery) {
            $results = XeroUsers::search($searchQuery)->get(['xero_account_name']);
        } else {
            $results = XeroUsers::all(['xero_account_name']);
        }
        // Pass the search results to the view
        $data['results'] = $results;

        $yearlevelelem = YearLevelElem::all();
        $yearleveljunior = YearLevelJunior::all();
        $yearlevelsenior = YearLevelSenior::all();
        $yearlevelcollege = YearLevelCollege::all();

        return view('form.profile-form', compact('results', 'countForm', 'counts', 'yearlevelelem', 'yearleveljunior', 'yearlevelsenior','yearlevelcollege'));

    }
     
    public function postProfile(Request $request)
    {
        $fullnameList = $request->input('fullname');
        $emailList = $request->input('email');
        $scholarshipStatusList = $request->input('scholarshipStatus');
        $departmentList = $request->input('department');
        $grade_yearList = $request->input('grade_year');
        $student_typeList = $request->input('student_type');
    
        // Generate profile_key once outside the loop
        $counter = Profile::count() + 1;
        $paddingLength = 5;
        $profileKey = 'EPVS-ID-' . str_pad($counter, $paddingLength, '0', STR_PAD_LEFT);
    
        foreach ($fullnameList as $index => $fullname) {
            $validatedData = $request->validate([
                'fullname',
                'email',
                'scholarshipStatus',
                'department',
                'grade_year',
                'student_type',
            ]);
    
            $profile = new Profile();
            $profile->profile_key = $profileKey; // Assign the same profile_key to each profile
            $profile->fullname = $fullname;
            $profile->scholarshipStatus = $scholarshipStatusList[$index];
            $profile->email = $emailList[$index];
            $profile->department = $departmentList[$index];
            $profile->grade_year = $grade_yearList[$index];
            $profile->student_type = $student_typeList[$index];
            $profile->save();
        }
    
        return redirect('/upload-form');
    }
    

    //========================================================================================

    // for upload
    public function upload(Request $request )
    {
        return view('form.upload-form-2');
    }


    public function postUpload(Request $request)
    {
      
    
        if ($request->hasFile('receipt')) {
            $image = $request->file('receipt');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('assets/receipts/temp/'), $filename); // save to temporary folder
    
            // Store data in session
            $request->session()->put('receipt_type', $request->input('receipt_type'));
            $request->session()->put('receipt', $filename);
    
              // Generate profile_key once outside the loop
            $counter = Profile::count() + 1;
            $paddingLength = 5;
            $uploadKey = 'EPVS-ID-' . str_pad($counter, $paddingLength, '0', STR_PAD_LEFT);

            $uploadform = new UploadForm();
            $uploadform->upload_key = $uploadKey;
            $uploadform->receipt_type = $request->input('receipt_type'); // Add the receipt type to the object
            $uploadform->receipt_filename = $filename; // Add the receipt filename to the object
    
            $uploadform->save();

    
            return redirect()->route('verify-form');
        }
    
        return redirect()->back()->with('error', 'Please Upload your Receipt.');
    }


    // =========================================================================================
        // for verify
    public function verify(Request $request )
    {
        $counts = $request->input('counts');
        $countForm = $request->input('counts') + 1; // Initial value for $count
        // get from session
       
        $type = Session::get('receipt_type');
        $receipt = Session::get('receipt');

        if (is_null($receipt) || is_null($type)) {
            return redirect()->route('upload-form');
        }

        // Veryfi API Credentials
        // Change when Veryfi expires

         //already use

        // $client_id = 'vrfRNNDKzOCalsn1fMoHEPw13jYIsMDwnBbAfUJ';
        // $client_secret = 'bbxAZXGKwh1AKTzgUhyZ8xzw2ykZJ9iH0pnNUjlnfnYJ8tjxCDNt4sHtMiPrwbWUAGkT8WZ87W7c8l4vsRLJjAKsZNX3oUze135SSE4JaCO47U7tIlEhDuAa2ELYwklb';
        // $username = 'jordanearlpascua1';
        // $api_key = '4849078385c87162e2e014c19b99383a';

        //$client_id = 'vrfxpWEN0irTTKozo7eP8wjymtcdnFwv9y1Mg4n';
        //$client_secret = '7xIvhgX41I5Urdk3gX9Z8s0basM0U0a42LW2i2EGhtuGw5oBakfIhK6cfO2eJXbid1Oz0tca1dEpAbYuNOM4tMvOnnFRvx724RlASKDgW3eKDmmAx3ujR5H2FhdyM4cA';
        //$username = 'jordanearlimperialpascua20';
        //$api_key = '4f708f480170a044368643ef0929850e';

        // $client_id ='vrfRD2cIa2muApJCPIAycxAIBhsWdRdWZGU2AmK';
        // $client_secret = 'umiz9E1iS679UlxgGT754RpcguZex6JNki1offGwnwOjalbDICrFV27xANaswNCw8mOl2zNBcMogcupHJD3CEGhIJsruhZdvjWJOwFeji9fRXIIzsm9ELUPJpU328bH4';
        // $username = 'angelblaze779';
        // $api_key = '434562be5ba93a74021d918a963f43f2';

        $client_id ='vrfN8tg7bBuu2hgOKFNMD1o6FLMlwPojtBzI2Ky';
        $client_secret = 'wDyxbr99zb5T6DY2n3U1GbTHhgVcYb9Hv7cwcxJ2fSc9dPZGkNJr3sxXVLZ8iwuIaoEO1ytbbk4FC6FUPENjB8BssjL1ylCfv6JNHWFN9xioBk6KPCxt2t1REr6Fo7zZ';
        $username = 'rmadelyn712';
        $api_key = 'a55c9dae529597198dd99f00598cc332';

        //Not use

        // $client_id ='vrf0yw1K3D2cWxVe3XhlCBZgPvsjhUU9sFGcjPD';
        // $client_secret = 'U4YES3dVP5ijlMGDHOWsMdxmV8T6hEY7oIvFR6erKAyY7WGTeCLex7LAYO8T8wmVWD8nKBJ0DKE1kKDUZpdSZ4miDxYEFoImIbzvWZoOm604unlE35ULcZ1n7OfBb1C8';
        // $username = 'madelyn0514romero';
        // $api_key = '22e388e0df4e489f79e691c450d494d3';

        // $client_id ='vrfyoMT6xIpolCzVA4MWyJEYtf1IAEXmU4xgkal';
        // $client_secret = 'okc0I90wfw1aj4KTYrHGUD20hu4GLCAGLS2Xr81U4mjcBMUAnKVjLZl7jCEfWA2zCdGdVdheucHa2WBzWDkmuRxd23VaemihnKZJh1S6JpioCInt0gcMrG3dNPUCH8zH';
        // $username = 'lvcsepvs123';
        // $api_key = 'd7d26429e6a799e7896ca15c2182a7d3';

        // $client_id ='vrfRs45eloHmgMc02YJliDubCy0L2CSvlW5OOpL';
        // $client_secret = 'caGOGIsX76pKdpLSxHoPhZho49ANmHr63K3f1VLbSKCs9X3HSdHHXjOh2ecl2m2EnXg2w65CRdyGmiitRl4O8VYjn4hXeV1l2sCG4Pgo62rvldtLZPBgowziAkZLFEpE';
        // $username = 'pcapstone533';
        // $api_key = '6221ed3571890802da2df96ad9b0ea67';

        // $client_id ='vrfUHTYkRzDDZ1jmH6wydo8NVZV5oKIUge8hoS8';
	    // $client_secret ='v1ni0juzOJE6ZOOnLzuH4Y8aAsYPfSUVjLZ1gxm40YkD8retUHcLGzVmCxIvA2BIzRbo9kVfb6STAsxfTaLV0PoRPRWxBksfforw9VkszZCzaEzwcgCgJj2TOHIFpE9w';
	    // $username ='daneruemiri87';
	    // $api_key ='ce90022de5d976a06da2f4b8bdc53621';

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
                'receipt' => "/assets/receipts/temp/". $receipt,

            ];

            return view('form.verify-form', compact('details','countForm', 'counts'));
            // return view('form.verify-form');
        }


        public function postVerify(Request $request )
        {
            $paymentForList = $request->input('payment_for');
           
            $payments_for = implode(', ', $paymentForList);
          
            
               // Generate profile_key once outside the loop
               $counter = Profile::count() + 1;
               $paddingLength = 5;
               $paymentKey = 'EPVS-ID-' . str_pad($counter, $paddingLength, '0', STR_PAD_LEFT); 

            $request->validate ([
                'payment_for' => 'required',
                'reference' => 'required',
                'amount' => '',
                'date' => '',
                'time' => '',
            ]);

            $payment  = new Payment();

            $payment->payment_key =  $paymentKey;
            $payment->payment_for = $payments_for;
            $payment->reference = $request->reference;
            $payment->amount = $request->amount;
            $payment->date = $request->date;
            $payment->time = $request->time;
            
            
        //     $check= Payment::where([
        //         ['reference','=', $payment->reference ]
        //     ]);
        //    if($check){
        //     $request->session()->flash('error','Reference is already used')
        //    };

            $payment->save();
            
            return redirect('/summary-form')
            ->with('success', ' Submitted Successfully!!!');

        }

        //==============================================================================================================


            // for summary
        public function summary(Request $request )
        {
            // Get the receipt filename from the upload form record
            
            $receiptFilename =  UploadForm::latest('upload_key')->value('receipt_filename');
            $imagedetails = ['receipt' => "/assets/receipts/temp/" . $receiptFilename];
            // dd($receiptFilename);

            // profile
            $latestProfileKey = Profile::latest('profile_key')->value('profile_key');
          
            $profileDetails = DB::table('profile')
            ->where('profile_key', '=' ,  $latestProfileKey )
            ->get();

            // upload
            $latestUploadKey = UploadForm::latest('upload_key')->value('upload_key');
          
            $uploadDetails = DB::table('uploadform')
            ->where('upload_key', '=' ,  $latestUploadKey )
            ->get();

            // payment
            $latestPaymentKey = Payment::latest('payment_key')->value('payment_key');
          
            $paymentDetails = DB::table('payment')
            ->where('payment_key', '=' ,  $latestPaymentKey )
            ->get();

            // $transaction_no = Profile::latest()->get('transaction_columnname');

            // $variable = DB::table('table_name')
            // ->join(.....)
            // ->where('transaction_columnname', '=', $transaction_no)
            // ->get();

                return view('form.summary-form', compact('profileDetails','uploadDetails','paymentDetails'))
                ->with('imagedetails', $imagedetails);
            

        }


        public function postSummary(Request $request )
        {

           

            // Perform the conditional update
            // DB::table('xero_invoice')
            // ->join('bdo_receipt', 'xero_invoice.reference', '=', 'bdo_receipt.reference2')
            // ->update(['receiptStatus' => '2']);

        }


        //=====================================================================================================
            // for submit
        public function submit(Request $request )
        {

            return view('form.submit-form');
        }


        public function postSubmit(Request $request )
        {

            $data = [];
            $labels = [
               
                "fullname" => "Full Name:",
                "email" => "Email:",
                "scholarshipStatus" => "Scholarship Status:",
                "department" => "Department:",
                "grade_year" => "Grade/Year:",
                "student_type" => "Student Type:",

                "payment_for" => "Payment For:",
                "receipt_type" => "Receipt Type:",  
                "reference" => "Reference:",
                "amount" => "Receipt Amount:",
                "date" => "Receipt Date:",
                "time" => "Receipt Time:",
            ];
         
            foreach ($request->all() as $key => $value){
                $explodeValue = explode('##', $key);
                if (in_array($key, ['_token', 'receipt_source##']) === true) {
                } else if (in_array($explodeValue[0], ['reference','amount','payment_for','date','time','receipt_type',]) === false) {
                    $data['data']['summary']['studentsInfo'][$explodeValue[1]][$labels[$explodeValue[0]]] = $value;
                } else {
                    $data['data']['summary']['receipt'][$labels[$explodeValue[0]]] = $value;
                }
            }
          
            foreach ($data['data']['summary']['studentsInfo'] as $key => $stud) {
                $recipient[$key]['fullname'] = $stud['Full Name:'];
                $recipient[$key]['email'] = $stud['Email:'];
            }

            $data['subject'] = 'Payment Summary';
            $data['labels'] = $labels;
            $data['receipt'] = $request->all()['receipt_source##'];
            
           
            foreach ($recipient as $recipientKey => $rec) {
                $data['name'] = $rec['fullname'];
                $email = $rec['email'];
                Mail::to($email)->send(new PaymentSummary($data));

            }
          
            return redirect('/submit-form');
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
