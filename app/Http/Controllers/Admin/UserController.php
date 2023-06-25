<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;


class UserController extends Controller
{
     // for view 
     public function index()
     {

      $Account = User::with('roles')

      ->orderBy('created_at', 'desc')
      ->get();

      $roles = Role::get();

      return view('users', compact(['Account', 'roles']));
   }

    
}
