<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\receiptrejected;
use App\Models\XeroInvoice;
use App\Models\BdoReceipt;
use App\Models\Receipt;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReceiptArchived;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Spatie\Activitylog\Models\Activity;
use Auth;


class ReceiptController extends Controller
{
    // for view
    public function valid()
    {
        // activity()->log('Viewed Valid Receipt');

        $pendingInvoices = DB::table('xero_invoice')->where('receiptStatus', 1)->get();

        $totalCountPending = $pendingInvoices->count();


        $validInvoices = DB::table('xero_invoice')->where('receiptStatus', 2)->get();

        $totalCountvalid = $validInvoices->count();


        $rejectInvoices = DB::table('xero_invoice')->where('receiptStatus', 3)->get();

        $totalCountreject = $rejectInvoices->count();


        $archiveInvoices = DB::table('xero_invoice')->where('receiptStatus', 4)->get();

        $totalCountarchive = $archiveInvoices->count();


        return view('receipt-valid', ['invoices' => $validInvoices, 'totalCountPending' => $totalCountPending, 'totalCountvalid' => $totalCountvalid, 'totalCountreject' => $totalCountreject, 'totalCountarchive' => $totalCountarchive]);
    }
//=================================================================================================================================
    public function pending()
    {
        // activity()->log('Viewed Pending Receipt');

        $update_status = XeroInvoice::all();

        // dd($update_status);

        $pendingInvoices = DB::table('xero_invoice')->where('receiptStatus', 1)->get();

        $totalCountPending = $pendingInvoices->count();


        $validInvoices = DB::table('xero_invoice')->where('receiptStatus', 2)->get();

        $totalCountvalid = $validInvoices->count();


        $rejectInvoices = DB::table('xero_invoice')->where('receiptStatus', 3)->get();

        $totalCountreject = $rejectInvoices->count();


        $archiveInvoices = DB::table('xero_invoice')->where('receiptStatus', 4)->get();

        $totalCountarchive = $archiveInvoices->count();


        return view('receipt-pending', ['update_status' => $update_status,'invoices' => $pendingInvoices, 'totalCountPending' => $totalCountPending, 'totalCountvalid' => $totalCountvalid, 'totalCountreject' => $totalCountreject, 'totalCountarchive' => $totalCountarchive]);
    }
//=================================================================================================================================

    public function reject()
    {

        // activity()->log('Viewed Perect Receipt');

        $pendingInvoices = DB::table('xero_invoice')->where('receiptStatus', 1)->get();

        $totalCountPending = $pendingInvoices->count();


        $validInvoices = DB::table('xero_invoice')->where('receiptStatus', 2)->get();

        $totalCountvalid = $validInvoices->count();


        $rejectInvoices = DB::table('xero_invoice')->where('receiptStatus', 3)->get();

        $totalCountreject = $rejectInvoices->count();


        $archiveInvoices = DB::table('xero_invoice')->where('receiptStatus', 4)->get();

        $totalCountarchive = $archiveInvoices->count();


        // // todo: May 28, receipt type and user email
        // $xeroInvoice = XeroInvoice::leftJoin('xero_users', 'xero_users.xero_account_id', '=', 'xero_invoice.xero_account_id')
        //     ->select('xero_invoice.id as id', 'xero_users.xero_account_name', 'xero_invoice.xero_account_id', 'xero_invoice.description', 'amount', 'reference', 'xero_invoice.created_at', 'xero_invoice.updated_at')
        //     //  ->where([['status', '=', '0']])
        //     ->get();

        // $countreject = $xeroInvoice->count();

        // return view('receipt-reject-2', compact(['xeroInvoice'], 'countreject'));
        return view('receipt-reject-2', ['invoices' => $rejectInvoices, 'totalCountPending' => $totalCountPending, 'totalCountvalid' => $totalCountvalid, 'totalCountreject' => $totalCountreject, 'totalCountarchive' => $totalCountarchive]);
    }

    public function postReject(Request $request)
    {
        // FOR activity
        $items = new Activity();
        $items->log_name = Auth::user()->name;
        $items->description = 'Emailed Reject Receipt/s';
        $items->causer_id = Auth::user()->id;
        $items->causer_type = 'App\Models\User';
        $items->save();

        $csvIds = $request->all()['csv_ids']; 
        $arrayIds = explode(',', $csvIds);
     
        $xeroInvoice = XeroInvoice::leftJoin('xero_users', 'xero_users.xero_account_id', '=', 'xero_invoice.xero_account_id')
            ->select('xero_invoice.id as id', 'xero_invoice.fullname', 'xero_invoice.xero_account_id', 'xero_invoice.description', 
                'xero_invoice.amount', 'xero_invoice.reference', 'xero_invoice.created_at', 'xero_invoice.updated_at',
                'xero_invoice.email', 'xero_invoice.receipt_type', 'xero_invoice.receipt_src', 'xero_invoice.receiptStatus')
            ->whereIn('xero_invoice.id', $arrayIds)
            ->get();

          


        $sampleReceiptType = [
            'gcash_email' => public_path() . '/assets/sample-receipts/Gcash-email.png',
            'gcash_instapay' => public_path() . '/assets/sample-receipts/Gcash-mobile-save.jpg',
            'gcash' => public_path() . '/assets/sample-receipts/Gcash-mobile-ss.jpg',
            'metrobank' => public_path() . '/assets/sample-receipts/metrobank.jpg',
            'unionbank' => public_path() . '/assets/sample-receipts/unionbank.jpg',
            'PNB-debit' => public_path() . '/assets/sample-receipts/PNB-debit.jpg',
            'instapay' => public_path() . '/assets/sample-receipts/send-money-instapay.jpg',
            'MAYA' => public_path() . '/assets/sample-receipts/pesonet-gateway.jpg',
        ];

        try {
            foreach ($xeroInvoice as $key => $value) {
                // todo: May 28, this is for testing - Change the following
                // if from table: $value->xero_account_name ($value->[column_name])
                $receiptType = $value->receipt_type;
                
                $sampleReceipt =  $sampleReceiptType[$receiptType]; // should match with $sampleReceiptType key
                // dd($sampleReceipt);
                $receipt =   public_path() . $value->receipt_src;// change: get value from database
                $recipient = $value->email; // change: get value from database
                //end

                $data = [
                    'data' => [
                        'name' => $value->fullname,
                        'receipt' => $receipt,
                        'sampleReceipt' => $sampleReceipt
                    ],
                    'subject' => 'Receipt Rejected',
                    'recipient' => $recipient
                ];
                Mail::to($data['recipient'])->send(new receiptrejected($data));

                // Update the receipt status to 4 (indicating it was sent)
                $value->receiptStatus = 4;
                $value->save();
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
        
        return redirect('/receipt-reject');
    }

    public function revertReceiptStatus(Request $request)
    {
        // FOR activity
        $items = new Activity();
        $items->log_name = Auth::user()->name;
        $items->description = 'Reverted Reject to Pending';
        $items->causer_id = Auth::user()->id;
        $items->causer_type = 'App\Models\User';
        $items->save();


        $invoiceId = $request->input('invoiceId');
        $receiptStatus = $request->input('receiptStatus');

        // Find the invoice by ID
        $invoice = XeroInvoice::find($invoiceId);

        if ($invoice) {
            // Update the receipt status
            $invoice->receiptStatus = $receiptStatus;
            $invoice->save();

            // Additional logic or redirect if needed
        }

    // Redirect to the previous page or a specific route
    return redirect()->back();
    }


//=================================================================================================================================

    public function image()
    {

        // activity()->log('Viewed Image Receipt');

        return view('receipt-image');
    }

  //=================================================================================================================================

    public function archive()
    {

        // activity()->log('Viewed Archive');


        $pendingInvoices = DB::table('xero_invoice')->where('receiptStatus', 1)->get();

        $totalCountPending = $pendingInvoices->count();


        $validInvoices = DB::table('xero_invoice')->where('receiptStatus', 2)->get();

        $totalCountvalid = $validInvoices->count();


        $rejectInvoices = DB::table('xero_invoice')->where('receiptStatus', 3)->get();

        $totalCountreject = $rejectInvoices->count();


        $archiveInvoices = DB::table('xero_invoice')->where('receiptStatus', 4)->get();

        $totalCountarchive = $archiveInvoices->count();


        return view('receipt-archive', ['archiveInvoices' => $archiveInvoices, 'totalCountPending' => $totalCountPending, 'totalCountvalid' => $totalCountvalid, 'totalCountreject' => $totalCountreject, 'totalCountarchive' => $totalCountarchive]);
    }

        public function deleteReceipts(Request $request)
        {

            // activity()->log('Viewed Receiptt');
                // FOR activity
            $items = new Activity();
            $items->log_name = Auth::user()->name;
            $items->description = 'Deleted Archive Receipt/s';
            $items->causer_id = Auth::user()->id;
            $items->causer_type = 'App\Models\User';
            $items->save();
            
            $deleteIds = $request->input('delete_ids');
            $arrayIds = explode(',', $deleteIds);
            
            // Delete the records from the database
            DB::table('xero_invoice')->whereIn('id', $arrayIds)->delete();
            // dd($deleteIds);
            return redirect('/receipt-archive');
        }
        

    //=========================================================================================================================================

    // elseif ($update_status->receiptStatus == 2) {
            
    //     // Get the Xero invoice
    //     $xeroInvoice = XeroInvoice::where('reference', $update_status->xero_invoice)->first();

    //     // Send email for archive
    //     Mail::to($update_status->email)->send(new ReceiptArchived($update_status, $xeroInvoice));

    //     $update_status->receiptStatus = 4; // Update to "archive"

    public function updateReceiptStatus()
    {
        // FOR activity
        $items = new Activity();
        $items->log_name = Auth::user()->name;
        $items->description = 'Validated Receipt/s';
        $items->causer_id = Auth::user()->id;
        $items->causer_type = 'App\Models\User';
        $items->save();

        // Get all the receipts
        $receipts = XeroInvoice::all();
        
        $lastUploadDate = DB::table('bdo_receipt')
            ->max('created_at');
        // $lastUploadDate = Carbon::create(2023, 6, 22);

        foreach ($receipts as $receipt) {
            $reference = $receipt->reference;
            
            $bdo_receipt = DB::table('bdo_receipt')
                ->where('description', '=', $reference)
                ->first();
            
            // Check if a matching bdo_receipt record exists
            if ($bdo_receipt) {
                $receipt->receiptStatus = 2; // Update to "valid and see the registrar staff"
            } else {
                // Check if the reference date is greater than the last upload date
                if ($receipt->date >= $lastUploadDate) {
                    $receipt->receiptStatus = 1; // No match, keep the original status
                } else {
                    $receipt->receiptStatus = 3; // Update to "reject" for no match within the date span
                }
            }
            
            // Save the changes for each receipt
            $receipt->save();
        }
        
        return redirect()->back()->with('status', 'Receipts validated successfully!');
    }
    
    //     xero_invoices
    // +----+----------------+------------------+------------------+---------------------+
    // | id | receiptStatus  | xero_invoice     | bdo_transaction  | date                |
    // +----+----------------+------------------+------------------+---------------------+
    // | 1  | 1              | INV-2021-001     | INV-2021-001     | 2021-05-15 10:00:00 |
    // | 2  | 1              | INV-2021-002     | INV-2021-003     | 2022-01-10 14:30:00 |
    // | 3  | 2              | INV-2021-003     | INV-2021-003     | 2023-03-20 09:45:00 |
    // | 4  | 1              | INV-2021-004     | INV-2021-004     | 2022-11-05 16:20:00 |
    // +----+----------------+------------------+------------------+---------------------+
}
