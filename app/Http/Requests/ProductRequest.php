<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'          => 'required|string',
            'image'         => 'required|file',
            'description'   => 'nullable|string'
            // 'him_model'     => 'required|in:Silver,Platinum,Paladium',
            // 'her_model'     => 'required|in:Silver,Platinum,Paladium',
            // 'him_weight'    => 'required|integer',
            // 'her_weight'    => 'required|integer',
            // 'stone'         => 'required|in:Diamon,Sirkon,Stone',
            // 'him_size'      => 'required|integer',
            // 'her_size'      => 'required|integer',
            // 'price'         => 'required|integer',
            // 'gold'          => 'required|in:24,21,18,17,16,9,8,6',
            // 'color'         => 'required|in:White,Yellow,Red,Rose',
        ];
    }
}
