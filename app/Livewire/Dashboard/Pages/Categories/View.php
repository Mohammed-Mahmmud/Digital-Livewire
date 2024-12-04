<?php

namespace App\Livewire\Dashboard\Pages\Categories;

use App\Models\Category;
use App\Models\Skill;
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
        return view('dashboard.pages.categories.view', ['data' => Category::whereAny(['name'], 'like', '%' . $this->search . '%')->paginate(10)]);
    }
}
