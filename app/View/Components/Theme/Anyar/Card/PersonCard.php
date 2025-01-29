<?php

namespace App\View\Components\Theme\Anyar\Card;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

use App\Models\Person;

class PersonCard extends Component
{
    public $person;

    public function __construct(Person $person)
    {
        $this->person = $person;
    }

    public function render(): View|Closure|string
    {
        return view('components.theme.anyar.card.person-card');
    }
}
