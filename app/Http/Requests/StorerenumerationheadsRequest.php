<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorerenumerationheadsRequest extends FormRequest
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
            //
            
            'activity' => ['required', 'regex:/^[a-zA-Z\s]+$/'],
            'level' => ['required', Rule::in(['UG', 'PG'])],
            
        ];
    }
    public function messages():array
    {
        return
        [
            'activity.required'=>'Renumeration activity Name is required field',
            'activity.regex'=>'Renumeration activity Name should be characters only',
            'level.required'=>'level is required field',
            'level.in'=>'Please select the valid option from provided choices',
        ];
    } 
}
