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
            'title' => 'required|min:5|max:255',
            'series' => 'required|min:5|max:255',
            'type' => 'required|min:5|max:255',
            'sale_date' => 'date|after_or_equal:2000-01-01|before_or_equal:2024-12-12',
            'price' => 'required|min:1|max:999|decimal:2',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'required' => 'SVEGLIAAA!! Hai dimenticato un campo obbligatorio!'
        ];
    }
}
