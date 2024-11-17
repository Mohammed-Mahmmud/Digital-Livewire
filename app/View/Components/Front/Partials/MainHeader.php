<?php

namespace App\View\Components\Front\Partials;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MainHeader extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $slug)
    {
        $this->slug = $slug;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front.partials.main-header');
    }
}
