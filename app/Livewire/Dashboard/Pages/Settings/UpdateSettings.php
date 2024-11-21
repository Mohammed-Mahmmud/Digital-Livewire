<?php

namespace App\Livewire\Dashboard\Pages\Settings;

use App\Http\Requests\Dashboard\SettingsRequest;
use App\Models\Setting;
use Livewire\Component;

class UpdateSettings extends Component
{
    public $settings;
    public function mount()
    {
        $this->settings = Setting::find(1);
    }
    public function rules()
    {
        return (new SettingsRequest())->rules();
    }
    public function attributes()
    {
        return [
            'settings.name' => 'comapny name',
            'settings.email' => 'default company email',
            'settings.address' => 'company location',
        ];
    }
    public function submit()
    {
        $this->validate($this->rules(), [], $this->attributes());
        $this->settings->save();
        session()->flash('message', 'Settings updated successfully');
    }
    public function render()
    {
        return view('dashboard.pages.settings.update-settings');
    }
}
