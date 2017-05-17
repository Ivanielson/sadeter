<?php namespace sadETER\Http\Controllers;

use sadETER\Aluno;
use sadETER\Curso;
use sadETER\Professor;
use sadETER\RespostaAvaliacao;
use sadETER\DisciplinaProfessor;
use sadETER\Http\Requests\RespostaAvaliacaoRequest;
use DB;
use Auth;
use Session;

class AlunoController extends Controller{

	public function __construct(){

		$this->middleware('minha-middleware',
        ['only' => ['aluno','avaliar','respostaAvaliacao']]);

		$aluno = Aluno::where('email' ,'=', Auth::user()->email)->get();
		session::put('user',$aluno);
	}

	public function aluno(){

		$consulta = Professor::all();
		
		return view('aluno.aluno')->with('consulta', $consulta);


	}

	public function avaliar($id){

		$consulta = DisciplinaProfessor::where('professor_codigo', '=', $id)->with('disciplina')->get();

        $aluno = Aluno::where('email', '=', Auth::user()->email)->get();

		return view('aluno.aval')->with('consulta', $consulta)->with('aluno', $aluno);
	}

	public function respostaAvaliacao(RespostaAvaliacaoRequest $resquest){

		RespostaAvaliacao::create($resquest->all());

		return redirect()
		->action('AlunoController@aluno');

	}

	public function consulta(){

		/*$aluno = Aluno::where('email' ,'=', Auth::user()->email)->get();
		$consulta = Session::put('user',$aluno);*/
		
		$consulta = Aluno::where('email', '=', Auth::user()->email)->get();


		return $consulta;
	}

}