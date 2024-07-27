<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContractRequest extends FormRequest
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
            'seller_name' => 'required|min:1|max:40',
            'buyer_name' => 'required|min:1|max:40',
            'seller_id_number' => 'required|integer|digits:10',
            'buyer_id_number' => 'required|integer|digits:10',
            'description' => 'required|min:1|max:500',
            'seller_address' => 'required|min:1|max:120',
            'buyer_address' => 'required|min:1|max:120',
        ];
    }
}
