<?php

namespace App\Livewire\Dashboard\Pages\Members;

use App\Http\Requests\Dashboard\MembersRequest;
use App\Models\Category;
use App\Models\Member;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;
    public $name, $position, $image, $facebook, $twitter, $linkedin, $instagram, $member;
    protected $listeners = ['edit'];

    public function edit($id)
    {
        $this->member = Member::findOrFail($id);
        $this->name =  $this->member->name;
        $this->position =  $this->member->position;
        $this->facebook =  $this->member->facebook;
        $this->twitter   =  $this->member->twitter;
        $this->linkedin   =  $this->member->linkedin;
        $this->instagram   =  $this->member->instagram;
        $this->dispatch('updateModalToggle');
    }
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
        if ($this->image) {
            unlink($this->member->image);
            $imageName = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('members', $imageName, 'public');
            $data['image'] = 'storage/members/' . $imageName;
        } else {
            unset($data['image']);
        }
        $this->member->update($data);
        $this->dispatch('updateModalToggle');
        $this->dispatch('refreshTable')->to(View::class);
        $this->reset('name', 'position', 'image', 'facebook', 'twitter', 'linkedin', 'instagram');
        toastr()->info('Data has been updated successfully!');
    }
    public function render()
    {
        return view('dashboard.pages.members.update');
    }
}
