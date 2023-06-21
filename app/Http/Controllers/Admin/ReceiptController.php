<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\receiptrejected;
use App\Models\XeroInvoice;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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
        $pendingInvoices = DB::table('xero_invoice')->where('receiptStatus', 1)->get();

        $totalCountPending = $pendingInvoices->count();


        $validInvoices = DB::table('xero_invoice')->where('receiptStatus', 2)->get();

        $totalCountvalid = $validInvoices->count();


        $rejectInvoices = DB::table('xero_invoice')->where('receiptStatus', 3)->get();

        $totalCountreject = $rejectInvoices->count();

        return view('receipt-pending', ['invoices' => $pendingInvoices, 'totalCountPending' => $totalCountPending, 'totalCountvalid' => $totalCountvalid, 'totalCountreject' => $totalCountreject]);
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
}
