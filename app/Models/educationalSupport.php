<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class educationalSupport extends Model
{
    public $fillable = [
        'name',
        'type',
        'category',
        'description',
        'status'
    ];
}
