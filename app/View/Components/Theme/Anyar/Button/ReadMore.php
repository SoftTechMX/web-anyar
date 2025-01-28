<?php

namespace App\View\Components\Theme\Anyar\Button;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ReadMore extends Component
{
    public $link;
    
    /**
     * Create a new component instance.
     */
    public function __construct(?string $link = null)
    {
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.theme.anyar.button.read-more');
    }
}
