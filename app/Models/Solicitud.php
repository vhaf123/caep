<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;

    protected $table = "solicitudes";
    protected $dates = ["fecha_cierre"];
    
    //Relacion uno a muchos inversa

    public function imponente(){
        return $this->belongsTo(Imponente::class);
    }

    public function cheque(){
        return $this->belongsTo(Cheque::class);
    }

    public function prestamo(){
        return $this->belongsTo(Prestamo::class);
    }
}
