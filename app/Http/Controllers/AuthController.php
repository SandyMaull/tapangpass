<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth/index');
    }

    public function authlogin(Request $request)
    {
        // dd($request->all());
        if(Auth::attempt($request->only('username','password'))){
            return redirect('/Admin');
        }
        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
