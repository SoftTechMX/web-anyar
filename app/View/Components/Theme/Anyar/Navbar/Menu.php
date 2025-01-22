<?php

namespace App\View\Components\Theme\Anyar\Navbar;

use Closure;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

use App\Models\UiNavbarMenu;

class Menu extends Component
{
    public $menu;

    public function __construct(UiNavbarMenu $menu)
    {
        $this->menu = $menu;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.theme.anyar.navbar.menu');
    }
}
