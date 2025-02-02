<?php

namespace App\View\Components\Theme\Bootstrap5\Table;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class Index extends Component
{
    public $model;
    public $collection;
    public $table_name;
    public $table_columns;

    public function __construct(?LengthAwarePaginator $collection = null)
    {
        $this->collection = $collection;
        $this->model = $collection->first();

        $table = $this->model->getTable();
        $this->table_name = Str::replace('_','-',$table);
        $this->table_columns = Schema::getColumnListing($table);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.theme.bootstrap5.table.index');
    }
}
