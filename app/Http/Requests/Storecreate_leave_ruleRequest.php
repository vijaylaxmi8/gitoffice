<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Storecreate_leave_ruleRequest extends FormRequest
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
            'carry_forwardable'=>['required','string'],
            'cf_wef'=>['required','date'],
            'cf_gcr'=>['required','string'],
            'max_carry_forwardable'=>['required'],
            'encashable'=>['required','string'],
            'enc_wef'=>['required','date'],
            'enc_gcr'=>['required','string'],
            'max_encashable'=>['required'],
            'gap'=>['required'],
            'gap_wef'=>['required','date'],
            'gap_gcr'=>['required','string'],
            'min_gap'=>['required'],
            'no_days_prior_intimation'=>['required']
        ];
    }
}
