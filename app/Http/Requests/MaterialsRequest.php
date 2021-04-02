<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MaterialsRequest extends FormRequest
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
            'stainless_appliances' => ['required', 'boolean'],
            'stove_type' => ['required', 'string'],
            'shower_glass' => ['required', 'boolean'],
            'flooring_types' => ['array'],
            'flooring_types.*' => ['string'],
            'countertops_types' => ['array'],
            'countertops_types.*' => ['string'],
            'stainless_appliances' => ['boolean'],
            'special_attention' => ['string'],
            'else_info' => ['string'],
        ];
    }
}
