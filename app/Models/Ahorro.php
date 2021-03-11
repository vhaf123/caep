<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ahorro extends Model
{
    use HasFactory;

    //Relacion uno a uno inversa

    public function imponente(){
        return $this->belongsTo(Imponente::class);
    }
}
