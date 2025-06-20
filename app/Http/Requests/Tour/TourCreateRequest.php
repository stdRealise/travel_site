<?php

namespace App\Http\Requests\Tour;

use App\Models\Enums\TourType;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class TourCreateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string','unique:tours,name'],
            'description' => ['required', 'string'],
            'direction_id' => ['required', 'exists:directions,id'],
            'type' => ['required', Rule::in(TourType::keys())],
            'price' => ['required', 'numeric', 'min:0'],
        ];
    }
}
