<?php

namespace App\Livewire\Components\Front\Partials;

use App\Models\Service;
use Livewire\Component;

class ServicesComponent extends Component
{
    public $count, $services;
    public function mount()
    {
        if (isset($this->count)) {
            $this->services = Service::take($this->count)->get();
        } else {
            $this->services = Service::get();
        }
    }
    public function render()
    {
        return view('components.front.partials.services-component', ['services' => $this->services]);
    }
}
