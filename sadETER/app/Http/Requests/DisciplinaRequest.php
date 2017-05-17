<?php

namespace sadETER\Http\Requests;

use sadETER\Http\Requests\Request;

class DisciplinaRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome_base' => 'required|max:60',
            'modulo' => 'required|max:11|numeric',
            'curso_codigo' => 'required|max:11|numeric',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute é obrigatório, ele não pode estar vázio.',
        ];
    }
}
