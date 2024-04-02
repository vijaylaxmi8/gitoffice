<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class Updateteaching_payscaleRequest extends FormRequest
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
            
            'payscale_title'=>['required','regex:/^[A-Za-z0-9-.]+$/'],
            'basepay'=>['required'],
            'maxpay'=>['required'],
            'designations_id'=>['required',Rule::exists('designations', 'id')],
            'agp'=>['required'],
            'da'=>['required'],
            'hra'=>['required'],
            'cca'=>['required'],
            'wef'=>['required','date'],
            'status'=>['required'],
           
        ];
    }
    public function messages():array
    {
        return
        [
            'edit_payscale_title.required'=>'Payscale  title is required field',
            'edit_payscale_title.regex'=>'Payscale title should be letters and numbers  only',
            'edit_basepay.required'=>'basepay is required filed',
            'edit_maxpay.required'=>'maxpay is required filed',
            'edit_agp.required'=>'agp is required filed',
            'edit_da.required'=>'da is required filed',
            'edit_hra.required'=>'hra is required filed',
            'edit_cca.required'=>'cca is required filed',
            'edit_wef.required'=>'wef is required filed',
            'status.required'=>'status is require field',
          
          
        ];
    } 
}
