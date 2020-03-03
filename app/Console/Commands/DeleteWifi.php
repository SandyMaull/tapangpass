<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Radcheck;
use App\RadPostAuth;
use App\Wifilog;

class DeleteWifi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'wifi:flush';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete wifi user daily';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // $check = Radcheck::where('created_at', Carbon::now()->addDays(1)->format('Y-m-d'))->get();

        // $i = 0;
        // foreach ($check as $userwifi) {
        //     $i += 1;
        //     $id[$i] = $userwifi->id;
        //     $checkuser = Radcheck::where('id',$id[$i])->first();
        //     if($checkuser)
        //     {
        //         $wifilog = new Wifilog;
        //         $wifilog->log = 'User ' . $checkuser->username . ' Berhasil dihapus!';
        //         $wifilog->created_at = Carbon::now();
        //         $wifilog->save();
        //         $checkuser->delete();
        //         $this->info('Flush Wifi User Has Been Successful');
        //     }
        // }
        // $this->info('No data in Database!');
        $check = RadPostAuth::where([
            ['reply', 'Access-Accept'],
            ['authdate', '>', Carbon::now()->subDays(1)],
            ['authdate', '<', Carbon::now()],
        ])->get();
        foreach ($check as $checkuser) {
            $checkusername = $checkuser->username;
            $radcheck = Radcheck::where('username', $checkusername)->first();
            $newwifilog = new Wifilog;
            if ($radcheck) {
                $newwifilog->log = 'User ' . $radcheck->username . ' Berhasil dihapus!';
                $newwifilog->created_at = Carbon::now();
                $newwifilog->save();
                $radcheck->delete();
            }
        }
    }
}
