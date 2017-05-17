<?php

namespace sadETER;

use Illuminate\Database\Eloquent\Model;

class DisciplinaProfessor extends Model
{
    protected $table = 'disciplina_has_professor';

    protected $primaryKey = 'codigo_disciplina_professor';

    public $timestamps = FALSE;

    protected $fillable = array('codigo_disciplina_professor', 'disciplina_codigo','professor_codigo','turma_codigo','periodo','dataInicioAvalicao','dataFimAvalicao');

    public function disciplina(){

        return $this->belongsTo('sadETER\Disciplina','disciplina_codigo');
    }

    public function professores(){

        return $this->belongsTo('sadETER\Professor','professor_codigo');
    }

    public function respostas(){

        return $this->belongsTo('sadETER\RespostaAvaliacao','codigo_disciplina_professor');
    }
}
