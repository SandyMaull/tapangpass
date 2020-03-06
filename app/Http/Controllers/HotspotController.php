<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotspotController extends Controller
{
    public function login(Request $request)
    {
        if($request->has('ujank_gaming')) {
            if($request->ujank_gaming == 'Kuronekosan_Server')
            {
                // dd($request->all());
                return view('tapangpass/Homepage/login');
            }
            else {
                redirect('/tapangpass');
            }
            
        }
        else {
            redirect('/tapangpass');
        }
        // dd(Request::exists('ujank_gaming'));
        // dd($request->has('ujank_gaming'));
    }
}
