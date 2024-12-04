<?php

namespace App\Livewire\Dashboard\Pages\Services;

use App\Http\Requests\Dashboard\ServiceRequest;
use App\Models\Service;
use Livewire\Component;

class Update extends Component
{
    public $data, $services = [];
    protected $listeners = ['edit'];
    public function edit($id)
    {
        $this->data = Service::findOrFail($id);
        $this->services['name'] =  $this->data->name;
        $this->services['description'] =  $this->data->description;
        $this->services['icon'] =  $this->data->icon;
        $this->dispatch('updateModalToggle');
    }
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
        $this->data->update($this->services);
        $this->dispatch('updateModalToggle');
        $this->dispatch('refreshTable')->to(View::class);
        $this->reset('services');
        toastr()->info('Data has been updated successfully!');
    }
    public function render()
    {
        return view('dashboard.pages.services.update');
    }
}
