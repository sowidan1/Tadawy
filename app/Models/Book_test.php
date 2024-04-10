<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book_test extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'test_id',
        'location',
        'price',
        'date',
        'time',
        'visit_type',
    ];
}
