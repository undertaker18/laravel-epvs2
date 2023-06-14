<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\receiptrejected;
use App\Models\XeroInvoice;

class DashboardController extends Controller
{
    // for view 
    public function index()
    {

        $xeroInvoice = XeroInvoice::leftJoin('xero_users', 'xero_users.xero_account_id', '=', 'xero_invoice.xero_account_id')
        ->select('xero_invoice.id as id', 'xero_users.xero_account_name', 'xero_invoice.xero_account_id', 'xero_invoice.description', 'amount', 'reference', 'xero_invoice.created_at', 'xero_invoice.updated_at')
        //  ->where([['status', '=', '0']])
        ->get();

    $countreject = $xeroInvoice->count();

        return view('dashboard', compact(['xeroInvoice'], 'countreject'));
    }
}
