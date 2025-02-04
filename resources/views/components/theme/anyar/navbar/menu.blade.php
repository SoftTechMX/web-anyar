@unless( $menu->hasSubMenu() )
    <li>
        <a href="{{ $menu->route ? route($menu->route) : '#' }}" class="nav-link">
            <i class="{{ $menu->icon }}"></i>
            <span>
                {{ $menu->label }}
            </span>
        </a>
    </li>
@else
    <li class="dropdown">
        <a href="#">
            <i class="{{ $menu->icon ?? 'bx bx-chevrons-down' }}"></i>
            <span>
                {{ $menu->label }}
            </span>
        </a>
        <ul>
            @foreach ($menu->subMenus as $submenu)
                <li>
                    <a href="{{ $submenu->route ? route($submenu->route) : '#' }}">
                        {{ $submenu->label }}
                    </a>
                </li>
            @endforeach
        </ul>
    </li>
@endunless