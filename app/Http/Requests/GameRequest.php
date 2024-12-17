<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GameRequest extends FormRequest
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
            'title' => 'required|min:2',
            'producer' => 'required',
            'price' => 'numeric',
            'cover' => 'required|image|mimes:png,jpg,webp',
            'description' => 'required|min:10|max:500'
        ];
    }




    public function messages()
    {
        return [
            'title.required' => 'Devi inserire il titolo del gioco',
            'title.min' => 'Il titolo deve avere almeno 2 caratteri',
            'producer.required' => 'Devi inserire chi ha prodotto il gioco',
            'price.numeric' => 'Il prezzo deve contenere solo numeri',
            'cover.required' => 'Devi inserire l\'immagine di copertina',
            'cover.mimes' => 'L\'immagine deve essere in png, jpg o webp',
            'description.required'=> 'Devi inserire una descrizione del gioco',
            'description.min' => 'La descrizizone deve contenere almeno 10 caratteri',
            'description.max' => 'La descrizione deve contenere massimo 500 caratteri'
        ];
    }
}
