<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Storenon_teaching_payscaleRequest extends FormRequest
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
            'title'=>['required','string','max:255'],
            'payband'=>['required','string','max:255'],
            'wef'=>['required','date'],
        ];
    }
}
