<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreholidayrhRequest extends FormRequest
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
            'year'=>['required','numeric'],
             'title'=>['required','string','max:255'],
             'start'=>['required','date'],
             'day'=>['required','string','max:255'],
             'type'=>['required','string','max:255'],

        ];
    }
}

