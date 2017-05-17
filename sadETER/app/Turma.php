<?php

namespace sadETER;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $table = 'turma';

    protected $primaryKey = 'codigo';

    public $timestamps = FALSE;

    protected $fillable = array('codigo','turno', 'periodo','curso_codigo');

    public function alunos(){

        return $this->hasMany('sadETER\Aluno','curso_codigo','codigo');
    }

    public function turma_aval(){

        return $this->hasMany('sadETER\Avaliacao_has_turma');
    }
}
