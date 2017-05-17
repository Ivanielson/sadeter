<?php

namespace sadETER\Http\Requests;

use sadETER\Http\Requests\Request;

class RespostaAvaliacaoRequest extends Request
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
           'aluno_codigo' => 'required|numeric',
           'codigo_disciplina_professor' => 'required|numeric',
        ];
    }

     public function messages()
    {
        return [
            'required' => 'O campo obrigatório não preenchido.',
        ];
    }
}
