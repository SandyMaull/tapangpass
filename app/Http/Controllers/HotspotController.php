<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotspotController extends Controller
{
    public function login(Request $request)
    {
        if($request->ujank_gaming == 'Kuronekosan_Server')
        {
            // dd($request->all());
            return view('tapangpass/Homepage/login');
        }
        else {
            redirect('/');
        }
    }
}
