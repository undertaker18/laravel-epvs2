<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
        // for privacy
    public function privacy(Request $request )
    {
        return view('privacy-notice-form');
    }
        // for profile
    public function profile(Request $request )
    {
        $firstname=$request->input('firstname');
        $lastname=$request->input('lastname');

        return view('profile-form', compact('firstname','lastname'));
    }

        // for upload
    public function upload(Request $request )
    {
        return view('form-upload');
    }

        // for verify
    public function verify(Request $request )
    {
        return view('verify-form');
    }

        // for summary
    public function summary(Request $request )
    {
        return view('summary-form');
    }

        // for submit
    public function submit(Request $request )
    {
        return view('submit-form');
    }
}
