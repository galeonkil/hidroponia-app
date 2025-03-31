<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SensorData extends Model
{
    protected $fillable = [
        'temperature', 
        'humidity', 
        'device_id'
    ];
}
