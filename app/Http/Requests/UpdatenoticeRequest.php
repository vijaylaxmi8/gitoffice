<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatenoticeRequest extends FormRequest
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
            'e_title' => ['required'],
            'e_date'=>['required','date'],
            'e_description'=>['required'],
            'e_staff_type'=>['required',Rule::in(['Teaching','Non-Teaching','All'])],
         
        ];
    }

    public function messages():array
    {
    
        return
        [
            'e_title.required'=>'title is required field',
            //'e_title.regex' => 'The title field should contain only letters and spaces and  numbers',
            'e_date.required'=>'start date is required filed',
            'e_description.required'=>'description is required field',
            //'e_description.regex' => 'The description field should contain only letters and spaces.',
            'e_staff_type.required'=>'staff type is required field',
            'e_staff_type.in'=>'Staff type must be either Teaching,Non-Teaching or All',
        ];
    }
}
