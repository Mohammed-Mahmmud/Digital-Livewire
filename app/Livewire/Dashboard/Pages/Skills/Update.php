<?php

namespace App\Livewire\Dashboard\Pages\Skills;

use App\Http\Requests\Dashboard\SkillsRequest;
use App\Models\Skill;
use Livewire\Component;

class Update extends Component
{
    public $data, $skills = [];
    protected $listeners = ['edit'];
    public function edit($id)
    {
        $this->data = Skill::findOrFail($id);
        $this->skills['name'] =  $this->data->name;
        $this->skills['progress'] =  $this->data->progress;
        $this->dispatch('updateModalToggle');
    }
    public function rules()
    {
        return (new SkillsRequest())->rules();
    }
    public function attributes()
    {
        return (new SkillsRequest())->attributes();
    }
    public function submit()
    {
        $this->validate($this->rules(), [], $this->attributes());
        $this->data->update($this->skills);
        $this->dispatch('updateModalToggle');
        $this->dispatch('refreshTable')->to(View::class);
        $this->reset('skills');
        toastr()->info('Data has been updated successfully!');
    }
    public function render()
    {
        return view('dashboard.pages.skills.update');
    }
}
