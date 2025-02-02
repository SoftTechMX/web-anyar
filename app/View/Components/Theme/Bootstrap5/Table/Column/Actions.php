<?php

namespace App\View\Components\Theme\Bootstrap5\Table\Column;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\View\Component;

class Actions extends Component
{
    public $route;
    public $model;

    public function __construct(Model $model, string $route)
    {
        $this->route = $route;
        $this->model = $model;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.theme.bootstrap5.table.column.actions');
    }
}
