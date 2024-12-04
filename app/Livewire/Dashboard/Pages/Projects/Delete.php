<?php

namespace App\Livewire\Dashboard\Pages\Projects;

use App\Models\Project;
use Livewire\Component;

class Delete extends Component
{
    public $project;
    protected $listeners = ['destroy'];
    public function destroy($id)
    {
        $this->project = Project::findOrFail($id);
        $this->dispatch('deleteModalToggle');
    }
    public function submit()
    {

        if (file_exists($this->project->image)) {
            unlink($this->project->image);
        }
        $this->project->delete();
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshTable')->to(View::class);
        $this->reset('project');
        toastr()->error('Data has been deleted successfully!');
    }
    public function render()
    {
        return view('dashboard.pages.projects.delete');
    }
}
