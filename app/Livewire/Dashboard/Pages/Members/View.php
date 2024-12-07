<?php

namespace App\Livewire\Dashboard\Pages\Members;

use App\Models\Member;
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
        return view('dashboard.pages.members.view', ['data' => Member::whereAny(['name', 'position'], 'like', '%' . $this->search . '%')->paginate(10)]);
    }
}
