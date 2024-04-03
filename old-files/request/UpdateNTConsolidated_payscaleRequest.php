<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNTConsolidated_payscaleRequest extends FormRequest
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
            'basepay'=>['required','int'],
            'allowance'=>['required','int'],
            'year'=>['required','int'],
            'wef'=>['required','date'],
            'status'=>['string','max:15']
        ];
    }
}
