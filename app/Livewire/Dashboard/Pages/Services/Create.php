<?php

namespace App\Livewire\Dashboard\Pages\Services;

use App\Http\Requests\Dashboard\ServiceRequest;
use App\Models\Service;
use Livewire\Component;

class Create extends Component
{
    public $services = [];
    public function rules()
    {
        return (new ServiceRequest())->rules();
    }
    public function attributes()
    {
        return (new ServiceRequest())->attributes();
    }
    public function submit()
    {
        $this->validate($this->rules(), [], $this->attributes());
        Service::create($this->services);
        $this->reset('services');
        $this->dispatch('createModalToggle');
        $this->dispatch('refreshTable')->to(View::class);
        toastr()->success('Data has been saved successfully!');
    }
    public function render()
    {
        return view('dashboard.pages.services.create');
    }
}
