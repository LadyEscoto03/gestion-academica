<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EducationalSupportStudent extends Model
{
    protected $fillable = [
        'student_id',
        'educational_support_id',
        'diagnosis_date',
        'description',
        'status'
    ];
}
