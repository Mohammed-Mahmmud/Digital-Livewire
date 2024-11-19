<?php

namespace App\Livewire\Dashboard\Auth;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;
use Livewire\Component;

class AdminLoginComponent extends Component
{
    // #[Validate('required|string|email')]
    public $email;
    // #[Validate('required')]
    public $password;
    // #[Validate('nullable')]
    public $remember;
    public function rules()
    {
        return (new LoginRequest)->rules();
    }
    public function submit()
    {
        $this->validate();
        try {
            if (!Auth::guard('admin')->attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
                throw ValidationException::withMessages([
                    'email' => trans('auth.failed'),
                ]);
            }
            return to_route('admin.dashboard');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
        }
    }
    public function render()
    {
        return view('dashboard.auth.admin-login-component');
    }
}
