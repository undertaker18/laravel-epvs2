<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
         return view('receipt-reject');
     }
}
