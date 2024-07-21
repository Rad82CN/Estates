<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEstateRequest extends FormRequest
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
            'image' => 'image',
            'address' => 'required|min:1|max:120',
            'dimensions' => 'required|min:1|max:60',
            'floor' => 'required|min:1|max:60',
            'description' => 'required|min:3|max:250',
            'price' => 'required|min:1|max:20'
        ];
    }
}
