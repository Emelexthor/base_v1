<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClasseRequest extends FormRequest
{
    /**
     * Determina se o usuário está autorizado.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Regras de validação.
     */
    public function rules(): array
    {
        return [
            'course_id' => 'required|exists:courses,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
        ];
    }

    /**
     * Mensagens personalizadas.
     */
    public function messages(): array
    {
        return [
            'course_id.required' => 'O curso é obrigatório.',
            'course_id.exists' => 'O curso informado não existe.',

            'name.required' => 'O nome da aula é obrigatório.',
            'name.max' => 'O nome da aula pode ter no máximo 255 caracteres.',

            'description.max' => 'A descrição pode ter no máximo 1000 caracteres.',
        ];
    }
}
