<?php

namespace App\Livewire\Dashboard\Pages\Subscribes;

use App\Models\Subscribe;
use Livewire\Component;

class Delete extends Component
{
    public $subscribe;
    protected $listeners = ['destroy'];
    public function destroy($id)
    {
        $this->subscribe = Subscribe::findOrFail($id);
        $this->dispatch('deleteModalToggle');
    }
    public function submit()
    {
        $this->subscribe->delete();
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshTable')->to(View::class);
        $this->reset('subscribe');
        toastr()->error('Data has been deleted successfully!');
    }
    public function render()
    {
        return view('dashboard.pages.subscribes.delete');
    }
}
