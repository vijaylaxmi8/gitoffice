<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorepublicationRequest extends FormRequest
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
        return 
        [
            'level'=>['required', Rule::in(['Q1', 'Q2', 'Q3','Q4','SCI','Web of Science','Scopus Indexed','UGC General','Other'])],
            'other_level'=>['sometimes'],
            'title' => ['required', 'regex:/^[a-zA-Z\s]+$/'],
            'date'=>['required','date'],
            'journal'=>['required', 'regex:/^[a-zA-Z\s]+$/'],
            'publication_type'=>['required', Rule::in(['Journal','Conference Proceeding'])],
            'doi_number'=>['required'],
            'link'=>['url'],
            'role'=>['required', Rule::in(['Author','Co-Author','Corresponding-Author'])],
            'document'=>['required','file','mimes:pdf'],
            //
        ];
    }
    public function messages():array
    {
        return
        [
            'level.required'=>'level is required field',
            'level.in'=>'Please select a valid option from the provided choices',
           // 'other_level'=>'other level field should contain letters and spaces',
            'title.required'=>'title is required field',
            'title.regex' => 'The title field should contain only letters and spaces.',
            'date.required'=>'date is required field',
            'journal.required'=>'journal is required filed',
            'journal.regex'=>'The journal field should contain only letters and spaces.',
            // 'publication_type.required'=>'publication type is required field',
            // 'publication_type.in'=>'Please select a valid option from the provided choices',
            'link.url'=>'The link should be valid url',
            'role.required'=>'role is required field',
            'role.in'=>'Please select a valid option from the provided choices',
            'document'=>'document is required field',
        ];
    }
}
