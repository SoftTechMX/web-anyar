<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ValidationMessage extends Component
{
    public $field;
    public $value;

    /**
     * Create a new component instance.
     */
    public function __construct($field, $value = null)
    {
        $this->field = $field;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.validation-message');
    }
}
