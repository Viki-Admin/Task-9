<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommetRequest extends FormRequest
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
            'name_comments' => 'required|min:3|max:255',
			'discription' => 'required|min:3|max:255',
        ];
    }
}
