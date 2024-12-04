<?php

namespace App\Livewire\Dashboard\Pages\Counters;

use App\Http\Requests\Dashboard\CounterRequest;
use App\Models\Counter;
use Livewire\Component;

class Create extends Component
{
    public $counters = [];
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
        Counter::create($this->counters);
        $this->reset('counters');
        $this->dispatch('createModalToggle');
        $this->dispatch('refreshTable')->to(View::class);
        toastr()->success('Data has been saved successfully!');
    }
    public function render()
    {
        return view('dashboard.pages.counters.create');
    }
}
