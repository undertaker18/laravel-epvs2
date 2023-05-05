<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class XeroController extends Controller
{
     // for send 
     public function send()
     {
         return view('xero-send');
     }

     // for sent 
     public function sent()
     {
         return view('xero-sent');
     }
}
