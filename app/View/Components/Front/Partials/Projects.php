<?php

namespace App\View\Components\Front\Partials;

use App\Models\Category;
use App\Models\Project;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Projects extends Component
{
    /**
     * Create a new component instance.
     */
    public $categories,$projects;
    public function __construct()
    {
        $this->categories = Category::get();
        $this->projects = Project::get();

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front.partials.projects');
    }
}
