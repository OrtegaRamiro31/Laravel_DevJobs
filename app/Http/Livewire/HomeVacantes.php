<?php

namespace App\Http\Livewire;

use App\Models\Vacante;
use Livewire\Component;

class HomeVacantes extends Component
{
    public $termino;
    public $categoria;
    public $salario;

    // Escucha por terminosBusqueda, al llamarse ese método llama a buscar
    protected $listeners = ['terminosBusqueda' => 'buscar'];

    public function buscar($termino, $categoria, $salario)
    {
        $this->termino = $termino;
        $this->categoria = $categoria;
        $this->salario = $salario;

        dd($this->termino);
    }

    public function render()
    {
        $vacantes = Vacante::all();

        return view('livewire.home-vacantes', [
            'vacantes' => $vacantes,
        ]);
    }
}
