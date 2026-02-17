<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'identification',
        'name',
        'surname',
        'secondSurname',
        'sex',
        'birthDate',
        'nationality',
        'phoneNumber',
        'email',
    ];
}
