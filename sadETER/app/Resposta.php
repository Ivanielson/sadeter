<?php

namespace sadETER;

use Illuminate\Database\Eloquent\Model;

class Resposta extends Model
{
    protected $table = 'resposta';

    protected $primaryKey = 'codigo';

    public $timestamps = FALSE;

    protected $fillable = array('codigo', 'conceito', 'comentario', 'aluno_codigo',
    'pergunta_cadastrada_codigo', 'avaliacao_has_turma_codigo', 'codigo_disciplina_has_professor');

    public function aluno(){

        return $this->belongsTo('App\Aluno');
    }

    public function pergunta_cadastrada(){

        return $this->belongsTo('App\Pergunta_Cadastrada');
    }

    public function avaliacao_has_turma(){

        return $this->belongsTo('App\Avaliacao_has_turma');
    }
}
