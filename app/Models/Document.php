<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = ['name', 'path', 'enrollment_id'];

    // relación entre modelos
    public function enrollment()
    {
        return $this->belongsTo(Enrollment::class);
    }
}
