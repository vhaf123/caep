<?php

namespace App\Http\Livewire;

use App\Models\Cargo;
use App\Models\Ciudad;
use App\Models\Civil;
use App\Models\Comuna;
use App\Models\Sexo;
use Livewire\Component;

class ImponenteComponent extends Component
{

    public $imponente;

    protected $rules = [
        'imponente.rut' => 'min:6',
        'imponente.fecha_nacimiento' => 'required',
        'imponente.domicilio_particular' => 'max:500',
        'imponente.domicilio_comercial' => 'max:500',
        'imponente.ciudad_id' => 'max:500',
        'imponente.comuna_id' => 'max:500',
        'imponente.celular' => 'max:500',
        'imponente.numero_imponente' => 'max:500',
        'imponente.civil_id' => 'max:500',
        'imponente.sexo_id' => 'number',
        'imponente.cargo_id' => 'number',
    ];

    public function mount(){
        $this->imponente = auth()->user()->imponente;
    }

    public function render()
    {
        $ciudades = Ciudad::all();
        $comunas = Comuna::all();
        $civiles = Civil::all();

        $sexos = Sexo::all();

        $cargos = Cargo::all();

        return view('livewire.imponente-component', compact('ciudades', 'comunas', 'civiles', 'sexos', 'cargos'));
    }

    public function updateImponente(){
        /* $this->imponente->save(); */
    }
}
