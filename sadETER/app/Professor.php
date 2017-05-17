<?php namespace sadETER;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $table = 'professor';

    protected $primaryKey = 'codigo';

    public $timestamps = FALSE;

    protected $fillable = array('codigo', 'nome','email', 'nascimento', 'sexo');

    public function disciplina(){

        return $this->belongsToMany('sadETER\Disciplina', 'disciplina_has_professor', 'professor_codigo', 'disciplina_codigo');
    }
}
