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
    
    //relacion entre modelos
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
