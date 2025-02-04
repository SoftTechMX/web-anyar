<?php

namespace App\View\Components\Theme\JaneLepannen\Card;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ImageCard extends Component
{
    public ?string $title;
    public ?string $description;
    public ?string $image;
    public ?string $url;

    public function __construct(?string $title = null, ?string $image = null, ?string $description = null, ?string $url = null)
    {
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.theme.jane-lepannen.card.image-card');
    }
}
