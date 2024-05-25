<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color_sensor extends Model
{
    use HasFactory;

    protected $fillable = [
        'color_sensor',
        'image',
    ];
}
