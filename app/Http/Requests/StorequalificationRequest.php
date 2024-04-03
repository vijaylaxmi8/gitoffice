<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorequalificationRequest extends FormRequest
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
            'qual_name'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
            'qual_shortname'=>['required'],
            
        ];
    }
    public function messages():array
    {
        return
        [
            'qual_name.required'=>'Qualification Name is required field',
            'qual_name.regex'=>'Qualification Name should be letters and spaces only',
            'qual_shortname.required'=>'Qualification Shortname is required filed',
           
          
        ];
    }    
    
}
