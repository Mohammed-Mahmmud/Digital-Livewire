<?php

namespace App\Livewire\Dashboard\Pages\Categories;

use App\Models\Category;
use Livewire\Component;

class Delete extends Component
{
    public $category;
    protected $listeners = ['destroy'];
    public function destroy($id)
    {
        $this->category = Category::findOrFail($id);
        $this->dispatch('deleteModalToggle');
    }
    public function submit()
    {
        $this->category->delete();
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshTable')->to(View::class);
        $this->reset('category');
        toastr()->error('Data has been deleted successfully!');
    }
    public function render()
    {
        return view('dashboard.pages.categories.delete');
    }
}
