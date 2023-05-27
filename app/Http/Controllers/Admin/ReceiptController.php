<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\receiptrejected;
use App\Models\XeroInvoice;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReceiptController extends Controller
{
     // for view
     public function valid()
     {
         return view('receipt-valid');
     }

     public function pending()
     {
         return view('receipt-pending');
     }

     public function reject()
     {
        $xeroInvoice = XeroInvoice::leftJoin('xero_users', 'xero_users.xero_account_id', '=', 'xero_invoice.xero_account_id')
         ->select('xero_invoice.id as id', 'xero_users.xero_account_name', 'xero_invoice.xero_account_id', 'xero_invoice.description', 'amount', 'reference', 'xero_invoice.created_at', 'xero_invoice.updated_at')
        //  ->where([['status', '=', '0']])
         ->get();

         return view('receipt-reject-2', compact(['xeroInvoice']));
     }

     public function postReject(Request $request) {


        $csvIds = $request->all()['csv_ids'];
        $arrayIds = explode(',', $csvIds);

        $xeroInvoice = XeroInvoice::leftJoin('xero_users', 'xero_users.xero_account_id', '=', 'xero_invoice.xero_account_id')
        ->select('xero_invoice.id as id', 'xero_users.xero_account_name', 'xero_invoice.xero_account_id', 'xero_invoice.description', 'amount', 'reference', 'xero_invoice.created_at', 'xero_invoice.updated_at')
        ->whereIn('xero_invoice.id', $arrayIds)
        ->get();

        $sampleReceiptType = [
            'Gcash-email' => public_path() . '/assets/sample-receipts/Gcash-email.png',
            'Gcash-mobile-save' => public_path() . '/assets/sample-receipts/Gcash-mobile-save.jpg',
            'Gcash-mobile-ss' => public_path() . '/assets/sample-receipts/Gcash-mobile-ss.jpg',
            'metrobank' => public_path() . '/assets/sample-receipts/metrobank.jpg',
            'unionbank' => public_path() . '/assets/sample-receipts/unionbank.jpg',
            'PNB-debit' => public_path() . '/assets/sample-receipts/PNB-debit.jpg',
            'send-money-instapay' => public_path() . '/assets/sample-receipts/send-money-instapay.jpg',
            'pesonet-gateway' => public_path() . '/assets/sample-receipts/pesonet-gateway.jpg',
        ];
        try {

            foreach ($xeroInvoice as $key => $value) {
                // this is for testing
                $sampleReceipt =  $sampleReceiptType['Gcash-email'];
                $recipient = 'pgw.2023.01@gmail.com';
                //end

                $data = [
                    'data' => [
                        'name' => $value->xero_account_name,
                        'attachment' => [
                            'path' => $sampleReceipt
                        ],
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

     public function image()
     {
         return view('receipt-image');
     }
}
