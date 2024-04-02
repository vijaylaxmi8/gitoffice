<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class UpdateconsultancyRequest extends FormRequest
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
            'ce_consultancy_title'=> ['required', 'regex:/^[a-zA-Z\s]+$/'],
            'ce_agency'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
            'ce_from_date'=>['required','date'],
            'ce_to_date'=>['required','date'],
            'ce_amount'=>['numeric'],
            'ce_consultancy_type'=>['required', Rule::in(['consultancy','testing'])],
        ];
    }
    public function messages():array
    {
        return
        [
            'ce_consultancy_title.required'=>'consultancy title is required field',
            'ce_consultancy_title.regex' => 'The consultancy title field should contain only letters and spaces.',
            'ce_agency.required'=>'agency is required filed',
            'ce_agency.regex' => 'The agency field should contain only letters and spaces.',
            'ce_from_date.required'=>'from_date is required field',
            'ce_to_date.required'=>'to_date is required field',
            //'ce_amount.required'=>'amount is required field',
            'ce_amount.numeric'=>'Amount can be numbers only',
            'ce_consultancy_type.required'=>'onsultancy_type is required field',
            'ce_consultancy_type.in'=>'Please select a valid option from the provided choices',
           
        ];
    }
}
