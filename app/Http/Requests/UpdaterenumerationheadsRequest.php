<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdaterenumerationheadsRequest extends FormRequest
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
            'edit_activity' => ['required', 'regex:/^[a-zA-Z\s]+$/'],
            'edit_level' => ['required', Rule::in(['UG', 'PG'])],
            'status'=>['required'],
        ];
    }
    public function messages():array
    {
        return
        [
            'edit_activity.required'=>'Renumeration activity Name is required field',
            'edit_activity.regex'=>'Renumeration activity Name should be characters only',
            'edit_level.required'=>'level is required field',
            'edit_level.in'=>'Please select the valid option from provided choices',
            'status'=>'status is required field',
       

         
          
        ];
    } 
}
