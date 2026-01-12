<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    //relación entre modelos
    public function enrollment()
    {
        return $this->belongsTo(Enrollment::class);
    }
}
