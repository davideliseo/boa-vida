<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupplyRequest extends FormRequest
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
            'name' => ['required'],
            'price' => ['required', 'numeric'],

            // TODO: entero positivo.
            'quantity' => ['required', 'integer'],
            'expiry_date' => ['nullable', 'date'],
            'purchase_date' => ['nullable', 'date'],
            'supplier_id' => ['nullable']
        ];
    }
}
