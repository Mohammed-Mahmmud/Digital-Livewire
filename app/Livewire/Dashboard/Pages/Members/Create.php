<?php

namespace App\Livewire\Dashboard\Pages\Members;

use App\Http\Requests\Dashboard\MembersRequest;
use App\Models\Member;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $name, $position, $image, $facebook, $twitter, $linkedin, $instagram;

    public function rules()
    {
        return (new MembersRequest())->rules();
    }
    public function attributes()
    {
        return (new MembersRequest())->attributes();
    }
    public function submit()
    {
        $data = $this->validate($this->rules(), [], $this->attributes());
        $imageName = time() . '.' . $this->image->getClientOriginalExtension();
        $this->image->storeAs('members', $imageName, 'public');
        $data['image'] = 'storage/members/' . $imageName;
        Member::create($data);
        $this->reset('name', 'position', 'image', 'facebook', 'twitter', 'linkedin', 'instagram');
        $this->dispatch('createModalToggle');
        $this->dispatch('refreshTable')->to(View::class);
        toastr()->success('Data has been saved successfully!');
    }
    public function render()
    {
        return view('dashboard.pages.members.create');
    }
}
