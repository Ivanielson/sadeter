<?php

namespace sadETER\Http\Requests;

use sadETER\Http\Requests\Request;

class AlunosRequest extends Request
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
            'nome' => 'required|max:200',
			'email' => 'required|max:100',
			'nascimento' => 'required|date',
			'turma_codigo' => 'required|max:11',
			'sexo' => 'required|max:10',
        ];
    }
	
	public function messages()
    {
		return [
		'required' => 'O campo :attribute é obrigatório, ele não pode estar vázio.',
		];
    }
}
