<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Radcheck;
use App\Wifilog;
use Carbon\Carbon;

class HotspotController extends Controller
{
    public function login(Request $request)
    {
        if($request->has('ujank_gaming')) {
            if($request->ujank_gaming == 'Kuronekosan_Server')
            {
                return view('tapangpass/Homepage/login');
            }
            else {
               return redirect('/tapangpass');
            }
            
        }
        else {
           return redirect('/tapangpass');
        }
        // dd($request->all());
    }

    public function logout(Request $request)
    {
        if($request->has('key')) {
            if($request->key == 'M7giLTwkIH') {
                // dd($request->all());
                $checkdata = Radcheck::where([
                    ['username', '=', $request->user],
                    ['attribute', '=', 'Cleartext-Password']
                    ])->first();
                if($checkdata) {
                    $logdelete = new Wifilog;
                    $logdelete->log = 'User ' . $checkdata->username . ' Berhasil dihapus!';
                    $logdelete->created_at = Carbon::now();
                    $logdelete->save();
                    $checkdata->delete();
                }
                else {
                    echo "Invalid!";
                }
            }
            else {
                echo "Invalid!";
            }
        }
        else {
            echo "Invalid!";
        }
    }

    // public function qrcode()
    // {
    //     $randomuser = strtolower(str_random(6));
    //     while (Radcheck::where('username',$randomuser)->first()) {
    //         $randomuser = str_random(6);
    //     }
    //     dd($randomuser);
    // }
}
