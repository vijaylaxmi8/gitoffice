<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateassociationRequest extends FormRequest
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
            'edit_asso_name'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
            'edit_status'=>['required'],
        
        ];
    }
    public function messages():array
    {
        return
        [
            'edit_asso_name.required'=>'Association Name is required field',
            'edit_asso_name.regex'=>'Association Name should be characters only',
            'edit_status.required'=>'status is required field',
            
        ];
    }
}
