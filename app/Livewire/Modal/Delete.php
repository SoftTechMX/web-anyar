<?php

namespace App\Livewire\Modal;

use Exception;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class Delete extends Component
{
    public $modelo;

    protected $listeners = [
        'open-modal-delete'  => 'openModal',
        'close-modal-delete' => 'closeModal',
    ];

    public function openModal($data)
    {
        $clase  = $data['modelo_clase'];
        $id     = $data['id'];
        
        try
        {
            $modelo = $clase::find($id);
    
            if($modelo)
            {
                $this->modelo = $modelo;
                $this->dispatch('self-open-modal-delete');
            }
            else
            {
                $client_message = "No se encontró el registro a eliminar.";
                $log_message    = "Se intento abrir el modal DELETE para el ID {$id} de la clase {$clase} pero no se encontró el registro.";
    
                $this->dispatch('error', ['message' => $client_message]);
                Log::error($log_message);
            }
        }
        catch(Exception $e)
        {
            Log::critical($e->getMessage());
        }
    }

    public function closeModal()
    {
        $this->dispatch('self-close-modal-delete');
        $this->modelo = null;
    }

    public function delete()
    {
        try
        {
            if($this->modelo)
            {
                $this->modelo->delete();
                $modelo_clase = strtolower(class_basename($this->modelo));
                $this->dispatch("{$modelo_clase}-deleted");
            }
            else
            {
                $message = "No se encontró el registro a eliminar.";
                $this->dispatch('error', ['message' => $message]);
                Log::error($message);
            }
            
            $this->dispatch('self-close-modal-delete');
        }
        catch(Exception $e)
        {
            Log::critical($e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.modal.delete');
    }
}
