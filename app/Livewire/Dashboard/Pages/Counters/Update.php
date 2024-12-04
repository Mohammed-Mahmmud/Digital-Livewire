<?php

namespace App\Livewire\Dashboard\Pages\Counters;

use App\Http\Requests\Dashboard\CounterRequest;
use App\Models\Counter;
use Livewire\Component;

class Update extends Component
{
    public $data, $counters = [];
    protected $listeners = ['edit'];
    public function edit($id)
    {
        $this->data = Counter::findOrFail($id);
        $this->counters['name'] =  $this->data->name;
        $this->counters['count'] =  $this->data->count;
        $this->counters['icon'] =  $this->data->icon;
        $this->dispatch('updateModalToggle');
    }
    public function rules()
    {
        return (new CounterRequest())->rules();
    }
    public function attributes()
    {
        return (new CounterRequest())->attributes();
    }
    public function submit()
    {
        $this->validate($this->rules(), [], $this->attributes());
        $this->data->update($this->counters);
        $this->dispatch('updateModalToggle');
        $this->dispatch('refreshTable')->to(View::class);
        $this->reset('counters');
        toastr()->info('Data has been updated successfully!');
    }
    public function render()
    {
        return view('dashboard.pages.counters.update');
    }
}
