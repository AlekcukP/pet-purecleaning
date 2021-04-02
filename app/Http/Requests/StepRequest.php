<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StepRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'surname' => ['required', 'string'],
            'city' => ['required', 'string'],
            'phone' => ['required', 'numeric'],
            'referral' => ['required', 'string'],
            'bedroom' => ['required', 'numeric'],
            'bathroom' => ['required', 'numeric'],
            'address' => ['required', 'string'],
            'footage' => ['required', 'numeric'],
            'cleaning_frequency' => ['required', 'string'],
            'cleaning_type' => ['required', 'string'],
            'cleaning_date' => ['required', 'string'],
            'pets' => ['required', 'string'],
            'pets_total' => ['required', 'numeric'],
            'adults' => ['required', 'numeric'],
            'child' => ['required', 'numeric'],
            'cleanliness' => ['required', 'numeric'],
            'previous_clean' => ['required', 'boolean'],
            'stainless_appliances' => ['required', 'boolean'],
            'stove_type' => ['required', 'string'],
            'shower_glass' => ['required', 'boolean'],
            'email' => ['required', 'email:rfc,dns'],
            'apt' => ['numeric'],
            'previous_different' => ['string'],
            'flooring_types' => ['array'],
            'flooring_types.*' => ['string'],
            'countertops_types' => ['array'],
            'countertops_types.*' => ['string'],
            'stainless_appliances' => ['boolean'],
            'special_attention' => ['string'],
            'else_info' => ['string'],
            'extra_fridge' => ['boolean'],
            'extra_oven' => ['boolean'],
            'extra_garage' => ['boolean'],
            'extra_laundary' => ['boolean'],
            'extra_blinds' => ['boolean'],
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
