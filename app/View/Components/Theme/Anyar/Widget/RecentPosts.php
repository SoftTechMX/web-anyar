<?php

namespace App\View\Components\Theme\Anyar\Widget;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

use App\Models\Post;

class RecentPosts extends Component
{
    public Collection $posts;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->posts = Post::take(10)->orderBy('created_at', 'desc')->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.theme.anyar.widget.recent-posts');
    }
}
