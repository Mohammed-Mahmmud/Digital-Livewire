<?php

namespace App\Livewire\Dashboard\Pages\Testmonials;

use App\Models\Testmonial;
use Livewire\Component;

class Delete extends Component
{
    public $testmonial;
    protected $listeners = ['destroy'];
    public function destroy($id)
    {
        $this->testmonial = Testmonial::findOrFail($id);
        $this->dispatch('deleteModalToggle');
    }
    public function submit()
    {

        if (file_exists($this->testmonial->image)) {
            unlink($this->testmonial->image);
        }
        $this->testmonial->delete();
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshTable')->to(View::class);
        $this->reset('testmonial');
        toastr()->error('Data has been deleted successfully!');
    }
    public function render()
    {
        return view('dashboard.pages.testmonials.delete');
    }
}
