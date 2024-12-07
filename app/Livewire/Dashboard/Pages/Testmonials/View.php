<?php

namespace App\Livewire\Dashboard\Pages\Testmonials;

use App\Models\Testmonial;
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
        return view('dashboard.pages.testmonials.view', ['data' => Testmonial::whereAny(['name', 'position'], 'like', '%' . $this->search . '%')->paginate(10)]);
    }
}
