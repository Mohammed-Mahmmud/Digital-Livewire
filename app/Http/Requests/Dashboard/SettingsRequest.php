<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class SettingsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'settings.name' => ['required', 'string', 'max:100'],
            'settings.email' => ['required', 'email', 'string', 'max:50'],
            'settings.phone' => ['required', 'string', 'max:20'],
            'settings.address' => ['required', 'string', 'max:255'],
            'settings.facebook' => ['required', 'string', 'max:255'],
            'settings.linkedin' => ['required', 'string', 'max:255'],
            'settings.twitter' => ['required', 'string', 'max:255'],
            'settings.instagram' => ['required', 'string', 'max:255'],
        ];
    }
}
