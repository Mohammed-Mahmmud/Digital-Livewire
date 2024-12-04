<?php

namespace App\Livewire\Dashboard\Pages\Messages;

use App\Models\Message;
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
        return view('dashboard.pages.messages.view', ['messages' => Message::whereAny(['name', 'subject', 'message', 'status', 'email'], 'like', '%' . $this->search . '%')->paginate(10)]);
    }
}
