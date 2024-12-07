<?php

namespace App\Livewire\Dashboard\Pages\Testmonials;

use App\Models\Testmonial;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $name, $description, $image, $position;

    public function rules()
    {
        return [
            'name' => 'required',
            'position' => 'nullable',
            'description' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
    public function submit()
    {
        // $data = $this->validate($this->rules(), [], $this->attributes());
        $data = $this->validate();
        $imageName = time() . '.' . $this->image->getClientOriginalExtension();
        $this->image->storeAs('images', $imageName, 'public');
        $data['image'] = 'storage/images/' . $imageName;
        Testmonial::create($data);
        $this->reset('name', 'description', 'image', 'position');
        $this->dispatch('createModalToggle');
        $this->dispatch('refreshTable')->to(View::class);
        toastr()->success('Data has been saved successfully!');
    }
    public function render()
    {
        return view('dashboard.pages.testmonials.create');
    }
}
