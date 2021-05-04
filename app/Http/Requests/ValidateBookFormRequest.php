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
            'title'=>['required','string','min:3','max:30'],
            'author'=>['required','string','min:3','max:30'],
            'cover'=>['required','image'],
            'file'=>['required','file']
        ];
    }
    public function messages()
    {
        return [
            'title.required'=>'book title is required',
            'title.string'=>'book title should be a string',
            'title.min'=>'book name should be minimum of 2 characters',
            'title.max'=>'book name should be maximum of 30 characters',
            'author.required'=>'book author name is required',
            'author.string'=>'author name should be a string',
            'author.min'=>'book name should be minimum of 3 characters',
            'author.max'=>'book name should be maximum of 30 characters',
            'cover.required'=>'book cover is required',
            'cover.image'=>'book cover should be image',
            'file.required'=>'pdf file is required',
            'file.file'=>'please select pdf file only'
        ];
    }
}
