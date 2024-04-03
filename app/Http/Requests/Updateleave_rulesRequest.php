<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Updateleave_rulesRequest extends FormRequest
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
            /* 'longname' => ['required','string', 'max:255'],
            'shortname' => ['required','string', 'max:255'],
            'min' => ['required'],
            'max' => ['required'],
            'rule' => ['required','string','max:15']*/
            
        ];
    }
}
