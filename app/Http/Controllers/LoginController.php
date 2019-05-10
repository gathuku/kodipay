<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
      return view('auth.login');
    }

    public function authenticate(Request $request)
    {
      $credentials=$request->only('email','password');

      //Attempt authenticate
      $auth=Auth::attempt($credentials);
      if ($auth) {
        return redirect()->intended('dashboard');
      }
    }


}
