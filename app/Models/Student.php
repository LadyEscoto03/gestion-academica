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
        'telephone_number',
        'birth_date',
        'user_id'
    ];

    //relacion entre modelos
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function disabilities()
    {
        return $this->belongsToMany(Disability::class)->withPivot('diagnosis_date', 'description')
            ->withTimestamps();
    }
    public function enrollments() {
        return $this->hasMany(Enrollment::class);
    }
}
