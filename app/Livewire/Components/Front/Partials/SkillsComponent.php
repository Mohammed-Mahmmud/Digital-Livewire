<?php

namespace App\Livewire\Components\Front\Partials;

use App\Models\Skill;
use Livewire\Component;

class SkillsComponent extends Component
{
    public $count, $skills;
    public function mount()
    {
        if (isset($this->count)) {
            $this->skills = Skill::take($this->count)->get();
        } else {
            $this->skills = Skill::get();
        }
    }

    public function render()
    {
        return view('components.front.partials.skills-component', ['skills' => $this->skills]);
    }
}
