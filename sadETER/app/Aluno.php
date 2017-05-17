<?php namespace sadETER;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Aluno extends Model
{
    protected $table = 'aluno';

    protected $primaryKey = 'codigo';

    public $timestamps = FALSE;

    protected $fillable = array('codigo','nome','email', 'nascimento', 'turma_codigo', 'sexo');


    public function res_aval(){

        return $this->hasMany('sadETER\Aluno', 'aluno_codigo', 'codigo');
    }

    public function turma(){

    	return $this->belongsTo('sadETER\Turma','turma_codigo');
    }
}
