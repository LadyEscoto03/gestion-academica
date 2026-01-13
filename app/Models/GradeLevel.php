<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GradeLevel extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];
    //relación entre modelos
    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }
}
