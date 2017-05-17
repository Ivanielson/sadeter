<?php

namespace sadETER\Http\Requests;

use sadETER\Http\Requests\Request;

class CursoRequest extends Request
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
            'nome' => 'required|max:50',
            'coordenador_codigo' => 'required|max:11|numeric',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute � obrigat�rio, ele n�o pode estar v�zio.',
        ];
    }
}
