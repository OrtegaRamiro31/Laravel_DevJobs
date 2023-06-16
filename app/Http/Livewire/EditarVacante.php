<?php

namespace App\Http\Livewire;

use App\Models\Salario;
use Livewire\Component;
use App\Models\Categoria;
use App\Models\Vacante;

class EditarVacante extends Component
{
    public $titulo;

    public function mount(Vacante $vacante)
    {
        $this->titulo = $vacante->titulo;
    }

    public function render()
    {
        // Consultar la BD
        $salarios = Salario::all();
        $categorias = Categoria::all();
        return view('livewire.editar-vacante', [
            'salarios' => $salarios,
            'categorias' => $categorias,
        ]);
    }
}
