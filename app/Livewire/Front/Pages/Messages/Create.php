<?php

namespace App\Livewire\Front\Pages\Messages;

use App\Models\Message;
use Livewire\Component;

class Create extends Component
{
    public $name, $subject, $message, $email;
    public function rules()
    {
        return [
            'name' => 'nullable|string|max:255',
            'email' => 'required|email:unique:subscribes',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ];
    }

    public function submit()
    {
        $data = $this->validate();
        Message::create($data);
        $this->reset('name', 'subject', 'message', 'email');
        toastr()->success('Data has been saved successfully!');
    }
    public function render()
    {
        return view('front.pages.messages.create');
    }
}
