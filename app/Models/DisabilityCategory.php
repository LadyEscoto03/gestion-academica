<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DisabilityCategory extends Model
{
    //relación entre modelos
    public function disabilities()
    {
        return $this->hasMany(Disability::class);
    }
}
