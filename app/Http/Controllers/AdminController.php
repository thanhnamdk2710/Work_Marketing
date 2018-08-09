<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Session;

class AdminController extends Controller
{
    public function page_login()
    {
        return view('backend.login');
    }

     public function login(Request $request)
     {
         $result = Admin::where('email', $request->email)->where('password', md5($request->password))->first();
         if ($result) {
             Session::put('admin_name', $result->name);
             Session::put('admin_id', $result->id);
             return redirect()->route('admin.dashboard');
         } else {
             return back()->with('error', 'Email or Password Invalid');
         }
     }

     public function dashboard()
     {
         return view('backend.dashboard');
     }

     public function logout()
     {
         Session::flush();
         return redirect()->route('admin.page_login');
     }
}
