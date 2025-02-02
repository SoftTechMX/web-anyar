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

                    <th scope="col" class="align-middle text-center">
                        {{ __('actions') }}
                    </th>
                </tr>
            </thead>
            <tbody>

                @forelse ($collection as $model)
                    <tr>
                        @foreach ($table_columns as $column_name)
                            <td class="align-middle">
                                {{ $model->$column_name }}
                            </td>
                        @endforeach

                        <x-theme.bootstrap5.table.column.actions :model="$model" :route="$table_name" />
                    </tr>
                @empty
                    <x-theme.bootstrap5.table.row.no-records-found />
                @endforelse

            </tbody>
        </table>
    </div>
    
    <x-theme.bootstrap5.table.pagination :collection="$collection" />
    
</div>