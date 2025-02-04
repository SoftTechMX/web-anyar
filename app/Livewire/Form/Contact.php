<?php

namespace App\Livewire\Form;

use App\Models\ContactRequest;
use Livewire\Component;

class Contact extends Component
{
    public ?string $name;
    public ?string $email;
    public ?string $subject;
    public ?string $message;

    protected $rules = [
        'name'      => 'required',
        'email'     => 'required',
        'subject'   => 'required',
        'message'   => 'required',
    ];

    public function save()
    {
        $data = $this->validate();
        ContactRequest::insert($data);
        $this->reset();

        $this->dispatch('alert-success', 'Your request has been saved successfully. We contact you as soon as posible.');
    }

    public function render()
    {
        return view('livewire.form.contact');
    }
}
