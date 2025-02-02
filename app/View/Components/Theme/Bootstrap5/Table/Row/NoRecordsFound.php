<?php

namespace App\View\Components\Theme\Bootstrap5\Table\Row;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NoRecordsFound extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.theme.bootstrap5.table.row.no-records-found');
    }
}
