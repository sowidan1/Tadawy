<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book_xray extends Model
{
    use HasFactory;

    protected $fillable = [
        'price',
        'xray_id',
        'patient_id',   
        'date',
        'time',
    ];
}
