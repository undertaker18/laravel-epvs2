<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DisabledController extends Controller
{
    public function index()
    {
    return view('disabled-account');
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