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

    public function guardians()
    {
        return $this->belongsToMany(Guardian::class)->withPivot('relationship', 'livesWith')->withTimestamps();
    }
}
