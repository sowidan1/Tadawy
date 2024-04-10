<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infant extends Model
{
    use HasFactory;

    protected $fillable = [
        'Temperature',
        'Humidity',
        'Weight',
        'Heart_Rate',
        'Color_Sensor',
    ];
}
