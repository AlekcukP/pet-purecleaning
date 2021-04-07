<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonalRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'surname' => ['required', 'string'],
            'address' => ['required', 'string'],
            'city' => ['required', 'string'],
            'phone' => ['required', 'numeric'],
            'referral' => ['required', 'string'],
            'footage' => ['required', 'numeric'],
            'cleaning_frequency' => ['required', 'string'],
            'cleaning_type' => ['required', 'string'],
            'cleaning_date' => ['required', 'string'],
            // 'apt' => ['numeric'],
        ];
    }
}
