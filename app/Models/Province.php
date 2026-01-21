<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    //relación entre modelos
    public function cantons()
    {
        return $this->hasMany(Canton::class);
    }
}
