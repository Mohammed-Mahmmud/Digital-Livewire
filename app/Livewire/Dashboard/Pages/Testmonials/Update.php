<?php

namespace App\Livewire\Dashboard\Pages\Testmonials;

use App\Http\Requests\Dashboard\ProjectRequest;
use App\Models\Category;
use App\Models\Project;
use App\Models\Testmonial;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;
    public $name, $description, $image, $position, $testmonial;
    protected $listeners = ['edit'];



    public function edit($id)
    {
        $this->testmonial = Testmonial::findOrFail($id);
        $this->name =  $this->testmonial->name;
        $this->description =  $this->testmonial->description;
        $this->position =  $this->testmonial->position;
        $this->dispatch('updateModalToggle');
    }
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
        $data = $this->validate();
        if ($this->image) {
            unlink($this->testmonial->image);
            $imageName = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('images', $imageName, 'public');
            $data['image'] = 'storage/images/' . $imageName;
        } else {
            unset($data['image']);
        }
        $this->testmonial->update($data);
        $this->dispatch('updateModalToggle');
        $this->dispatch('refreshTable')->to(View::class);
        $this->reset('name', 'description', 'image', 'position', 'testmonial');
        toastr()->info('Data has been updated successfully!');
    }
    public function render()
    {
        return view('dashboard.pages.testmonials.update');
    }
}
