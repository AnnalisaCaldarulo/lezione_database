<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //! TUTTI SONO AUTORIZZATI
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
            // CHIAVE - CAMPO DA VALIDARE 
            // VALORE - REGOLE DA RISPETTARE PER QUEL CAMPO
            'title' => 'required|min:3',
            'plot' => 'required|min:10|max:50',
            'price' => 'required|numeric',
            'pages' => 'required|integer',
            'cover' => 'image'
        ];
    }
    // ! per forza messageS
    public function messages(): array 
    {
        return [
            // 'title.required' => 'Il campo del titolo è obbligatorio',
            // 'title.min' => 'Il campo del titolo deve avere almeno 3 caratteri',
            // 'plot.required'=> 'Il campo della trama è obbligatorio',
            '*.required'=> 'Il campo :attribute è obbligatorio',
            '*.min'=> 'Scrivi almeno :min caratteri',
            '*.max'=> 'Il campo deve avere massimo :max caratteri',
            '*.integer'=>'Il campo :attribute deve essere un numero',
            '*.numeric'=>'Il campo :attribute deve essere numerico',
            'cover.image'=>'Il file deve essere una immagine'
        ];
    }

    public function attributes() :array
    {
        return [
            'title'=>'titolo',
            'plot'=>'trama',
            'pages'=>'numero di pagine',
            'price'=>'prezzo',
            'cover'=>'immagine di copertina',
        ];
    }
}
