<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsoleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:2',
            'brand' => 'required',
            'logo' => 'required|image|mimes:png,jpg,webp',
            'description' => 'required|min:10|max:500'
        ];
    }




    public function messages()
    {
        return [
            'name.required' => 'Devi inserire il titolo della console',
            'name.min' => 'Il nome deve avere almeno 2 caratteri',
            'brand.required' => 'Devi inserire chi ha prodotto la console',
            'logo.required' => 'Devi inserire un\'immagine della console',
            'logo.mimes' => 'L\'immagine deve essere in png, jpg o webp',
            'description.required'=> 'Devi inserire una descrizione del gioco',
            'description.min' => 'La descrizizone deve contenere almeno 10 caratteri',
            'description.max' => 'La descrizione deve contenere massimo 500 caratteri'
        ];
    }
}
