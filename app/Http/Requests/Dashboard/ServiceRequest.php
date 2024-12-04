<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules(): array
    {
        return [
            'services.name' => ['required', 'string'],
            'services.description' => ['required', 'string'],
            'services.icon' => ['required', 'string'],
        ];
    }
    public function attributes()
    {
        return [
            'services.name' => 'name',
            'services.description' => 'description',
            'services.icon' => 'icon',
        ];
    }
}
