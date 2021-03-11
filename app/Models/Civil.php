<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Civil extends Model
{
    use HasFactory;

    protected $table = "civiles";

    //Relacion uno a muchos

    public function imponentes(){
        return $this->hasMany(Imponente::class);
    }
}
