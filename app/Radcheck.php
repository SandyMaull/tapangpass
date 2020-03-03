<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Radcheck extends Model
{
    protected $table = 'radcheck';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'username', 'attribute', 'op','value','created_at',
    ];
}
