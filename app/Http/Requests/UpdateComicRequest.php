<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'title' => ['required', 'min:2', 'unique:App\Models\Comic,title'],
            'description' => ['max:1000'],
            'price' => ['required'],
            'series' => ['required', 'min:2'],
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'required' => 'Questo campo è obbligatorio!',
            'title.unique' => 'Esiste già un articolo con questo titolo!',
            'min' => 'La lunghezza minima è di 2 caratteri',
            'description.max' => 'La descrizione non può superare i 1000 caratteri',

        ];
    }

}
