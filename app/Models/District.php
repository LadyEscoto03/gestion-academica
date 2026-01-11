<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    //relación entre modelos
    public function canton()
    {
        return $this->belongsTo(Canton::class);
    }
}
