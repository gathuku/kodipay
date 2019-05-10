<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
      $credentials=$request->only('email','password');

      //Attempt authenticate
      $auth=Auth::attempt($credentials);
      if ($auth) {
        return redirect->intended('home');
      }
    }
}
