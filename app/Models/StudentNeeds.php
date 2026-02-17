<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentNeeds extends Model
{
    protected $fillable = [
        'conditionType',
        'description',
        'requireSupport'
    ];
}
