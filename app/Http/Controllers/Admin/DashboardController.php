<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Mail\receiptrejected;
use App\Models\XeroInvoice;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\User;
use Spatie\Activitylog\Models\Activity;
use Auth;


class DashboardController extends Controller
{
    // for view 
    public function index()
    {

        $pendingInvoices = DB::table('xero_invoice')->where('receiptStatus', 1)->get();
        $totalCountPending = $pendingInvoices->count();
        //----------------------------------------------------------------------------

        $validInvoices = DB::table('xero_invoice')->where('receiptStatus', 2)->get();
        $totalCountvalid = $validInvoices->count();
        //----------------------------------------------------------------------------

        $rejectInvoices = DB::table('xero_invoice')->where('receiptStatus', 3)->get();
        $totalCountreject = $rejectInvoices->count();

        //----------------------------------------------------------------------------

        $archiveInvoices = DB::table('xero_invoice')->where('receiptStatus', 4)->get();
        $totalCountarchive = $archiveInvoices->count();

        //---------------------------------------------------------------------------

        $invoices = DB::table('xero_invoice')->get(); 
        $totalCount = $invoices->count();

        //---------------------------------------------------------------------------

        $senttoxero = DB::table('xero_invoice')
        ->where('receiptStatus', 2)
        ->where('status', 1)
        ->get();
        $totalCountsent = $senttoxero->count();

        //----------------------------------------------------------------------------

        $sendtoxero = DB::table('xero_invoice')
        ->where('receiptStatus', 2)
        ->where('status', 0)
        ->get();
        $totalCountsend = $sendtoxero->count();

        //----------------------------------------------------------------------------

        $synctoxero = DB::table('xero_users')
        ->get();
        $totalCountsync = $synctoxero->count();

        //----------------------------------------------------------------------------

         // Get the current month (zero-based index)
        $currentMonth = Carbon::now()->month;

        // Array to store the dynamic month labels
        $monthLabels = [];

        // Arrays to store the dynamic data
        $validReceipts = [];
        $pendingReceipts = [];
        $rejectReceipts = [];

        for ($i = -10; $i <= 1; $i++) {
            // Calculate the month index (considering wrap-around at December)
            $monthIndex = ($currentMonth + $i + 3) % 12;
        
            // Get the month name for the current index
            $monthLabel = Carbon::create()->month($monthIndex + 1)->format('F');
        
           // Add the month label to the array
                $monthLabels[] = $monthLabel;

                // Initialize the corresponding arrays with zero count
                $validReceipts[] = 0;
                $pendingReceipts[] = 0;
                $rejectReceipts[] = 0;
        }


        // Retrieve the dynamic data from your XeroInvoice table
        $validReceiptsData = XeroInvoice::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->where('receiptStatus', 2)
            ->groupBy('month')
            ->get();

        $pendingReceiptsData = XeroInvoice::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->where('receiptStatus', 1)
            ->groupBy('month')
            ->get();

        $rejectReceiptsData = XeroInvoice::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->where('receiptStatus', 3)
            ->groupBy('month')
            ->get();

        // Update the arrays with the dynamic data from the database
        foreach ($validReceiptsData as $receipt) {
            $monthIndex = $receipt->month - 1;
            $count = $receipt->count;
            $validReceipts[$monthIndex] = $count;
        }

        foreach ($pendingReceiptsData as $receipt) {
            $monthIndex = $receipt->month - 1;
            $count = $receipt->count;
            $pendingReceipts[$monthIndex] = $count;
        }

        foreach ($rejectReceiptsData as $receipt) {
            $monthIndex = $receipt->month - 1;
            $count = $receipt->count;
            $rejectReceipts[$monthIndex] = $count;
        }
 
//------------------------------------------------------------------------------------------
        
        $elementaryData =  DB::table('xero_invoice')
        ->where('department', 'Elementary')
        ->get();
        $totalCountelementary = $elementaryData->count();

        $seniorHighSchoolData = DB::table('xero_invoice')
        ->where('department', 'Senior High School')
        ->get();
        $totalCountseniorHighSchool = $seniorHighSchoolData->count();

        $juniorHighSchoolData = DB::table('xero_invoice')
        ->where('department', 'Junior High School')
        ->get();
        $totalCountjuniorHighSchool = $juniorHighSchoolData->count();

        $collegeData = DB::table('xero_invoice')
        ->where('department', 'College')
        ->get();
        $totalCountcollege = $collegeData->count();


       
        $data = [ $totalCountelementary, $totalCountseniorHighSchool,  $totalCountjuniorHighSchool, $totalCountcollege ];
        

        if (auth()->user()->hasRole('Super Admin', 'Accounting Staff')) {
            return redirect()->route('dashboard');
        } elseif (auth()->user()->hasRole('Registrar')) {
            return redirect()->route('xero-sent');
        }
        // return view('dashboard', compact(['xeroInvoice'], 'countreject'));
        return view('dashboard')->with(compact('data','monthLabels', 'validReceipts', 'pendingReceipts', 'rejectReceipts','invoices', 'totalCountPending', 'totalCountvalid', 'totalCountreject', 'totalCountarchive', 'totalCount', 'totalCountsend', 'totalCountsent', 'totalCountsync'));
    }
}   
