<?php

namespace App\Livewire\Dashboard\Pages\Projects;

use App\Http\Requests\Dashboard\ProjectRequest;
use App\Models\Category;
use App\Models\Project;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;
    public $name, $description, $image, $category_id, $link, $categories, $project;
    protected $listeners = ['edit'];


    public function mount()
    {
        $this->categories = Category::get();
    }
    public function edit($id)
    {
        $this->project = Project::findOrFail($id);
        $this->name =  $this->project->name;
        $this->description =  $this->project->description;
        $this->link =  $this->project->link;
        $this->category_id =  $this->project->category_id;
        // $this->image =  $this->project->image;
        $this->dispatch('updateModalToggle');
    }
    public function rules()
    {
        return (new ProjectRequest())->rules();
    }
    public function attributes()
    {
        return (new ProjectRequest())->attributes();
    }
    public function submit()
    {
        $data = $this->validate($this->rules(), [], $this->attributes());
        if ($this->image) {
            unlink($this->project->image);
            $imageName = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('images', $imageName, 'public');
            $data['image'] = 'storage/images/' . $imageName;
        } else {
            unset($data['image']);
        }
        $this->project->update($data);
        $this->dispatch('updateModalToggle');
        $this->dispatch('refreshTable')->to(View::class);
        $this->reset('name', 'description', 'image', 'category_id', 'link');
        toastr()->info('Data has been updated successfully!');
    }
    public function render()
    {
        return view('dashboard.pages.projects.update');
    }
}
