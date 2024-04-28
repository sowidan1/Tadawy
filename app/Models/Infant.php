<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infant extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'temperature',
        // 'humidity',
        // 'heart_Rate',
        'color_sensor',
    ];
}
