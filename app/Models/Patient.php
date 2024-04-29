<?php

namespace App\Models;

use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory, HasApiTokens;

    public $incrementing = false;

    protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
        'photo',
        'phone',
        'date_of_birth',
    ];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = IdGenerator::generate(['table' => 'patients', 'length' => 8, 'prefix' => date('ym')]);
        });
    }
}
