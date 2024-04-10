<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory,HasApiTokens;

    protected $fillable =[
        'name',
        'email',
        'password',
        'gender',
        'photo',
        'phone',
        'emergency_contact',
        'medical_history',
        'date_of_birth',
        'doctor_id'
    ];
}
