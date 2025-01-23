<div>
    @error($field)
        <span class="text-danger fw-bold">
            {{ $message }}
        </span>
    @else
        @if($value)
            <span class="text-success fw-bold">
                {{ __('Great!') }}
            </span>
        @endif
    @enderror
</div>
