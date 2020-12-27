<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupplierRequest extends FormRequest
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
            // TODO: validación RUT.
            'rut' => ['nullable', 'unique:suppliers,rut'],
            'address' => ['nullable'],
            'email' => ['nullable', 'email'],
            // TODO: validación número de teléfono.
            'phone_number' => ['nullable'],
            'contact_name' => ['nullable'],
        ];
    }
}
