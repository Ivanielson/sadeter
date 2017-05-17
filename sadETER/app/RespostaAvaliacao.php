<?php

namespace sadETER;

use Illuminate\Database\Eloquent\Model;

class RespostaAvaliacao extends Model
{
    protected $table = 'resposta_avaliacao';

    protected $primaryKey = 'codigo';

    public $timestamps = FALSE;

    protected $fillable = array('codigo','resposta1','resposta2','resposta3','resposta4','resposta5','resposta6','resposta7','resposta8',
        'resposta9','resposta10','resposta11','resposta12','resposta13','resposta14','comentario','aluno_codigo','codigo_disciplina_professor');

    public function aluno(){

        return $this->belongsTo('sadETER\Aluno','aluno_codigo');
    }
}
