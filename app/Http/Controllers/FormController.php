<?php

namespace App\Http\Controllers;

use App\Mail\PaymentSummary;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use veryfi\Client;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\EpvsForm;
use App\Models\XeroInvoice;
use Exception;
use Illuminate\Support\Facades\Mail;
use App\Models\XeroUsers;
use App\Models\YearLevelElem;
use App\Models\YearLevelJunior;
use App\Models\YearLevelSenior;
use App\Models\YearLevelCollege;
use Illuminate\Support\Facades\Redirect;

class FormController extends Controller
{
    
    // for privacy
    public function privacy(Request $request )
    {
        
        return view('form.privacy-notice-form');
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
        $privacy_notice = $request->input('privacy_notice');

        $fullname1 = $request->input('fullname1');
        $fullname2 = $request->input('fullname2');
        $fullname3 = $request->input('fullname3');

        $email1 = $request->input('email1');
        $email2 = $request->input('email2');
        $email3 = $request->input('email3');

        $scholarshipStatus1 = $request->input('scholarshipStatus1');
        $scholarshipStatus2 = $request->input('scholarshipStatus2');
        $scholarshipStatus3 = $request->input('scholarshipStatus3');

        $department1 = $request->input('department1');
        $department2 = $request->input('department2');
        $department3 = $request->input('department3');

        $grade_year1 = $request->input('grade_year1');
        $grade_year2 = $request->input('grade_year2');
        $grade_year3 = $request->input('grade_year3');

        $student_type1 = $request->input('student_type1');
        $student_type2 = $request->input('student_type2');
        $student_type3 = $request->input('student_type3');
    
       
            $validatedData = $request->validate([

                'privacy_notice',
               
                'fullname1',
                'fullname2',
                'fullname3',
                
                'email1',
                'email2',
                'email3',

                'scholarshipStatus1',
                'scholarshipStatus2',
                'scholarshipStatus3',

                'department1',
                'department2',
                'department3',

                'grade_year1',
                'grade_year2',
                'grade_year3',

                'student_type1',
                'student_type2',
                'student_type3',

            ]);
    
            $profile = new EpvsForm();
            $profile->privacy_notice = $privacy_notice;

            $profile->fullname1 = $fullname1;
            $profile->fullname2 = $fullname2;
            $profile->fullname3 = $fullname3;

             // Assign the same profile_key to each profile
            $profile->scholarshipStatus1 = $scholarshipStatus1;
            $profile->scholarshipStatus2 = $scholarshipStatus2;
            $profile->scholarshipStatus3 = $scholarshipStatus3;

            $profile->email1 = $email1;
            $profile->email2 = $email2;
            $profile->email3 = $email3;

            $profile->department1 = $department1;
            $profile->department2 = $department2;
            $profile->department3 = $department3;

            $profile->grade_year1 = $grade_year1;
            $profile->grade_year2 = $grade_year2;
            $profile->grade_year3 = $grade_year3;

            $profile->student_type1 = $student_type1;
            $profile->student_type2 = $student_type2;
            $profile->student_type3 = $student_type3;
          
            $profile->save();

            $request->session()->put(['id' => $profile->id ]);
        
            return redirect()->route('upload-form', ['id' => $profile->id]);

    }

    public function showProfile(Request $request)
    { 
        $id =  Session::get('id');
        $transactions = EpvsForm::where('id', '=', $id)->get();
        $transactionId = EpvsForm::where('id', '=', $id)->pluck('id')->first();
       
          // Check if the 'transactionId' parameter exists
        if (is_null($transactionId)) {
            return redirect()->route('home');
        } 

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

        return view('form.edit.profile-upload', compact('transactions', 'transactionId','results','yearlevelelem', 'yearleveljunior', 'yearlevelsenior','yearlevelcollege'));
    }

    public function updateProfile(Request $request)
    { 
        $id =  Session::get('id');
        $transactionId = EpvsForm::where('id', '=', $id)->pluck('id')->first();
        $transantion = EpvsForm::find($transactionId);


        return redirect()->route('upload-form', ['id' => $transactionId]);
    }
    

    //========================================================================================

    // for upload
    public function upload(Request $request )
    { 
         
        $id =  Session::get('id');
        $transactions = EpvsForm::where('id', '=', $id)->get();
        $transactionId = EpvsForm::where('id', '=', $id)->pluck('id')->first();
        // dd($transactionId);
        
          // Check if the 'transactionId' parameter exists
        if (is_null($transactionId)) {
            return redirect()->route('home');
        } 

        return view('form.upload-form-2', compact('transactions', 'transactionId'));
    }


    public function postUpload(Request $request)
    {     
      

        $id =  Session::get('id');
        $transactionId = EpvsForm::where('id', '=', $id)->pluck('id')->first();
           
        $transantion = EpvsForm::find($transactionId);
        

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
           
            $each_amount1 = $request->input('each_amount1');
            $each_amount2 = $request->input('each_amount2');
            $each_amount3 = $request->input('each_amount3');
           
            $eachAmountForSeparator =  $each_amount1 +  $each_amount2 +  $each_amount3;

            $request->session()->put('each_amount', $eachAmountForSeparator);
           


            $transantion->update([
                'payments_for1' => $paymentForSeparator,
                'payments_for2' => $paymentForSeparator1,
                'payments_for3' => $paymentForSeparator2,

                'each_amount1' => $each_amount1,
                'each_amount2' => $each_amount2,
                'each_amount3' => $each_amount3,

                'receipt_type' => $request->input('receipt_type'),

                'receipt_filename' => $filename,
            ]);

            $transantion->save(); // Save the model to the database
                
            $request->session()->put(['id' => $transactionId ]);
                
            return redirect()->route('verify-form', ['id' => $transactionId]);
        }
      

        return redirect()->back()->with('error', 'Please Upload your Receipt.');
    }


    // =========================================================================================
        // for verify
    public function verify(Request $request )
    {
        $id =  Session::get('id');
 
        $transactionId = EpvsForm::where('id', '=', $id)->pluck('id')->first();

          // Check if the 'transactionId' parameter exists
        if (is_null($transactionId)) {
            return redirect()->route('home');
        } 
        
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

        // $client_id ='vrfN8tg7bBuu2hgOKFNMD1o6FLMlwPojtBzI2Ky';
        // $client_secret = 'wDyxbr99zb5T6DY2n3U1GbTHhgVcYb9Hv7cwcxJ2fSc9dPZGkNJr3sxXVLZ8iwuIaoEO1ytbbk4FC6FUPENjB8BssjL1ylCfv6JNHWFN9xioBk6KPCxt2t1REr6Fo7zZ';
        // $username = 'rmadelyn712';
        // $api_key = 'a55c9dae529597198dd99f00598cc332';

        

        $client_id ='vrf0yw1K3D2cWxVe3XhlCBZgPvsjhUU9sFGcjPD';
        $client_secret = 'U4YES3dVP5ijlMGDHOWsMdxmV8T6hEY7oIvFR6erKAyY7WGTeCLex7LAYO8T8wmVWD8nKBJ0DKE1kKDUZpdSZ4miDxYEFoImIbzvWZoOm604unlE35ULcZ1n7OfBb1C8';
        $username = 'madelyn0514romero';
        $api_key = '22e388e0df4e489f79e691c450d494d3';

        //Not use

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
            

            if (isset($finalResult['error'])) {
                // Handle the error case
                 return redirect()->back()->withErrors($finalResult['error']);
            }
            $dateTime = isset($finalResult['dateTime']) ? Carbon::createFromFormat('Y-m-d H:i:s', $finalResult['dateTime']) : null;

            $finalResult['date'] = is_null($dateTime) ? null : $dateTime->format('Y-m-d');
            $finalResult['time'] = is_null($dateTime) ? null : $dateTime->format('H:i:s');

            $details = [
                'ocr_result' => $finalResult,
                'receipt' => "/assets/receipts/temp/". $receipt,

            ];


            return view('form.verify-form', compact('details', 'transactionId'));
            // return view('form.verify-form');
        }


        public function postVerify(Request $request )
        {
            $id =  Session::get('id');
            $transactionId = EpvsForm::where('id', '=', $id)->pluck('id')->first();
               
            $transantion = EpvsForm::find($transactionId);

            $transantion->update([
                'reference' => $request->reference,
                'amount' => $request->amount,
                'date' => $request->date,
                'time' => $request->time,
              
            ]);

            $transantion->save(); // Save the model to the database
        
            $request->session()->put(['id' => $transactionId ]);
        
            return redirect()->route('summary-form', ['id' => $transactionId]);
        }

        //==============================================================================================================


            // for summary
        public function summary()
        {

             
           
            $id =  Session::get('id');
            $transactions = EpvsForm::where('id', '=', $id)->get();
            $transactionId = EpvsForm::where('id', '=', $id)->pluck('id')->first();

            // Check if the 'transactionId' parameter exists
            if (is_null($transactionId)) {
                return redirect()->route('home');
            } 
            // Get the receipt filename from the upload form record 
            $receiptFilename =  EpvsForm::where('id', '=', $id)->pluck('receipt_filename')->first();

            $imagedetails = ['receipt' => "/assets/receipts/temp/" . $receiptFilename];
            // dd($receiptFilename);

            return view('form.summary-form', compact('transactions', 'transactionId'))
            ->with('imagedetails', $imagedetails);
        

        }


        public function postSummary(Request $request )
        {

           // get

                // //-------------------------------------------------------------------
                // $fullname1 = $request->input('fullname1##0');
                // $scholarshipStatus1 = $request->input('scholarshipStatus1##0');
                // $email1 = $request->input('email1##0');
                // $department1 = $request->input('department1##0');
                // $grade_year1 = $request->input('grade_year1##0');
                // $student_type1 = $request->input('student_type1##0');
                // //-------------------------------------------------------------------
                // $fullname2 = $request->input('fullname2##0');
                // $scholarshipStatus2 = $request->input('scholarshipStatus2##0');
                // $email2 = $request->input('email2##0');
                // $department2 = $request->input('department2##0');
                // $grade_year2 = $request->input('grade_year2##0');
                // $student_type2 = $request->input('student_type2##0');
                // //======================================================================
                // $fullname3 = $request->input('fullname3##0');
                // $scholarshipStatus3 = $request->input('scholarshipStatus3##0');
                // $email3 = $request->input('email3##0');
                // $department3 = $request->input('department3##0');
                // $grade_year3 = $request->input('grade_year3##0');
                // $student_type3 = $request->input('student_type3##0');
                // //---------------------------------------------------------------------
                // $reference = $request->input('reference##0');
                // $amount = $request->input('amount##0');
                // $date = $request->input('date##0');
                // $time = $request->input('time##0');
                // $receipt_type = $request->input('receipt_type##0');
                // //====-==================================================================
                // $each_amount1 = $request->input('each_amount1##0');
                // $payments_for1 = $request->input('payments_for1##0');
                // //-------------------------------------------------------
                // $each_amount2 = $request->input('each_amount2##0');
                // $payments_for2 = $request->input('payments_for2##0');
                // //------------------------------------------------------------------------
                // $each_amount3 = $request->input('each_amount3##0');
                // $payments_for3 = $request->input('payments_for3##0');
                
                // // group
                // $fullnames = array($fullname1, $fullname2, $fullname3);
                // $scholarshipStatuses = array($scholarshipStatus1, $scholarshipStatus2, $scholarshipStatus3);
                // $emails = array($email1, $email2, $email3);
                // $departments = array($department1, $department2, $department3);
                // $grade_years = array($grade_year1, $grade_year2, $grade_year3);
                // $student_types = array($student_type1, $student_type2, $student_type3);

                // $each_amounts = array($each_amount1, $each_amount2, $each_amount3);
                // $payments_fors = array($payments_for1, $payments_for2, $payments_for3);

                // //filter 
                // $filterfullname = array_filter($fullnames, function ($fullname) {
                //     return $fullname !== null;
                // });
                // $filterscholarshipStatuses = array_filter($scholarshipStatuses, function ($scholarshipStatus) {
                //     return $scholarshipStatus !== null;
                // });  
                // $filteremail= array_filter( $emails, function ($email ) {
                //     return $email !== null;
                // });
                // $filterdepartment = array_filter($departments, function ($department) {
                //     return $department !== null;
                // });
                // $filtergrade_year = array_filter($grade_years, function ($grade_year) {
                //     return $grade_year !== null;
                // });
                // $filterstudent_type = array_filter($student_types, function ($student_type) {
                //     return $student_type !== null;
                // });

                // $filtereach_amount = array_filter($each_amounts, function ($each_amount) {
                //     return $each_amount !== null;
                // });
                // $filterpayments_for = array_filter($payments_fors, function ($payments_for) {
                //     return $payments_for !== null;
                // });

                // foreach ($filterfullname as $index => $fullname) {
                //     $scholarshipStatus = $filterscholarshipStatuses[$index];
                //     $email = $filteremail[$index];
                //     $department = $filterdepartment[$index];
                //     $grade_year = $filtergrade_year[$index];
                //     $student_type = $filterstudent_type[$index];
                //     $each_amount = $filtereach_amount[$index];
                //     $payments_for = $filterpayments_for[$index];
                
               
                // }
                

        }


        //=====================================================================================================
            // for submit
        public function submit(Request $request )
        {

            return view('form.submit-form');
        }


            public function postSubmit(Request $request )
            {
                //session
                $id =  Session::get('id');
                $transactionId = EpvsForm::where('id', '=', $id)->pluck('id')->first();
                
                // get
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
                
                $fullnames = [$request->input('fullname1##0'), $request->input('fullname2##0'), $request->input('fullname3##0')];
                $scholarshipStatuses = [$request->input('scholarshipStatus1##0'), $request->input('scholarshipStatus2##0'), $request->input('scholarshipStatus3##0')];
                $emails = [$request->input('email1##0'), $request->input('email2##0'), $request->input('email3##0')];
                $departments = [$request->input('department1##0'), $request->input('department2##0'), $request->input('department3##0')];
                $grade_years = [$request->input('grade_year1##0'), $request->input('grade_year2##0'), $request->input('grade_year3##0')];
                $student_types = [$request->input('student_type1##0'), $request->input('student_type2##0'), $request->input('student_type3##0')];
                
                $each_amounts = [$request->input('each_amount1##0'), $request->input('each_amount2##0'), $request->input('each_amount3##0')];
                $payments_fors = [$request->input('payments_for1##0'), $request->input('payments_for2##0'), $request->input('payments_for3##0')];
                
                $filterfullnames = array_filter($fullnames, function ($fullname) {
                    return $fullname !== null;
                });
                $filterscholarshipStatuses = array_filter($scholarshipStatuses, function ($scholarshipStatus) {
                    return $scholarshipStatus !== null;
                });
                $filteremails = array_filter($emails, function ($email) {
                    return $email !== null;
                });
                $filterdepartments = array_filter($departments, function ($department) {
                    return $department !== null;
                });
                $filtergrade_years = array_filter($grade_years, function ($grade_year) {
                    return $grade_year !== null;
                });
                $filterstudent_types = array_filter($student_types, function ($student_type) {
                    return $student_type !== null;
                });
                
                $filtereach_amounts = array_filter($each_amounts, function ($each_amount) {
                    return $each_amount !== null;
                });
                $filterpayments_fors = array_filter($payments_fors, function ($payments_for) {
                    return $payments_for !== null;
                });
                
                foreach ($filterfullnames as $index => $fullname) {
                    $scholarshipStatus = $filterscholarshipStatuses[$index];
                    $email = $filteremails[$index];
                    $department = $filterdepartments[$index];
                    $grade_year = $filtergrade_years[$index];
                    $student_type = $filterstudent_types[$index];
                    $each_amount = $filtereach_amounts[$index];
                    $payments_for = $filterpayments_fors[$index];
                
                    $data['data']['summary']['studentsInfo'][$index][$labels['fullname']] = $fullname;
                    $data['data']['summary']['studentsInfo'][$index][$labels['email']] = $email;
                    $data['data']['summary']['studentsInfo'][$index][$labels['scholarshipStatus']] = $scholarshipStatus;
                    $data['data']['summary']['studentsInfo'][$index][$labels['department']] = $department;
                    $data['data']['summary']['studentsInfo'][$index][$labels['grade_year']] = $grade_year;
                    $data['data']['summary']['studentsInfo'][$index][$labels['student_type']] = $student_type;
                
                    $data['data']['summary']['studentsInfo'][$index][$labels['each_amount']] = $each_amount;
                    $data['data']['summary']['studentsInfo'][$index][$labels['payments_for']] = $payments_for;
                }
                
                $data['data']['summary']['receipt'][$labels['reference']] = $request->input('reference##0');
                $data['data']['summary']['receipt'][$labels['amount']] = $request->input('amount##0');
                $data['data']['summary']['receipt'][$labels['date']] = $request->input('date##0');
                $data['data']['summary']['receipt'][$labels['time']] = $request->input('time##0');
                $data['data']['summary']['receipt'][$labels['receipt_type']] = $request->input('receipt_type##0');
                
                $recipient = [];
                foreach ($data['data']['summary']['studentsInfo'] as $stud) {
                    $recipient[] = [
                        'fullname' => $stud[$labels['fullname']],
                        'email' => $stud[$labels['email']]
                    ];
                }
                
                $data['subject'] = 'Payment Summary';
                $data['labels'] = $labels;
                $data['receipt'] = $request->input('receipt_source##');
                // dd( $data['receipt']);  
                foreach ($recipient as $recipientKey => $rec) {
                    $data['name'] = $rec['fullname'];
                    $email = $rec['email'];
                    Mail::to($email)->send(new PaymentSummary($data));
                }
                
          
                return redirect()->route('submit-form', ['id' => $transactionId]);

            }


//====================================================================================================================================================

        private function getValueBetweenstrings($paragraph ,$string1, $string2) {
            $stringOnePosition = strpos($paragraph, $string1, 0);
            $stringTwoPosition =  strpos($paragraph, $string2, $stringOnePosition);

            return rtrim(ltrim(substr($paragraph, $stringOnePosition + (strlen($string1)), $stringTwoPosition - $stringOnePosition - (strlen($string1)))));
        }

        // create new method within this File
        private function getDataBdoMobileBanking($json_response) {
           
            if (empty($json_response['date']) || empty($json_response['ocr_text']) || empty($json_response['total'])) {
                return ['error' => 'Text not detected. Please try again.'];
            }
            $gcashFinalResult['dateTime'] = $json_response['date'];
            $gcashFinalResult['referenceNumber'] = $this->getValueBetweenstrings($json_response['ocr_text'], 'Reference No.', 'Send Money Type');
            $gcashFinalResult['amount'] = floatval($json_response['total']);
            return $gcashFinalResult;
        }

         private function getDataGcashInstapay($json_response) {
            // Check if any text is not detected
            if (empty($json_response['date']) || empty($json_response['ocr_text']) || empty($json_response['line_items'][0]['total'])) {
                return ['error' => 'The uploaded file is not a receipt. Please try again.'];
            }

            // Process the data
            $gcashFinalResult['dateTime'] = $json_response['date'];
            $gcashFinalResult['referenceNumber'] = $this->getValueBetweenstrings($json_response['ocr_text'], 'InstaPay Trace No.', 'Ref No.');
            $gcashFinalResult['amount'] = floatval($json_response['line_items'][0]['total']);

            return $gcashFinalResult;
        }


        private function getDataGcash($json_response) {

            if (empty($json_response['date']) || empty($json_response['ocr_text']) || empty($json_response['line_items'][0]['total'])) {
                return ['error' => 'The uploaded file is not a receipt. Please try again.'];
            }
            $gcashFinalResult['dateTime'] = $json_response['date'];
            $gcashFinalResult['referenceNumber'] = $this->getValueBetweenstrings($json_response['ocr_text'], 'InstaPay Trace No.', 'Ref No.');
            $gcashFinalResult['amount'] = floatval($json_response['line_items'][0]['total']);
            return $gcashFinalResult;
        }

        private function getDataInstapay($json_response) {

            if (empty($json_response['date']) || empty($json_response['invoice_number']) || empty($json_response['subtotal'])) {
                return ['error' => 'The uploaded file is not a receipt. Please try again.'];
            }

            $gcashFinalResult['dateTime'] = $json_response['date'];
            $gcashFinalResult['referenceNumber'] = $json_response['invoice_number'];
            $gcashFinalResult['amount'] = floatval($json_response['subtotal']);
            return $gcashFinalResult;
        }

        private function getDataBdoCashTransactionSlip($json_response) {

            // Check if any text is not detected
            if (empty($json_response['date']) || empty($json_response['document_reference_number']) || empty($json_response['ocr_text'])) {
                return ['error' => 'The uploaded file is not a receipt. Please try again.'];
            }

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
