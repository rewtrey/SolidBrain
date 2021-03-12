<?php

namespace App\Http\Requests\Footer;

use Illuminate\Foundation\Http\FormRequest;

class CreateFooterRequest extends FormRequest
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
            'aboutUs' => ['string', 'min:5', 'max:1024', 'required'],
            'copyright' => ['string', 'min:5', 'max:128', 'required'],
        ];
    }
}
