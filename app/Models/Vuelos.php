<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelos extends Model
{
    protected $table = 'vuelos';

    public function category(){
        return $this->belongsTo(Rutas::class,'rutas','id');
    }
}
