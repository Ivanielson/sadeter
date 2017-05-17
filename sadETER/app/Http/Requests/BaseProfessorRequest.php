<?php

namespace sadETER\Http\Requests;

use sadETER\Http\Requests\Request;

class BaseProfessorRequest extends Request
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
            'disciplina_codigo' => 'required|max:11|numeric',
            'professor_codigo' => 'required|max:11|numeric',
            'periodo' => 'required|size:6',
            'dataInicioAvalicao' => 'date',
            'dataFimAvalicao' => 'date',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute é obrigatório, ele não pode estar vázio.',
            'size:6' => 'O campo :attribute deve conter 6 caracteres',
        ];
    }
}
