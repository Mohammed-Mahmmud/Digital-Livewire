<?php

namespace App\Livewire\Dashboard\Pages\Services;

use App\Models\Service;
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
        return view('dashboard.pages.services.view', ['services' => Service::whereAny(['name', 'description'], 'like', '%' . $this->search . '%')->paginate(10)]);
    }
}
