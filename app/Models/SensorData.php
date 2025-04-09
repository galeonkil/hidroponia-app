<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SensorData extends Model
{
    //
    use HasFactory;
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
