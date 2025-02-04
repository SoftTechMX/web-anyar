<?php

namespace App\View\Components\Theme\Anyar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class IconBox extends Component
{
    public $titulo;
    public $descripcion;
    public $icono;
    public $link;

    public function __construct(?string $titulo = null, ?string $descripcion = null, ?string $icono = null, ?string $link = null) {
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->icono = $icono;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.theme.anyar.icon-box');
    }
}
