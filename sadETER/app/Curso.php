<?php

namespace sadETER;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'curso';

    protected $primaryKey = 'codigo';

    public $timestamps = FALSE;

    protected $fillable = array('codigo','nome', 'coordenador_codigo');

    public function turmas(){

        return $this->hasMany('sadETER\Turma', 'curso_codigo');
    }

    public function disciplina(){

        return $this->hasMany('sadETER\Disciplina', 'curso_codigo', 'codigo');
    }

    public function coordenador(){

        return $this->belongsTo('sadETER\Coordenador', 'coordenador_codigo');
    }
}
