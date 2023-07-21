<?php

namespace App\Http\Livewire;

use App\Models\Candidato;
use App\Models\Vacante;
use App\Notifications\CvRevisado;
use Livewire\Component;

class VerCv extends Component
{
    public $candidato;
    public $vacante;
    public $empresa;
    
    public function mount(Candidato $candidato, Vacante $vacante){
        $this->candidato = $candidato;
        $this->vacante = $vacante->titulo;
        $this->empresa = $vacante->empresa;
    }

    public function render()
    {
        return view('livewire.ver-cv');
    }

    public function enviarEmail() {
        // $this->vacante->reclutador->notify(new NuevoCandidato($this->vacante->id, $this->vacante->titulo, auth()->user()->id));
        $this->candidato->user->notify(new CvRevisado($this->candidato->user->name, $this->vacante, $this->empresa));
    }
}
