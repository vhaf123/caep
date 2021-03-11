<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;


    //Relacion uno a uno

    public function ahorro()
    {
        return $this->hasOne(Ahorro::class);
    }


    //Relacion muchos a muchos

    public function imponentes(){
        return $this->belongsToMany(Imponente::class, 'solicitudes');
    }
}
