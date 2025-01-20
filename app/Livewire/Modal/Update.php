<?php

namespace App\Livewire\Modal;

use Livewire\Component;

class Update extends Component
{
    public $id;
    public $modelo_clase;

    protected $listeners = [
        'open-modal-update'  => 'openModal',
        'close-modal-update' => 'closeModal',
    ];

    public function openModal($data)
    {
        $modelo_clase   = $data['modelo_clase'];
        $this->id       = $data['id'];

        if($modelo_clase)
        {
            $this->modelo_clase = strtolower(class_basename($modelo_clase));
            $this->dispatch('self-open-modal-update');
        }
        else
        {
            $this->modelo_clase = null;
            // emitir alerta de error
            // Honeypot ...
        }
    }

    public function closeModal()
    {
        $this->modelo_clase = null;
        $this->dispatch('self-close-modal-update');
    }

    public function render()
    {
        return view('livewire.modal.update');
    }
}
