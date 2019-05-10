<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
      return view('auth.register');
    }
    
    public function register(Request $request)
    {
      $request->validate([
        'name'=>'required',
        'email' =>'required',
        'password'=>'required|confirmed'
      ]);

      $user=User::create([
        'name'->$request->name,
        'email'->$request->email,
        'password'->bcrypt($request->password),
      ]);
      if ($user) {
        return redirect('dashboard');
      }
    }
}
