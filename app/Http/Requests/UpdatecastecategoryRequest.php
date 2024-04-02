<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class UpdatecastecategoryRequest extends FormRequest
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
            'caste_name'=>['required','regex:/^[a-zA-Z\s]+$/'],
            'religion_id' => ['required', Rule::exists('religions', 'id')],
            'subcastes_name'=>['required','regex:/^[a-zA-Z\s]+$/'],
            'category'=>['required','regex:/^[a-zA-Z\s]+$/'],
            'category_no'=>['required'],
            'e_status'=>['string','max:10'],
         
        ];
    }
    public function messages():array
    {
        return[
           
            'caste_name.required'=>'Caste Name is required field',
            'caste_name.regex'=>'Caste Name can be letters and spaces only',
            'subcastes_name.required'=>'Subcastes name is required filed',
            'subcaste_name.regex'=>'SubCaste Name can be letters and spaces only',
            'category.required'=>'Category Name is required',
            'category.regex'=>'Category Name can be letters and spaces only',
            'category_no'=>'Category number is required field',
            'status'=>'status is require  field',
        
            
        ];
    }
}
