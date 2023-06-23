<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Session;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SystemlogController extends Controller
{
    public function index()
    {
        $sessions = Session::all();
        
        array_walk_recursive($sessions, function (&$value) {
            if (is_string($value)) {
                $value = htmlspecialchars($value);
            }
        });

        return view('system-log', compact('sessions'));
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