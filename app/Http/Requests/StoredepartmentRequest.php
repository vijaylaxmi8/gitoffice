<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoredepartmentRequest extends FormRequest
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
            'dept_name'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
            'dept_shortname'=>['required'],
            'yoe'=>['required','date']
            
        ];
    }
    public function messages():array
    {
        return
        [
            'dept_name.required'=>'Dept Name is required field',
            'dept_name.regex'=>'Dept Name should be contain letters and spaces ',
            'dept_shortname.required'=>'Dept Shortname is required filed',
            'yoe.required'=>'Year of Establishment is required field',
        ];
    }
}
