<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Carbon;

class Imponente extends Model
{
    use HasFactory;

    protected $dates = ["fecha_nacimiento"];

    //Relacio uno a muchos

    public function solicitudes(){
        return $this->hasMany(Solicitud::class);
    }

    //Relacion uno a uno inversa

    public function user(){
        return $this->belongsTo(User::class);
    }


    //Relacion uno a muchos inversa

    public function ciudad(){
        return $this->belongsTo(Ciudad::class);
    }

    public function comuna(){
        return $this->belongsTo(Comuna::class);
    }

    public function sexo(){
        return $this->belongsTo(Sexo::class);
    }

    public function civil(){
        return $this->belongsTo(Civil::class);
    }

    public function cargo(){
        return $this->belongsTo(Cargo::class);
    }

    //Relación muchos a muchos

    public function prestamos(){
        return $this->belongsToMany(Prestamo::class, 'solicitudes')
                    ->withPivot('saldos', 'fecha_cierre', 'monto_cuota','numero_cuotas')
                    ->withTimestamps();
    }

    public function getFechaNacimientoAttribute($value){
        return parse($value)->format('d/m/Y');
    }

}
