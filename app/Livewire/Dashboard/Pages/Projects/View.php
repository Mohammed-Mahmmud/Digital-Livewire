<?php

namespace App\Livewire\Dashboard\Pages\Projects;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

class View extends Component
{
    protected $listeners = ['refreshTable' => '$refresh'];
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
        return view('dashboard.pages.projects.view', ['data' => Project::whereAny(['name', 'link'], 'like', '%' . $this->search . '%')->paginate(10)]);
    }

}
