<?php

namespace sadETER\Http\Requests;

use sadETER\Http\Requests\Request;

class TurmaRequest extends Request
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
            'turno' => 'required|max:45',
            'periodo' => 'required|size:6',
            'curso_codigo' => 'required|max:11|numeric',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute � obrigat�rio, ele n�o pode estar v�zio.',
            'size:6' => 'O campo :attribute deve conter 6 caracteres',
        ];
    }
}
