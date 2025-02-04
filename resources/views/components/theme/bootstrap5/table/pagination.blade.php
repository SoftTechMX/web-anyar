<div class="d-flex justify-content-center">
    @isset($collection)
        {{ $collection->links() }}
    @endisset
</div>