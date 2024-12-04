<?php

namespace App\Livewire\Dashboard\Pages\Categories;

use App\Http\Requests\Dashboard\CategoryRequest;
use App\Models\Category;
use Livewire\Component;

class Create extends Component
{
    public $category = [];
    public function rules()
    {
        return (new CategoryRequest())->rules();
    }
    public function attributes()
    {
        return (new CategoryRequest())->attributes();
    }
    public function submit()
    {
        $this->validate($this->rules(), [], $this->attributes());
        Category::create($this->category);
        $this->reset('category');
        $this->dispatch('createModalToggle');
        $this->dispatch('refreshTable')->to(View::class);
        toastr()->success('Data has been saved successfully!');
    }
    public function render()
    {
        return view('dashboard.pages.categories.create');
    }
}
