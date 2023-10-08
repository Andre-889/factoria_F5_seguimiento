<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoderFeedbackRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'text' => 'required|string',
            'person_id' => 'required|integer',
            'user_id' => 'required|integer',
            'date' => 'nullable|date',
            'observations' => 'required|string',
            'improve' => 'required|string',
                ];
    }
    public function messages(): array
    {
        return [
            'text.required' => 'Text is required',
            'text.string' =>'Text accepts only strings',
            'person_id.required' => 'Person id is required',
            'person_id.integer' => 'Person id accepts only integers',
            'user_id.required' => 'User id is required',
            'user_id.integer' => 'User id accepts only integers',
            'date.date' => 'Date only accepts valid date fields',
            'observations.required' => 'Observations is required',
            'observations.string' => 'Observations accepts only strings',
            'improve.required' => 'Improve is required',
            'improve.string' => 'Improve accepts only strings'

        ];
    }
}
