<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Canton extends Model
{
    //relación entre modelos
    public function province()
    {
        return $this->belongsTo(Province::class);
    }
    public function districts()
    {
        return $this->hasMany(District::class);
    }
}
