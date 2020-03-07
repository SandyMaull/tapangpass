<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotspotController extends Controller
{
    public function login(Request $request)
    {
        // if($request->has('ujank_gaming')) {
        //     if($request->ujank_gaming == 'Kuronekosan_Server')
        //     {
        //         return view('tapangpass/Homepage/login');
        //     }
        //     else {
        //        return redirect('/tapangpass');
        //     }
            
        // }
        // else {
        //    return redirect('/tapangpass');
        // }
        dd($request->all());
    }

    public function csrf(Request $request)
    {
        $_token = $request->session()->token();
        return $_token;
    }
}
