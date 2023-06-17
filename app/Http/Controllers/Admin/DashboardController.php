<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\receiptrejected;
use App\Models\XeroInvoice;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    // for view 
    public function index()
    {

        $pendingInvoices = DB::table('xero_invoice')->where('receiptStatus', 1)->get();

        $totalCountPending = $pendingInvoices->count();


        $validInvoices = DB::table('xero_invoice')->where('receiptStatus', 2)->get();

        $totalCountvalid = $validInvoices->count();


        $rejectInvoices = DB::table('xero_invoice')->where('receiptStatus', 3)->get();

        $totalCountreject = $rejectInvoices->count();

        $invoices = DB::table('xero_invoice')->get(); 
        $totalCount = $invoices->count();

        $validReceipts = XeroInvoice::where('receiptStatus', 2)
        ->pluck('amount')
        ->toArray();

        $pendingReceipts = XeroInvoice::where('receiptStatus', 1)
        ->pluck('amount')
        ->toArray();

        $rejectReceipts = XeroInvoice::where('receiptStatus', 3)
        ->pluck('amount')
        ->toArray();

        $months = XeroInvoice::distinct()
        ->orderBy('created_at')
        ->pluck('created_at')
        ->map(function ($date) {
            return $date->format('F');
        })
        ->toArray();

        // $salesChartData = [
        //     'labels' => $months,
        //     'datasets' => [
        //         // Dataset configurations here
        //     ]
        // ];

        // return view('dashboard', compact(['xeroInvoice'], 'countreject'));
        return view('dashboard', [
            'invoices' => $invoices, 
            'totalCountPending' => $totalCountPending, 
            'totalCountvalid' => $totalCountvalid, 
            'totalCountreject' => $totalCountreject, 
            'totalCount' => $totalCount,
            
            'validReceipts' => $validReceipts,
            'pendingReceipts' => $pendingReceipts,
            'rejectReceipts' => $rejectReceipts,
            // 'salesChartData' => $salesChartData,
            
        
        ]);
    }
}   
