<?php

namespace App\View\Components\Front\Partials;

use App\Models\Member;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Team extends Component
{
    /**
     * Create a new component instance.
     */
    public $team;
    public function __construct(public $count = null)
    {
        if (isset($count)) {
            $this->team = Member::take($count)->get();
        } else {
            $this->team = Member::get();
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front.partials.team');
    }
}
