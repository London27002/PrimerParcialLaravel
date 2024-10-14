<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CelularesStoreRequest extends FormRequest
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
           'modelo' => 'required|string|max:255',
            'marca' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:1',
            'fecha_venta' => 'required|date',
            'en_oferta' => 'boolean',
            'descripcion' => 'nullable|string',
            'color' => 'nullable|string',
            'imei' => 'required|string|unique:celulares,imei',
        ];
    }
}
