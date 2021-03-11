<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImponentePrestamo extends Model
{
    use HasFactory;

    protected $table = "imponente_prestamo";
    protected $dates = ["fecha_cierre"];
}
