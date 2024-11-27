<?php

namespace App\Livewire\Dashboard\Pages\Skills;

use App\Models\Skill;
use Livewire\Component;

class Delete extends Component
{
    public $skill;
    protected $listeners = ['destroy'];
    public function destroy($id)
    {
        $this->skill = Skill::findOrFail($id);
        $this->dispatch('deleteModalToggle');
    }
    public function submit()
    {
        $this->skill->delete();
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshTable')->to(View::class);
        $this->reset('skill');
        toastr()->error('Data has been deleted successfully!');
    }
    public function render()
    {
        return view('dashboard.pages.skills.delete');
    }
}
