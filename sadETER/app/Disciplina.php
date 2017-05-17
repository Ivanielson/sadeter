<?php namespace sadETER;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    protected $table = 'disciplina';

    protected $primaryKey = 'codigo';

    public $timestamps = FALSE;

    protected $fillable = array('codigo','nome_base', 'modulo','curso_codigo');

    public function professores(){

        return $this->belongsToMany('sadETER\Disciplina', 'disciplina_has_professor', 'disciplina_codigo', 'professor_codigo');
    }

    public function curso(){

        return $this->belongsTo('sadETER\Curso','curso_codigo','codigo');
    }
}
