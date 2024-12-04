<?php

namespace App\Livewire\Dashboard\Pages\Categories;

use App\Http\Requests\Dashboard\CategoryRequest;
use App\Models\Category;
use Livewire\Component;

class Update extends Component
{
    public $data, $category = [];
    protected $listeners = ['edit'];
    public function edit($id)
    {
        $this->data = Category::findOrFail($id);
        $this->category['name'] =  $this->data->name;
        $this->dispatch('updateModalToggle');
    }
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
        $this->data->update($this->category);
        $this->dispatch('updateModalToggle');
        $this->dispatch('refreshTable')->to(View::class);
        $this->reset('category');
        toastr()->info('Data has been updated successfully!');
    }
    public function render()
    {
        return view('dashboard.pages.categories.update');
    }
}
