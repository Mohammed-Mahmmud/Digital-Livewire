<?php

namespace App\Livewire\Dashboard\Pages\Counters;

use App\Models\Counter;
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
        return view('dashboard.pages.counters.view', ['counters' => Counter::whereAny(['name', 'count'], 'like', '%' . $this->search . '%')->paginate(10)]);
    }
}
