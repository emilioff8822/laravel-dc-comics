<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
     */
    public function rules()
    {
        return [
    'title' => 'required|min:3',
    'description' => 'required',
    'thumb' => 'required',
    'price' => 'required|numeric',
    'series' => 'required',
    'sale_date' => 'required|date',
    'type' => 'required',
    'artists' => 'required',
    'writers' => 'required',
        ];
    }

  public function messages()
    {
        return [
    'title.required' => 'Il titolo è un campo obbligatorio.',
    'title.min' => 'Il titolo deve avere almeno :min caratteri.',
    'description.required' => 'La descrizione è un campo obbligatorio.',
    'thumb.required' => 'Il thumb è un campo obbligatorio.',
    'price.required' => 'Il prezzo è un campo obbligatorio.',
    'price.numeric' => 'Il prezzo deve essere un numero.',
    'series.required' => 'La serie è un campo obbligatorio.',
    'sale_date.required' => 'La data di vendita è un campo obbligatorio.',
    'sale_date.date' => 'La data di vendita deve essere una data valida.',
    'type.required' => 'Il tipo è un campo obbligatorio.',
    'artists.required' => 'Gli artisti sono un campo obbligatorio.',
    'writers.required' => 'Gli scrittori sono un campo obbligatorio.',
        ];
    }


}