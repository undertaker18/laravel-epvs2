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
use App\Models\FormEpv;


class FormController extends Controller
{ 
    // for welcome

    public function index(Request $request)
    {
        return view('welcome');
    }
    public function processForm(Request $request)
    {
        $formEpv = new FormEpv(['box' => $request->input('box')]);
        $formEpv->save();
    
        // Redirect to the privacy notice page with the recently created FormEpv ID
        return redirect()->route('privacy-form', $formEpv->id);
    }
// -------------------------------------------------------------------------------------------------------------

    // for privacy view
    public function privacy($formEpvId)
    {
        $formEpv = FormEpv::findOrFail($formEpvId);

        return view('form.privacy-notice-form', compact('formEpv'));
    }
    
 
    // for privacy post
    public function postPrivacy(Request $request, $formEpvId)
    {
        $formEpv = FormEpv::findOrFail($formEpvId);

        $privacy = new Privacy();
        $privacy->privacy_notice = $request->input('privacy_notice');
        $formEpv->privacy()->save($privacy);

       // Redirect to the profile create page
       return redirect()->route('profile-form', $formEpvId);
    }


    public function editPrivacy($formEpvId)
    {
        $formEpv = FormEpv::findOrFail($formEpvId);

        return view('form.edit.privacy-notice-edit', compact('formEpv'));
    }
    

    // for privacy update 
    public function updatePrivacy(Request $request, $formEpvId)
    {
        $formEpv = FormEpv::findOrFail($formEpvId);

        // Check if a privacy record already exists
        if ($formEpv->privacy) {
            $privacy = $formEpv->privacy;
        } else {
            $privacy = new Privacy();
        }

        $privacy->privacy_notice = $request->input('privacy_notice');
        $formEpv->privacy()->save($privacy);

        // Redirect to the profile create page
        return redirect()->route('profile-form', $formEpvId);
    }


    //=========================================================================================================

    public function profile(Request $request, $formEpvId)
    {
        

        $count = 1;
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

        $formEpv = FormEpv::findOrFail($formEpvId);

        return view('form.profile-form', compact('results', 'countForm', 'count', 'yearlevelelem', 'yearleveljunior', 'yearlevelsenior','yearlevelcollege', 'formEpv', ));

    }
     
    public function postProfile(Request $request, $formEpvId)
    {
        $formEpv = FormEpv::findOrFail($formEpvId);

        $fullnameList = $request->input('fullname');
        $emailList = $request->input('email');
        $scholarshipStatusList = $request->input('scholarshipStatus');
        $departmentList = $request->input('department');
        $grade_yearList = $request->input('grade_year');
        $student_typeList = $request->input('student_type');

        foreach ($fullnameList as $index => $fullname) {
            $validatedData = $request->validate([
                'fullname' => '',
                'email' => '',
                'scholarshipStatus' => '',
                'department' => '',
                'grade_year' => '',
                'student_type' => '',
            ]);

            $profile = new Profile();

            $profile->fullname = $fullname;
            $profile->scholarshipStatus = $scholarshipStatusList[$index];
            $profile->email = $emailList[$index];
            $profile->department = $departmentList[$index];
            $profile->grade_year = $grade_yearList[$index];
            $profile->student_type = $student_typeList[$index];
            $profile->form_epv_id = $formEpv->id; // Assign the 'form_epv_id' value
            $profile->save();
        }

        return redirect()->route('upload-form', $formEpvId);
    }
   

    

    //========================================================================================

    // for upload
    public function upload(Request $request, $formEpvId)
    {
       

        $counts = $request->input('counts');
        $countForm = $request->input('counts') + 1; // Initial value for $count

        $formEpv = FormEpv::findOrFail($formEpvId);

        return view('form.upload-form-2', compact('countForm', 'counts', 'formEpv'));
    }


    public function postUpload(Request $request, $formEpvId)
    {       
        $formEpv = FormEpv::findOrFail($formEpvId);
           

        if ($request->hasFile('receipt')) {
            $image = $request->file('receipt');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('assets/receipts/temp/'), $filename); // save to temporary folder
    
            // Store data in session
            $request->session()->put('receipt_type', $request->input('receipt_type'));
            $request->session()->put('receipt', $filename);
    
            
            $paymentForList = $request->input('payments_for');

            if (is_array($paymentForList)) {
                $paymentForSeparator = implode(', ', $paymentForList);
            } elseif (is_string($paymentForList)) {
                $paymentForSeparator = $paymentForList;
            } else {
                $paymentForSeparator = "";
            }

            $paymentForList1 = $request->input('payments_for1');

            if (is_array($paymentForList1)) {
                $paymentForSeparator1 = implode(', ', $paymentForList1);
            } elseif (is_string($paymentForList1)) {
                $paymentForSeparator1 = $paymentForList1;
            } else {
                $paymentForSeparator1 = "";
            }

            $paymentForList2 = $request->input('payments_for2');

            if (is_array($paymentForList2)) {
                $paymentForSeparator2 = implode(', ', $paymentForList2);
            } elseif (is_string($paymentForList2)) {
                $paymentForSeparator2 = $paymentForList2;
            } else {
                $paymentForSeparator2 = "";
            }
           
            $eachForList = $request->input('each_amount');
           
            $eachAmountForSeparator = []; // Define as an array
            if (is_array($eachForList)) {
                $eachAmountForSeparator = $eachForList; // Assign the array
            } elseif (is_string($eachForList)) {
                $eachAmountForSeparator[] = $eachForList; // Append the string to the array
            }
            
            $request->session()->put('each_amount', $eachAmountForSeparator);
           
            $validatedData = $request->validate([
                'payments_for' => '',
                'each_amount' => '',
            ]);

               
                // Your existing code...

                    $paymentForSeparatorList = [
                        $paymentForSeparator,
                        $paymentForSeparator1,
                        $paymentForSeparator2
                    ];

                    $eachForList = [
                        $eachForList[0],
                        $eachForList[1] ?? null,
                        $eachForList[2] ?? null
                    ];

                    if (!empty($paymentForSeparatorList) && !empty($eachForList)) {
                        foreach ($paymentForSeparatorList as $index => $payment) {
                            if (isset($payment)) {
                                $filteredPaymentList[] = $payment;
                            }

                            $uploadform = new UploadForm();
                            $uploadform->payments_for = $payment;

                            if ($eachForList[$index] === null) {
                                break; // Exit the loop if a null value is encountered
                            }

                            $uploadform->each_amount = $eachForList[$index];

                            $uploadform->receipt_type = $request->input('receipt_type');
                            
                            $uploadform->receipt_filename = $filename;

                            $uploadform->form_epv_id = $formEpv->id; // Assign the 'form_epv_id' value

                            $uploadform->save(); // Save the model to the database
                        }
                    }

           

            return redirect()->route('verify-form', $formEpvId);
        }
      

        return redirect()->back()->with('error', 'Please Upload your Receipt.');
    }


    // =========================================================================================
        // for verify
    public function verify(Request $request, $formEpvId )
    {
        $formEpv = FormEpv::findOrFail($formEpvId);
        // get from session
        $eachamount = Session::get('each_amount');
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

            $amountSum = 0;
            for ($i = 0; $i < count($eachamount); $i++) {
                $amountSum += $eachamount[$i];
            }

            return view('form.verify-form', compact('details', 'amountSum', 'formEpv'));
            // return view('form.verify-form');
        }


        public function postVerify(Request $request, $formEpvId)
        {
            $formEpv = FormEpv::findOrFail($formEpvId);

               // Generate profile_key once outside the loop
               $counter = Profile::count() + 1;
               $paddingLength = 5;
               $paymentKey = 'EPVS-ID-' . str_pad($counter, $paddingLength, '0', STR_PAD_LEFT); 

            $request->validate ([
                'reference' => 'required',
                'amount' => '',
                'date' => '',
                'time' => '',
            ]);

            $payment  = new Payment();

            $payment->reference = $request->reference;
            $payment->amount = $request->amount;
            $payment->date = $request->date;
            $payment->time = $request->time;
            $payment->form_epv_id = $formEpv->id; // Assign the 'form_epv_id' value
            
            
        //     $check= Payment::where([
        //         ['reference','=', $payment->reference ]
        //     ]);
        //    if($check){
        //     $request->session()->flash('error','Reference is already used')
        //    };

            $payment->save();
            
            return redirect()
            ->route('summary-form', $formEpvId)
            ->with('success', ' Submitted Successfully!!!');

        }

        //==============================================================================================================

        // for summary
        public function summary(Request $request, $formEpvId)
        {
            $formEpv = FormEpv::findOrFail($formEpvId);

           // Get the receipt filename from the upload form record
            $uploadForm = $formEpv->uploadForm()->first(); // Use the first() method instead of find()

            if ($uploadForm) {
                $receiptFilename = $uploadForm->receipt_filename;
                $imagedetails = ['receipt' => "/assets/receipts/temp/" . $receiptFilename];
            } else {
                // Handle the case where the record with the given ID is not found
                $imagedetails = null;
            }

            // Retrieve the form_epvs record with its related data
            $formEpvs = FormEpv::with('privacy', 'profile', 'uploadForm', 'payment')->find($formEpvId);

            return view('form.summary-form', compact('formEpvs', 'formEpv'))
                ->with('imagedetails', $imagedetails);
        }


        public function postSummary(Request $request, $formEpvId)
        {
            // Perform the conditional update
            // DB::table('xero_invoice')
            // ->join('bdo_receipt', 'xero_invoice.reference', '=', 'bdo_receipt.reference2')
            // ->update(['receiptStatus' => '2'])

            $formEpv = FormEpv::findOrFail($formEpvId);
            $data = [];
            $labels = [
               
                "fullname" => "Full Name:",
                "email" => "Email:",
                "scholarshipStatus" => "Scholarship Status:",
                "department" => "Department:",
                "grade_year" => "Grade/Year:",
                "student_type" => "Student Type:",

                
                "receipt_type" => "Receipt Type:",  
                "reference" => "Reference:",
                "amount" => "Receipt Amount:",
                "date" => "Receipt Date:",
                "time" => "Receipt Time:",

                "payments_for" => "Payment For:",
                "each_amount" => "Amount Per Student :",
            ];
         
            foreach ($request->all() as $key => $value){
                $explodeValue = explode('##', $key);
                if (in_array($key, ['_token', 'receipt_source##']) === true) {
                } else if (in_array($explodeValue[0], ['reference','amount','date','time','receipt_type','payments_for','each_amount',]) === false) {
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
          
            return redirect()
            ->route('submit-form', $formEpvId);

        }


        //=====================================================================================================
            // for submit
        public function submit(Request $request, $formEpvId)
        {
            $formEpv = FormEpv::findOrFail($formEpvId);
            
            return view('form.submit-form', compact('formEpv'));
        }


        public function postSubmit(Request $request, $formEpvId)
        {
            $formEpv = FormEpv::findOrFail($formEpvId);

            return redirect()
            ->route('submit-form', $formEpvId);
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
