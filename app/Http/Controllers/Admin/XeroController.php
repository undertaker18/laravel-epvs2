<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\XeroApiController;
use App\Models\XeroInvoice;
use App\Models\XeroUsers;
use Illuminate\Http\Request;

class XeroController extends Controller
{
     // for send
     public function send()
     {
         $xeroInvoice = XeroInvoice::leftJoin('xero_users', 'xero_users.xero_account_id', '=', 'xero_invoice.xero_account_id')
         ->select('xero_invoice.id as id', 'xero_users.xero_account_name', 'xero_invoice.xero_account_id', 'xero_invoice.description', 'amount', 'reference', 'xero_invoice.created_at', 'xero_invoice.updated_at')
         ->where([['status', '=', '0']])
         ->get();
         return view('xero-send', compact(['xeroInvoice']));
     }

     // for sent
     public function sent()
     {
         return view('xero-sent');
     }

    public function syncAccount()
    {
        $xeroAccount = XeroUsers::all();
        return view('xero-syncAccount', compact(['xeroAccount']));
    }

    public function postSyncAccount()
    {

    }
}
