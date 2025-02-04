<?php

namespace App\View\Components\Theme\Bootstrap5\Table\Column;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\View\Component;

class Actions extends Component
{
    public string $route;
    public Model $model;

    public bool $btn_edit;
    public bool $btn_show;
    public bool $btn_delete;

    public function __construct(
        Model $model,
        string $route,
        bool $btn_show = true,
        bool $btn_edit = true,
        bool $btn_delete = true,
    )
    {
        $this->route = $route;
        $this->model = $model;

        $this->btn_edit = $btn_edit;
        $this->btn_show = $btn_show;
        $this->btn_delete = $btn_delete;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.theme.bootstrap5.table.column.actions');
    }
}
