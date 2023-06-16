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
}