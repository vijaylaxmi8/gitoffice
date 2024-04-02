<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorenoticeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return 
        [
            'title' => ['required'],
            'date'=>['required','date'],
            'description'=>['required'],
            'staff_type'=>['required',Rule::in(['Teaching','Non-Teaching','All'])],
            
        ];
    }

    public function messages():array
    {
        return
        [
            'title.required'=>'title is required field',
            //'title.regex' => 'The title field should contain only letters and spaces and numbers.',
            'date.required'=>'start date is required filed',
            'description.required'=>'description is required field',
           // 'description.regex' => 'The description field should contain only letters and spaces and numbers.',
            'staff_type.required'=>'staff type is required field',
            'staff_type.in'=>'Staff type must be either Teaching,Non-Teaching or All',
        ];
    }
}
