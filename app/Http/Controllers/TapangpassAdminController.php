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
    public function redirectindex()
    {
        return redirect(route('redirectadmintapangpass'));
    }

    public function index()
    {
        return view('Admin/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generate($banyak)
    {
        for ($i=0; $i < $banyak; $i++) { 
            $randomuser[$i] = strtolower(str_random(6));
            while (Radcheck::where('username',$randomuser[$i])->exists()) {
                $randomuser[$i] = strtolower(str_random(6));
            }
            $radcheck[$i] = new Radcheck;
            $radcheck[$i]->username = $randomuser[$i];
            $radcheck[$i]->attribute = "Cleartext-Password";
            $radcheck[$i]->op = ":=";
            $radcheck[$i]->value = mt_rand(100, 999);
            $radcheck[$i]->created_at = Carbon::now();
            $wifilog[$i] = new Wifilog;
            $wifilog[$i]->log = 'User ' . $radcheck[$i]->username . ' Berhasil dibuat! dengan Password ' . $radcheck[$i]->value . ' Pada ' . Carbon::now() ;
            $wifilog[$i]->created_at = Carbon::now();

            $data[$i]['username'] = $radcheck[$i]->username;
            $data[$i]['password'] = $radcheck[$i]->value;

            $wifilog[$i]->save();
            $radcheck[$i]->save();
        }
        $wifilog_all = new Wifilog;
        $wifilog_all->log = $banyak . ' User Berhasil dibuat! pada '. Carbon::now() ;
        $wifilog_all->created_at = Carbon::now();
        $wifilog_all->save();
        return view('Admin/generate', ['data' => $data, 'jumlah' => $banyak]);
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
        // $check = RadPostAuth::where([
        //     ['reply', 'Access-Accept'],
        //     ['authdate', '>', Carbon::now()->subDays(1)],
        //     ['authdate', '<', Carbon::now()],
        // ])->get();
        // foreach ($check as $checkuser) {
        //     $checkusername = $checkuser->username;
        //     $radcheck = Radcheck::where('username', $checkusername)->first();
        //     $newwifilog = new Wifilog;
        //     if ($radcheck) {
        //         $newwifilog->log = 'User ' . $radcheck->username . ' Berhasil dihapus!';
        //         $newwifilog->created_at = Carbon::now();
        //         $newwifilog->save();
        //         $radcheck->delete();
        //     }
        //     $RadPostAuth = RadPostAuth::where('id',$checkuser->id)->first();
        //     $RadPostAuth->delete();
        // }
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
