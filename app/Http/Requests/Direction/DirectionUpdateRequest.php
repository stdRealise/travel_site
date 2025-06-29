<?php

namespace App\Http\Requests\Direction;

use Illuminate\Foundation\Http\FormRequest;

class DirectionUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'description' => ['required', 'string'],
        ];
    }
}
