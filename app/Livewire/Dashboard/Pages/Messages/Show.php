<?php

namespace App\Livewire\Dashboard\Pages\Messages;

use App\Models\Message;
use Livewire\Component;

class Show extends Component
{
    public  $name, $email, $subject, $message, $status;
    protected $listeners = ['show'];
    public function show($id)
    {
        $data = Message::findOrFail($id);
        // $message = $data;
        $this->name =  $data->name;
        $this->email =  $data->email;
        $this->subject =  $data->subject;
        $this->status =  ($data->status == "1") ? "Readed" : "Unreaded";
        $this->message =  $data->message;
        $data->update(['status' => "1"]);
        $this->dispatch('refreshTable')->to(View::class);
        $this->dispatch('updateModalToggle');
    }
    public function render()
    {
        return view('dashboard.pages.messages.show');
    }
}
