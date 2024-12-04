<?php

namespace App\Livewire\Dashboard\Pages\Services;

use App\Models\Service;
use Livewire\Component;

class Delete extends Component
{
    public $service;
    protected $listeners = ['destroy'];
    public function destroy($id)
    {
        $this->service = Service::findOrFail($id);
        $this->dispatch('deleteModalToggle');
    }
    public function submit()
    {
        $this->service->delete();
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshTable')->to(View::class);
        $this->reset('service');
        toastr()->error('Data has been deleted successfully!');
    }
    public function render()
    {
        return view('dashboard.pages.services.delete');
    }
}
