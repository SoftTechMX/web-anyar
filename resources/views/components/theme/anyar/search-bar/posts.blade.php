<div class="sidebar-item search-form">
    <form action="{{ route('post.search') }}" method="POST">
        @csrf
        @method('POST')
        <input type="text" name="term" placeholder="Enter a keyword" required>
        <button type="submit">
            <i class='bx bx-search-alt'></i>
        </button>
    </form>
</div>	