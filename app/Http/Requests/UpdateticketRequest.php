<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UpdateticketRequest extends FormRequest
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
            'title'=>['required','string', 'max:255'],
            'description'=>['required','string', 'max:650'],
            'status'=>['string', Rule::in(array_column(Ticketstatus::cases(),'value'))],
            'attachment'=>['sometimes','file','mimes:jpg,jpeg,png,pdf'],
            
        ];
    }
}
