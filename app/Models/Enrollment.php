<?php

namespace App\Models;

use Dom\Document;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    //relación entre modelos
    public function student()
    {
        return $this->belongsTo(Enrollment::class);
    }
    public function gradeLevel()
    {
        return $this->belongsTo(GradeLevel::class);
    }
    public function province()
    {
        return $this->belongsTo(Province::class);
    }
    public function documents() {
        return $this->hasMany(Document::class);
    }
}
