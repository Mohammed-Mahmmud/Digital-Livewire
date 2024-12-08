<?php

namespace App\Livewire\Components\Front\Partials;

use App\Models\Testmonial;
use Livewire\Component;

class Testimonial extends Component
{
    public $count;
    public function render()
    {
        return view('components.front.partials.testimonial',
         ['testimonials' => $this->count ? Testmonial::take($this->count)->get() : Testmonial::get()]);
    }
}
