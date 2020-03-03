<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Radcheck;
use App\Wifilog;
use Carbon\Carbon;
use App\RadPostAuth;
use Illuminate\Support\Facades\DB;

class TapangpassAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tapangpass/Admin/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generate()
    {
        // $radcheck = new Radcheck;
        // $radcheck->username = str_random(6);
        // $radcheck->attribute = "Cleartext-Password";
        // $radcheck->op = ":=";
        // $radcheck->value = str_random(6);
        // $radcheck->created_at = Carbon::now()->addDays(1)->format('Y-m-d');
        // $wifilog = new Wifilog;
        // $wifilog->log = 'User ' . $radcheck->username . ' Berhasil dibuat! dengan Password ' . $radcheck->value . ' Pada ' . Carbon::now() ;
        // $wifilog->created_at = Carbon::now();
        // $wifilog->save();
        // $radcheck->save();
        return view('Admin/generate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    public function deleteRecord()
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
