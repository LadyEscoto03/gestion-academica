<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    protected $fillable = ['identification',
        'name',
        'surname',
        'secondSurname',
        'nationality',
        'maritalStatus',
        'educationLevel',
        'occupation',
        'email',
        'phoneNumber',
    ];

    public function students()
    {
        return $this->belongsToMany(Student::class)->withPivot('relationship', 'livesWith')->withTimestamps();
    }
}
