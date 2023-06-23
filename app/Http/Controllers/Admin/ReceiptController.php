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

class ReceiptController extends Controller
{
    // for view
    public function valid()
    {
        $pendingInvoices = DB::table('xero_invoice')->where('receiptStatus', 1)->get();

        $totalCountPending = $pendingInvoices->count();


        $validInvoices = DB::table('xero_invoice')->where('receiptStatus', 2)->get();

        $totalCountvalid = $validInvoices->count();


        $rejectInvoices = DB::table('xero_invoice')->where('receiptStatus', 3)->get();

        $totalCountreject = $rejectInvoices->count();

        return view('receipt-valid', ['invoices' => $validInvoices, 'totalCountPending' => $totalCountPending, 'totalCountvalid' => $totalCountvalid, 'totalCountreject' => $totalCountreject]);
    }
//=================================================================================================================================
    public function pending()
    {

        $update_status = XeroInvoice::all();

        // dd($update_status);

        $pendingInvoices = DB::table('xero_invoice')->where('receiptStatus', 1)->get();

        $totalCountPending = $pendingInvoices->count();


        $validInvoices = DB::table('xero_invoice')->where('receiptStatus', 2)->get();

        $totalCountvalid = $validInvoices->count();


        $rejectInvoices = DB::table('xero_invoice')->where('receiptStatus', 3)->get();

        $totalCountreject = $rejectInvoices->count();

        return view('receipt-pending', ['update_status' => $update_status,'invoices' => $pendingInvoices, 'totalCountPending' => $totalCountPending, 'totalCountvalid' => $totalCountvalid, 'totalCountreject' => $totalCountreject]);
    }
//=================================================================================================================================

    public function reject()
    {

        $pendingInvoices = DB::table('xero_invoice')->where('receiptStatus', 1)->get();

        $totalCountPending = $pendingInvoices->count();


        $validInvoices = DB::table('xero_invoice')->where('receiptStatus', 2)->get();

        $totalCountvalid = $validInvoices->count();


        $rejectInvoices = DB::table('xero_invoice')->where('receiptStatus', 3)->get();

        $totalCountreject = $rejectInvoices->count();

        // // todo: May 28, receipt type and user email
        // $xeroInvoice = XeroInvoice::leftJoin('xero_users', 'xero_users.xero_account_id', '=', 'xero_invoice.xero_account_id')
        //     ->select('xero_invoice.id as id', 'xero_users.xero_account_name', 'xero_invoice.xero_account_id', 'xero_invoice.description', 'amount', 'reference', 'xero_invoice.created_at', 'xero_invoice.updated_at')
        //     //  ->where([['status', '=', '0']])
        //     ->get();

        // $countreject = $xeroInvoice->count();

        // return view('receipt-reject-2', compact(['xeroInvoice'], 'countreject'));
        return view('receipt-reject-2', ['invoices' => $rejectInvoices, 'totalCountPending' => $totalCountPending, 'totalCountvalid' => $totalCountvalid, 'totalCountreject' => $totalCountreject]);
    }

    public function postReject(Request $request)
    {   


        $csvIds = $request->all()['csv_ids']; 
        $arrayIds = explode(',', $csvIds);

        $xeroInvoice = XeroInvoice::leftJoin('xero_users', 'xero_users.xero_account_id', '=', 'xero_invoice.xero_account_id')
            ->select('xero_invoice.id as id', 'xero_users.xero_account_name', 'xero_invoice.xero_account_id', 'xero_invoice.description', 'amount', 'reference', 'xero_invoice.created_at', 'xero_invoice.updated_at',
                'xero_invoice.email', 'xero_invoice.receipt_type', 'xero_invoice.receipt_src')
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
            'pesonet-gateway' => public_path() . '/assets/sample-receipts/pesonet-gateway.jpg',
        ];


        try {

            foreach ($xeroInvoice as $key => $value) {

                // todo: May 28, this is for testing - Change the following
                // if from table: $value->xero_account_name ($value->[column_name])
                $receiptType = $value->receipt_type;
                $sampleReceipt =  $sampleReceiptType[$receiptType]; // should match with $samepleReceiptType key
                $receipt =   public_path() . $value->receipt_src;// change: get value from database
                $recipient = $value->email; // change: get value from database
                //end

                $data = [
                    'data' => [
                        'name' => $value->xero_account_name,
                        'receipt' => $receipt,
                        'sampleReceipt' => $sampleReceipt
                    ],
                    'subject' => 'Receipt Rejected',
                    'recipient' => $recipient
                ];
                Mail::to($data['recipient'])->send(new receiptrejected($data));
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
        return redirect('/receipt-reject');
    }
//=================================================================================================================================

    public function image()
    {
        return view('receipt-image');
    }

  //=================================================================================================================================

    public function archive()
    {
        $pendingInvoices = DB::table('xero_invoice')->where('receiptStatus', 1)->get();

        $totalCountPending = $pendingInvoices->count();


        $validInvoices = DB::table('xero_invoice')->where('receiptStatus', 2)->get();

        $totalCountvalid = $validInvoices->count();


        $rejectInvoices = DB::table('xero_invoice')->where('receiptStatus', 3)->get();

        $totalCountreject = $rejectInvoices->count();

        return view('receipt-archive', ['invoices' => $pendingInvoices, 'totalCountPending' => $totalCountPending, 'totalCountvalid' => $totalCountvalid, 'totalCountreject' => $totalCountreject]);
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
        // Get all the receipts
        $receipts = XeroInvoice::all();
        
        // $lastUploadDate = DB::table('bdo_receipt')
        //     ->max('created_at');
        $lastUploadDate = Carbon::create(2023, 6, 30);

        foreach ($receipts as $receipt) {
            $reference = $receipt->reference;
            
            $bdo_receipt = DB::table('bdo_receipt')
                ->where('description', $reference)
                ->first();
            
            // Check if a matching bdo_receipt record exists
            if ($bdo_receipt) {
                $receipt->receiptStatus = 2; // Update to "valid and see the registrar staff"
            } else {
                // Check if the reference date is greater than the last upload date
                if ($receipt->date <= $lastUploadDate) {
                    $receipt->receiptStatus = 1; // No match, keep the original status
                } else {
                    $receipt->receiptStatus = 3; // Update to "reject" for no match within the date span
                }
            }
        // dd($bdo_receipt)  ;  
            // Save the changes for each receipt
            $receipt->save();
        }
        
        return redirect()->back()->with('status', 'Receipts updated successfully!');
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
