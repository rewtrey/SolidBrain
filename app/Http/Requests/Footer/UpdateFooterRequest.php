<?php

namespace App\Http\Requests\Footer;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFooterRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'aboutUs' => ['string', 'min:1', 'max:512','sometimes'],
            'copyright' => ['string', 'min:1', 'max:128', 'sometimes'],
        ];
    }
}
