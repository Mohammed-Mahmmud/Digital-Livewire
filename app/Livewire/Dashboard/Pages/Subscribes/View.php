<?php

namespace App\Livewire\Dashboard\Pages\Subscribes;

use App\Models\Subscribe;
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
        return view('dashboard.pages.subscribes.view', ['subscribes' => Subscribe::whereAny(['email'], 'like', '%' . $this->search . '%')->paginate(10)]);
    }
}
