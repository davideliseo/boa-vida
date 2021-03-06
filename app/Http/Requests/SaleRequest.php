<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SaleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'amount' => ['required', 'numeric'],
            'date' => ['required', 'date'],
            'status' => [
                'required',
                Rule::in(['pending', 'completed', 'failed'])
            ],
            'type' => [
                'required',
                Rule::in(['receipt', 'bill'])
            ],
            'client_name' => ['required'],
            'client_phone_number' => ['nullable'],
            'products' => ['required', 'json']
        ];
    }
}
