<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorentpayscaleRequest extends FormRequest
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
            'title'=>['required','regex:/^[a-zA-Z\s]+$/'],
            'payband'=>['required'],
            'designations_id'=>['required',Rule::exists('designations', 'id')],
            'wef'=>['required','date'],
        ];
    }
    public function messages():array
    {
        return
        [
            'title.required'=>'Payscale Name is required field',
            'title.alpha'=>'Payscale Name should be characters only',
            'title.max'=>'Payscale title  should be max of 255 characters',
            'payband.required'=>'Payband is required field',
            'payband.alpha'=>'Payband should be numbers only',
            'payband.max'=>'Payband should be max of 255 characters',
            'designation'=>'Designation is required field',
            'wef.date'=>'wef is required field',
         
          
        ];
    }
}
