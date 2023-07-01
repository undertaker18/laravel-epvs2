<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SystemlogController extends Controller
{
    public function index()
    {
        $logs = DB::table('activity_log')
        ->orderBy('created_at', 'desc')
        ->get(); // Retrieve all records from the table in descending order of creation time

    return view('system-log', compact('logs'));
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