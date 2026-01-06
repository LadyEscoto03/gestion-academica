<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'identification',
        'name',
        'surname',
        'second_surname',
        'email',
        'telephone_number'
    ];
}
