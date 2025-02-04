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

    public $btn_show;
    public $btn_edit;
    public $btn_delete;

    public function __construct(
        ?LengthAwarePaginator $collection,
        bool $btn_show = true,
        bool $btn_edit = true,
        bool $btn_delete = true,
    )
    {
        $this->collection = $collection;
        $this->model = $collection->first();

        if($this->model)
        {
            $table = $this->model->getTable();
            $this->table_name = Str::replace('_','-',$table);
            $this->table_columns = Schema::getColumnListing($table);
        }
        else
        {
            $this->table_columns = [];
        }

        $this->btn_show = $btn_show;
        $this->btn_edit = $btn_edit;
        $this->btn_delete = $btn_delete;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.theme.bootstrap5.table.index');
    }
}
