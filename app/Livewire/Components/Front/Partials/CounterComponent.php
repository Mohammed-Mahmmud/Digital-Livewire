<?php

namespace App\Livewire\Components\Front\Partials;

use App\Models\Counter;
use Livewire\Component;

class CounterComponent extends Component
{
    public $count, $counters;
    public function mount()
    {
        if (isset($this->count)) {
            $this->counters = Counter::take($this->count)->get();
        } else {
            $this->counters = Counter::get();
        }
    }
    public function render()
    {
        return view('components.front.partials.counter-component', ['counters' => $this->counters]);
    }
}
