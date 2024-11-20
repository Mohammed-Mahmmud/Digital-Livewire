<?php

namespace App\Livewire\Dashboard\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AdminLogoutComponent extends Component
{
    public function logout()
    {
        Auth::guard('admin')->logout();
        session()->invalidate();
        session()->regenerateToken();
        return to_route('admin.login');
    }
    public function render()
    {
        return view('dashboard.auth.admin-logout-component');
    }
}
