<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EvaluationStackRequest extends FormRequest
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
                'stack_id' => 'required|integer',
                'evaluation_id' => 'required|integer',
                'level' => 'required|integer'
        ];
    }
    public function messages(): array
    {
        return [
            'stack_id.required' => 'Stack id is required',
            'stack_id.integer' => 'Stack id accepts only integers',
            'evaluation_id.required' => 'Evaluation id is required',
            'evaluation_id.integer' => 'Evaluation id accepts only integers',
            'level.required' => 'Level is required',
            'level.integer' => 'Level accepts only integers',
            ];
    }
}
