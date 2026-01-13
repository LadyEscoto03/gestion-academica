<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DisabilityStudent extends Model
{
    protected $fillable = [
        'student_id',
        'disability_id',
        'diagnosis_date',
        'description',
        'status'
    ];
}
