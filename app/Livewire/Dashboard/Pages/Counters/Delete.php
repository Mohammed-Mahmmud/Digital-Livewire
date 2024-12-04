<?php

namespace App\Livewire\Dashboard\Pages\Counters;

use App\Models\Counter;
use Livewire\Component;

class Delete extends Component
{
    public $counter;
    protected $listeners = ['destroy'];
    public function destroy($id)
    {
        $this->counter = Counter::findOrFail($id);
        $this->dispatch('deleteModalToggle');
    }
    public function submit()
    {
        $this->counter->delete();
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshTable')->to(View::class);
        $this->reset('counter');
        toastr()->error('Data has been deleted successfully!');
    }
    public function render()
    {
        return view('dashboard.pages.counters.delete');
    }
}
