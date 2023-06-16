<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class PostularVacante extends Component
{
    use WithFileUploads;
    
    public $cv;

    protected $rules = [
        'cv' => 'required|mimes:pdf',
    ];

    public function postularme()
    {
        $this->validate();

        // Almacenar CV en el disco duro
        $cv = $this->cv->store('public/cv');
        $datos['cv'] = str_replace('public/cv/', '', $cv);

        // Crear la vacante

        // Crear notificación y enviar el email

        // Mostrar al usuario un mensaje de envío correcto
        
    }
    public function render()
    {
        return view('livewire.postular-vacante');
    }
}
