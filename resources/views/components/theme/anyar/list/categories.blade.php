<div>
    <h3 class="sidebar-title">
        {{ __('Categories') }}
    </h3>
    
    <div class="sidebar-item categories">
        <ul>
            @isset($links_collection)
                @forelse ($links_collection as $link)
                    <li>
                        <a href="{{ $link->url }}">
                            {{ $link->text }} <span>(25)</span>
                        </a>
                    </li>
                @empty
                    <li>No Categories found</li>
                @endforelse
            @else
                <li>No Categories found</li>
            @endisset
        </ul>
    </div>
</div>