<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;

class HomeComponent extends Component
{

    public $search;

    public function render()
    {

        $solicitudes = auth()->user()
                            ->imponente->solicitudes()
                            ->whereHas('prestamo', function (Builder $query) {
                                $query->where('name', 'like', '%' . $this->search . '%');
                            })->paginate(8);

        return view('livewire.home-component', compact('solicitudes'));
    }
}
