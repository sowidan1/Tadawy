<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Doctor extends Model
{
    use HasFactory, HasApiTokens;

    protected $fillable = ['name', 'email', 'password', 'phone','gender','photo','specialty','year_of_experience','date_of_birth','clinic_id'];
}
