<?php

namespace App\View\Components\Theme\Bootstrap5\Table;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\View\Component;

class Pagination extends Component
{
    public $collection;

    public function __construct(?LengthAwarePaginator $collection = null)
    {
        $this->collection = $collection;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.theme.bootstrap5.table.pagination');
    }
}
