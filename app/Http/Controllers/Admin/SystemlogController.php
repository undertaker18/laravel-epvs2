<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SystemlogController extends Controller
{
    // for sent 
    public function index()
    {
        return view('system-log');
    }
}
