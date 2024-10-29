<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BoardgameCreateRequest extends FormRequest
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
            //

            'name' => 'required|min:1',
            'type' => 'required|min:3',
            'players' => 'required|min:1|numeric',
            'instructor' => 'required|min:3',
            'box' => 'image'
        ];
    }

    public function messages(): array
    {
        return [
            // 'name.required' => 'Devi inserire un nome',
            // 'type.required' => 'Devi inserire una tipologia',
            // 'players.required' => 'Devi inserire un numero di giocatori',
            // 'instructor.required' => 'Devi inserire un istruttore',
            '*required' => 'Devi inserire un dato nel campo :attribute.',
            '*.min' => 'Il campo :attribute deve avere almeno :min caratteri.',
            '*.max' => 'Il campo :attribute deve avere almeno :max caratteri.',
            '*.numeric' => 'Il campo :attribute deve essere un numero.',
            'box.image' => 'Devi inserire un file immagine nel campo :attribute.'
        ];
    }
    public function attributes(): array
    {
        return [
            'name' => 'nome',
            'type' => 'tipo di gioco',
            'players' => 'numero di giocatori',
            'instructor' => 'istruttore',
        ];
    }
}
