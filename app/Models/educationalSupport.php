<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class educationalSupport extends Model
{
    protected $fillable = [
        'name',
        'type',
        'category',
        'description',
        'status'
    ];
    public function students()
    {
        return $this->belongsToMany(Student::class)->withPivot('diagnosis_date', 'description')
            ->withTimestamps();
    }
}
