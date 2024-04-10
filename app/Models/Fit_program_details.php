<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fit_program_details extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'photo_gif', 'photo_png', 'fit_program_id'];
}
