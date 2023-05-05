<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BdoReceiptController extends Controller
{
        // for view 
        public function index()
        {
            return view('bdo-receipts');
        }
}
