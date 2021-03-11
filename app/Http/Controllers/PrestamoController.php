<?php

namespace App\Http\Controllers;

use App\Models\Bancario;
use App\Models\Cheque;
use App\Models\Comuna;
use App\Models\Prestamo;
use Illuminate\Http\Request;

class PrestamoController extends Controller
{
    public function create(){

        $cheques = Cheque::all();
        $bancarios = Bancario::all();
        $comunas = Comuna::pluck('name', 'id');
        $prestamos = Prestamo::all();

        return view('prestamos.create', compact('cheques', 'bancarios', 'comunas', 'prestamos'));
    }
}
