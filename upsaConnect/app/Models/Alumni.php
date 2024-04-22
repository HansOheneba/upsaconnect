<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'other_names',
        'last_name',
        'gender',
        'maiden_name',
        'email',
        'mobile',
        'admission_year',
        'completion_year',
        'course',
        'occupation',
        'is_verified',
    ];
}
