<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RadPostAuth extends Model
{
    protected $table = 'radpostauth';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'username', 'pass', 'reply','authdate',
    ];
}
