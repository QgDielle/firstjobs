<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
     * @return array<string, mixed>
     * https://laravel.com/docs/9.x/validation#available-validation-rules(<--link delle regole)
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3',
            'autore' => 'required|min:5',
            'description' => 'required|min20',
            'cover' => 'required|image',
        ];
    }

    public function messages(){
        return[
            'title.required' => 'Hai dimenticato di inserire il titolo',
            'title.min' => 'Il titolo deve avere almeno 3 caratteri',
            'autore.required' => 'Hai dimenticato di inserire il titolo',
            'autore.min' => 'Devi inserire almeno 3 caratteri',
            'description.required' => 'Hai dimenticato di inserire il la descrizione',
            'description.min' => 'devi inserire almeno 20 caratteri',
            'cover.required' => 'Hai dimenticato di inserire la copertina del libro',
            'cover.image' => "La copertina del gioco dev'essere un'immagine"
        ];
    }
}
