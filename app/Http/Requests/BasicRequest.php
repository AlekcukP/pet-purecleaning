<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BasicRequest extends FormRequest
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
            'zip' => ['required', 'numeric'],
            'bedroom' => ['required', 'numeric'],
            'bathroom' => ['required', 'numeric'],
            'email' => ['required', 'email:rfc,dns'],
        ];
    }
    public function messages()
    {
        return [
            'bedroom.required' => 'Pick bedrooms amount.',
            'bathroom.required' => 'Pick bathrooms amount.',
            'zip.required' => 'Enter your ZIP code.',
            'email.required' => 'Enter your email address.',
        ];
    }
}
