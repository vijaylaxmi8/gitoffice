<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatentcpayscaleRequest extends FormRequest
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
            'basepay'=>['required','int'],
            'allowance'=>['required','int'],
            'year'=>['required','int'],
            'wef'=>['required','date'],
            'status'=>['alpha','max:15'],
            'modal_no'=>['required','alpha'],
        ];
    }
    public function messages():array
    {
        return
        [
            'basepay.required'=>'basepay is required field',
            'basepay.int'=>'basepay should be numbers only',
            'allowance.required'=>'allowance is required field',
            'allowance.int'=>'allowance should be numbers only',
            'year.required'=>'year is required field',
            'year.int'=>'year should be numbers only',
            'wef.date'=>'wef is required field',
            'status.required'=>'status is required field',
            'modal_no.alpha'=>'Modal Number',

         
          
        ];
    }
}
