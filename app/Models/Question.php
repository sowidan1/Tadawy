<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'patient_id',
        'doctor_id',
        'answer'
    ];


    public function patient()
    {
        return $this->belongsTo('App\Models\Patient', 'patient_id');
    }

    
    public function doctor()
    {
        return $this->belongsTo('App\Models\Doctor', 'doctor_id');
    }
}
