<?php

namespace App\Http\Requests\ContactUs;
use Illuminate\Foundation\Http\FormRequest;

class ContactUsRequest extends FormRequest
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
            'name' => ['string', 'min:3', 'max:64', 'required'],
            'lastName' => ['string', 'min:3',  'max:64', 'required'],
            'email' => ['string', 'email', 'required'],
            'phone_number' => ['string', 'max:64'],
            'subject' => ['string', 'max:255', 'required'],
            'message' => ['string', 'max:512', 'required'],
            'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg|max:2048']
        ];
    }
}
