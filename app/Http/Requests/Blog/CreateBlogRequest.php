<?php

namespace App\Http\Requests\Blog;

use Illuminate\Foundation\Http\FormRequest;

class CreateBlogRequest extends FormRequest
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
            'title' => ['string', 'min:5', 'max:256', 'required'],
            'description_short'  => ['string', 'min:8', 'max:1024'],
            'description' => ['string', 'min:8', 'max:2048', 'required'],
        ];
    }
}
