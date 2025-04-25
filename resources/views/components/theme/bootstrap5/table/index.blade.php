<div>
    <div class="table-responsive">
        <table class="table table-striped table-hover align-middle table-bordered">
            <thead>
                <tr>
                    @foreach ($table_columns as $column_name)
                        <th scope="col" class="align-middle text-center">
                            {{ Str::replace('_', ' ', $column_name); }}
                        </th>
                    @endforeach

                    @if( count($table_columns) )
                        <th scope="col" class="align-middle text-center">
                            {{ __('actions') }}
                        </th>
                    @endif
                </tr>
            </thead>
            <tbody>

                @forelse ($collection as $model)                    
                    <tr>
                        @foreach ($table_columns as $column_name)
                            <td class="align-middle text-nowrap">
                                {{ $model->$column_name }}
                            </td>
                        @endforeach
                        <x-theme.bootstrap5.table.column.actions 
                            :model="$model" 
                            :route="$route" 
                            :btn_show="$btn_show" 
                            :btn_edit="$btn_edit" 
                            :btn_delete="$btn_delete"
                        />
                    </tr>
                @empty
                    <x-theme.bootstrap5.table.row.no-records-found />
                @endforelse

            </tbody>
        </table>
    </div>
    
    <x-theme.bootstrap5.table.pagination :collection="$collection" />
    
</div>