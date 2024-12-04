<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class CounterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules(): array
    {
        return [
            'counters.name' => ['required', 'string'],
            'counters.count' => ['required', 'numeric'],
            'counters.icon' => ['required', 'string'],
        ];
    }
    public function attributes()
    {
        return [
            'counters.name' => 'name',
            'counters.count' => 'count',
            'counters.icon' => 'icon',
        ];
    }
}
