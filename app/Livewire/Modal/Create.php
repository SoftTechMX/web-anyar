<?php

namespace App\Livewire\Modal;

use Execption;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class Create extends Component
{
    public $modelo_clase;

    protected $listeners = [
        'open-modal-create'  => 'openModal',
        'close-modal-create' => 'closeModal',
    ];

    public function openModal($data)
    {
        $clase = $data['modelo_clase'];
        
        if($clase)
        {
            $this->modelo_clase = strtolower(class_basename($clase));
            $this->dispatch('self-open-modal-create');
        }
        else
        {
            $client_message = "No se pueden crear registros en este momento. Intente más tarde.";
            $log_message    = "Se intento abrir el modal CREATE para el modelo {$clase} pero no se encontró el registro.";

            $this->dispatch('error', ['message' => $client_message]);
            Log::error($log_message);
        }
    }

    public function closeModal()
    {
        $this->modelo_clase = null;
        $this->dispatch('self-close-modal-create');
    }

    public function render()
    {
        return view('livewire.modal.create');
    }
}