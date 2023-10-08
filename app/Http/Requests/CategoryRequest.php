<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => 'required|max:100|string'
        ];
    }
    public function messages()
    {
    return[
        'name.required' => 'Category name is required',
        'name.max' => 'Category name allows only 255 characters',
        'name.string' => 'Category name accepts only strings'
    ];
    }
}
