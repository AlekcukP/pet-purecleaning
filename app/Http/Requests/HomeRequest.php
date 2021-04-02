<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeRequest extends FormRequest
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
            'pets' => ['required', 'string'],
            'pets_total' => ['required', 'numeric'],
            'adults' => ['required', 'numeric'],
            'child' => ['required', 'numeric'],
            'cleanliness' => ['required', 'numeric'],
            'previous_clean' => ['required', 'boolean'],
            'previous_different' => ['string'],
        ];
    }
}
