<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorereligionRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'religion_name' => ['required','regex:/^[a-zA-Z\s]+$/'],
            'created_at' => ['date'],
        ];
    }
    public function messages():array
    {
        return
        [
            'religion_name.required'=>'Religion Name is required field',
            'religion_name.regex'=>'Religion Name should be characters and spaces only',

         
          
        ];
    }    
    
}
