<?php

namespace App\Livewire\Dashboard\Pages\Members;

use App\Models\Member;
use Livewire\Component;

class Delete extends Component
{
    public $member;
    protected $listeners = ['destroy'];
    public function destroy($id)
    {
        $this->member = Member::findOrFail($id);
        $this->dispatch('deleteModalToggle');
    }
    public function submit()
    {

        if (file_exists($this->member->image)) {
            unlink($this->member->image);
        }
        $this->member->delete();
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshTable')->to(View::class);
        $this->reset('member');
        toastr()->error('Data has been deleted successfully!');
    }
    public function render()
    {
        return view('dashboard.pages.members.delete');
    }
}
