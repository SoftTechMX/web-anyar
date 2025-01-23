<?php

namespace App\Livewire\Form;

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
        $this->reset();

        $suscriptor = Suscriptor::where('email', $this->email)->fisrt();

        if($suscriptor)
        {
            $suscriptor->active = true;
            $suscriptor->save();
        }
        else
        {
            Suscriptor::insert($data);
        }
        $this->dispatch("alert-success", "Your email has been registered in our alert newsletter.");

    }

    public function render()
    {
        return view('livewire.form.suscribe');
    }
}
