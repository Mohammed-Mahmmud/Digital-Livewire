<?php

namespace App\Livewire\Dashboard\Pages\Projects;

use App\Http\Requests\Dashboard\ProjectRequest;
use App\Models\Category;
use App\Models\Project;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $name, $description, $image, $category_id, $link, $categories;


    public function mount()
    {
        $this->categories = Category::get();
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
        $imageName = time() . '.' . $this->image->getClientOriginalExtension();
        $this->image->storeAs('images', $imageName, 'public');
        $data['image'] = 'storage/images/' . $imageName;
        Project::create($data);
        $this->reset('name', 'description', 'image', 'category_id', 'link');
        $this->dispatch('createModalToggle');
        $this->dispatch('refreshTable')->to(View::class);
        toastr()->success('Data has been saved successfully!');
    }
    public function render()
    {
        return view('dashboard.pages.projects.create');
    }
}
