<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EducationalSupport extends Model
{
    protected $fillable = [
        'name',
        'type',
    ];
    public function students()
    {
        return $this->belongsToMany(Student::class)->withPivot('diagnosis_date', 'description')
            ->withTimestamps();
    }
}
