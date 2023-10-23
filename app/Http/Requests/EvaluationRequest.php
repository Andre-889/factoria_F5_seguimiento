<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EvaluationRequest extends FormRequest
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
                'date' => 'date',
                'type' => 'required',
                'person_id' => 'required|integer',
                'mean' => 'nullable|floatmax:2',
                'user_id' => 'required|integer'
        ];
    }
    
        public function messages(): array
    {
        return [
            'date.date' => 'Enter date format year-month-day',
            'type.required' => 'Type is required and accepts EVALUACION, CO-EVALUACION, AUTO-EVALUACION',
            'person_id.required' => 'Person id is required',
            'person_id.integer' => 'Person id accepts only integers',
            'mean.floatmax' => 'Mean accepts numbers with decimals, two decimals max',
            'user_id.required' => 'User id is required',
            'user_id.integer' => 'User id accepts only inteegers',
            ];
    }
}
