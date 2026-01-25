<?php

namespace App\Models;

use Dom\Document;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $fillable = [
        'year',
        'description',
        'state',
        'student_id',
        'grade_level_id',
        'district_id',
    ];

    // relación entre modelos
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function gradeLevel()
    {
        return $this->belongsTo(GradeLevel::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function documents()
    {
        return $this->hasMany(Document::class);
    }
}
