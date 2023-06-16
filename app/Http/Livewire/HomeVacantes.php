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
    }

    public function render()
    {
        // $vacantes = Vacante::all();

        // Cuando se tenga un término -> ejecuta el query con where que contiene el Like
        $vacantes = Vacante::when($this->termino, function($query) {
            $query->where('titulo', 'LIKE', "%" . $this->termino . "%");
        })->paginate(20);

        return view('livewire.home-vacantes', [
            'vacantes' => $vacantes,
        ]);
    }
}
