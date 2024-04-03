<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorestaffRequest extends FormRequest
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
            
            // 'user_id'=>['required',Rule::exists('users', 'id')],
            // 'fname'=>['required','alpha','max:30'],
            // 'mname'=>['required','alpha','max:30'],
            // 'lname'=>['required','alpha','max:30'],
            // 'local_address'=>['required','regex:/^[a-zA-Z\s]+$/'],
            // 'permanent_address'=>['required','regex:/^[a-zA-Z\s]+$/'],
            // 'dob'=>['required','date'],
            // 'doj'=>['required','date'],
            // 'religion_id'=>['required',Rule::exists('religions', 'id')],
            // 'castecategory_id'=>['required',Rule::exists('castecategories', 'id')],
            // 'date_of_superanuation'=>['required','date'],
            // 'bloodgroup'=>['regex:/^[A-Za-z0-9-.]+$/'],
            // 'pan_card'=>['regex:/^[A-Za-z0-9-.]+$/'],
            // 'adhar_card'=>['numeric'],
            // 'emergency_no'=>['numeric'],
            // 'emergency_name'=>['alpha'],
            // 'employee_type'=>['required'],
        ];
    }
    public function messages():array
    {
        return
        [
            'fname.required'=>'fname is required field',
            'fname.alpha'=>'fname can be characters only',
            'mname.required'=>'mname is required field',
            'mname.alpha'=>'mname can be characters only',
            'lname.required'=>'lname is required field',
            'lname.alpha'=>'lname can be characters only',
            'local_address.required'=>'local address is required field',
            'local_address.regex'=>'Local address field should contain letters spaces and numbers',
            'permanent_address.required'=>'permanent address is required field',
            'permanent_address.regex'=>'permanent address field should contain letters spaces and numbers',
            'dob.required'=>'dob is required field',
            'doj.required'=>'doj is required field',
            'date_of_superanuation.required'=>'date of superanuation is required field',
            'bloodgroup.regex'=>'bloodgroup field  should contain characters special characters and spaces',
            'pan_card.regex'=>'pan card  field  should contain letters and numbers',
            'adhar_card.numeric'=>'adhar card  should contain only numbers',
            'emergency_no.numeric'=>'emergency no contain only numbers',
            'emergency_name.alpha'=>'emergency name  can be characters only',
            'employee_type.required'=>'employee type is required field',

        ];
    }
}
