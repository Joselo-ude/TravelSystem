<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rutas extends Model
{
    protected $table = 'rutas';

    public function product(){
        return $this->hasMany(Vuelos::class,'id_ruta');
    }
}
