<?php namespace sadETER;

use Illuminate\Database\Eloquent\Model;

class Coordenador extends Model
{
    protected $table = 'coordenador';

    protected $primaryKey = 'codigo';

    public $timestamps = FALSE;

    protected $fillable = array('codigo', 'nome','email', 'nascimento', 'sexo');

    public function cursos(){

        return $this->hasMany('sadETER\Curso', 'coordenador_codigo');
    }
}
