<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Storeteaching_payscaleRequest extends FormRequest
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
            'payscale_title'=>['required','regex:/^[A-Za-z0-9-.]+$/'],
            'basepay'=>['required'],
            'maxpay'=>['required'],
            'designations_id'=>['required',Rule::exists('designations', 'id')],
            'agp'=>['required'],
            'da'=>['required'],
            'hra'=>['required'],
            'cca'=>['required'],
            'wef'=>['required','date']
        ];
    }
    public function messages():array
    {
        return
        [
            'payscale_title.required'=>'Payscale title is required field',
            'payscale_title.regex'=>'Payscale title should be characters and numbers only',
            'basepay.required'=>'basepay is required filed',
            'maxpay.required'=>'maxpay is required filed',
            'agp.required'=>'agp is required filed',
            'da.required'=>'da is required filed',
            'hra.required'=>'hra is required filed',
            'cca.required'=>'cca is required filed',
            'wef.required'=>'wef is required filed',
            
           
          
        ];
    } 
}
