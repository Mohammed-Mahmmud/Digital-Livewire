<?php

namespace App\Livewire\Dashboard\Pages\Skills;

use App\Http\Requests\Dashboard\SkillsRequest;
use App\Models\Skill;
use Livewire\Component;

class Create extends Component
{
    public $skills = [];
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
        Skill::create([
            'name' => $this->skills['name'],
            'progress' => $this->skills['progress'],
        ]);
        $this->dispatch('createModalToggle');
        $this->dispatch('refreshTable')->to(View::class);
        $this->reset('skills');
        toastr()->success('Data has been saved successfully!');
    }
    public function render()
    {
        return view('dashboard.pages.skills.create');
    }
}
