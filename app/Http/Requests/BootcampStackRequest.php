<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;

class BootcampStackRequest extends FormRequest
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
            'bootcamp_id' => 'required|integer',
            'stack_id' => 'required|integer'
        ];
        
    }

    public function messages(): array
{
    return [
        'bootcamp_id.required' => 'Bootcamp id es required',
        'stack_id.required' => 'Stack is required',
        'bootcamp_id.integer' => 'Bootcamp id accepts only integers',
        'stack_id.integer' => 'Stack id accepts only integers'
        ];
}
}
