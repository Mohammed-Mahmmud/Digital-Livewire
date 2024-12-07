<?php

namespace App\Livewire\Front\Pages\Subscribes;

use App\Models\Subscribe;
use Livewire\Component;

class Create extends Component
{
    public $email ;
    public function rules()
    {
        return [
            'email'=>'required|email:unique:subscribes',
        ];
    }

    public function submit()
    {
        $data = $this->validate();
        Subscribe::create($data);
        $this->reset('email');
        toastr()->success('Data has been saved successfully!');
    }

    public function render()
    {
        return view('front.pages.subscribes.create');
    }
}
