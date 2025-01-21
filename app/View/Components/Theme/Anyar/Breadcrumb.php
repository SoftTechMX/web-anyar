<?php

namespace App\View\Components\Theme\Anyar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Breadcrumb extends Component
{
    public $titulo;
    public $url;
    public $url_exploded;

    public function __construct(?string $titulo = null, ?string $url = null)
    {
        $this->titulo = $titulo;
        $this->url = $url;

        if($url)
            $this->url_exploded = explode('/', $url);
        else
            $this->url_exploded = [];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.theme.anyar.breadcrumb');
    }
}
