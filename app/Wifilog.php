<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wifilog extends Model
{
    protected $table = 'wifi_log';
    public $timestamps = false;
    protected $fillable = [
        'log','created_at',
    ];
}
