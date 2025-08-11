<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => 'required|string|max:256',
            'description' => 'nullable|string|max:256'
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Название не может быть пустым',
            'title.max'      => 'Название не должно превышать 256 символов',
            'description.max'=> 'Описание не должно превышать 256 символов',
        ];
    }
}
