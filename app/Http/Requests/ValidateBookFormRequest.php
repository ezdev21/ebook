<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateBookFormRequest extends FormRequest
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
            'name'=>['required','string','min:3','max:20'],
            'author'=>['required','string','min:3','max:20'],
            'avatar'=>['required','image']
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'book name is required',
            'name.string'=>'book name should be a string',
            'name.min'=>'book name should be minimum of 3 characters',
            'name.max'=>'book name should be maximum of 20 characters',
            'author.required'=>'book author name is required',
            'author.string'=>'author name should be a string',
            'author.min'=>'book name should be minimum of 3 characters',
            'author.max'=>'book name should be maximum of 20 characters',
            'avatar.required'=>'book cover is required',
            'avatar.image'=>'book cover should be image'
        ];
    }
}
