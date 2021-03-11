<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
    use HasFactory;

    //Relacion uno a muchos

    public function imponentes(){
        return $this->hasMany(Imponente::class);
    }
}
