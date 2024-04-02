<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreassociationRequest extends FormRequest
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
            'asso_name'=>['required','regex:/^[\pL\s]+$/u', 'max:255'],
        ];
    }
    public function messages():array
    {
        return
        [
            'asso_name.required'=>'Association Name is required field',
            'asso_name.regex'=>'Association Name can be characters only',
            'asso_name.max'=>'Association Name can be max of 255 characters',
        ];
    }
}
