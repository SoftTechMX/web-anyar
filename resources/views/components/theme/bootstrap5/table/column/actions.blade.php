<td class="col-2">

    <div class="w-100 d-flex justify-content-center">

        <a href='{{ route("{$route}.show", $model->id) }}' class="btn btn-info btn-sm " title="{{ __('View') }}">
            <i class='bx bx-show'></i>
        </a>
    
        <a href='{{ route("{$route}.edit", $model->id) }}' class="btn btn-warning btn-sm mx-1" title="{{ __('Edit') }}">
            <i class='bx bx-edit'></i>
        </a>
    
        <form action='{{ route("{$route}.destroy", $model->id) }}' method="POST" style="display: inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm" title="{{ __('Delete') }}" onclick="return confirm('{{ __('Are you sure you want to delete this?') }}')">
                <i class='bx bx-trash'></i>
            </button>
        </form>
    </div>
</td>