<?php

namespace App\View\Components\Theme\Anyar\List;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ItemSuccess extends Component
{
    public $texto;

    public function __construct(?string $texto = null)
    {
        $this->texto = $texto;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.theme.anyar.list.item-success');
    }
}
