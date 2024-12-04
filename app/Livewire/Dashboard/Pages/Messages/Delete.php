<?php

namespace App\Livewire\Dashboard\Pages\Messages;

use App\Models\Message;
use Livewire\Component;

class Delete extends Component
{
    public $message;
    protected $listeners = ['destroy'];
    public function destroy($id)
    {
        $this->message = Message::findOrFail($id);
        $this->dispatch('deleteModalToggle');
    }
    public function submit()
    {
        $this->message->delete();
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshTable')->to(View::class);
        $this->reset('message');
        toastr()->error('Data has been deleted successfully!');
    }
    public function render()
    {
        return view('dashboard.pages.messages.delete');
    }
}
