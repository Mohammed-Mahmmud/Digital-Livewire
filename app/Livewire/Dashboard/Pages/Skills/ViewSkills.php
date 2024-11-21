<?php

namespace App\Livewire\Dashboard\Pages\Skills;

use App\Models\Skill;
use Livewire\Component;
use Livewire\WithPagination;

class ViewSkills extends Component
{
    use WithPagination;
    public $search;
    protected $queryString = [
        'search' => ['except' => '', 'as' => 's'],
        'page' => ['as' => 'p'],
    ];
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        return view('dashboard.pages.skills.view-skills', ['skills' => Skill::whereAny(['name', 'progress'], 'like', '%' . $this->search . '%')->paginate(10)]);
    }
}
