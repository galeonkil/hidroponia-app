<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SensorData extends Model
{
    //
    protected $fillable = [
        'device',
        'temp_air',
        'humidity',
        'light',
        'tds',
        'ph',
        'temp_water'
    ];
}
