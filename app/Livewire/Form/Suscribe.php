<?php

namespace App\Livewire\Form;

use Carbon\Carbon;
use Livewire\Component;

use App\Models\Suscriptor;

class Suscribe extends Component
{
    public ?string $email;

    protected $rules = [
        "email" => "required|email|max:200"
    ];

    public function save()
    {
        $data = $this->validate();

        $suscriptor = Suscriptor::where('email', $this->email)->first();
        
        if($suscriptor)
        {
            $suscriptor->active = true;
        }
        else
        {
            $suscriptor = new suscriptor($data);
        }

        $suscriptor->save();
        
        $this->dispatch("alert-success", "Your email has been registered in our alert newsletter.");
        $this->reset();
    }

    public function render()
    {
        return view('livewire.form.suscribe');
    }
}
