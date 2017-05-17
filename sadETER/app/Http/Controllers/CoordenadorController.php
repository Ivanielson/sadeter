<?php namespace sadETER\Http\Controllers;

use sadETER\Avaliacao;
use sadETER\Coordenador;
use sadETER\Disciplina;
use sadETER\Http\Requests\AvaliacaoRequest;
use sadETER\Http\Requests\CursoRequest;
use sadETER\Http\Requests\DisciplinaRequest;
use sadETER\Turma;
use sadETER\Aluno;
use sadETER\Curso;
use sadETER\Professor;
use sadETER\DisciplinaProfessor;
use Request;
use Form;
use sadETER\Http\Requests\AlunosRequest;
use sadETER\Http\Requests\CoordenadorRequest;
use sadETER\Http\Requests\ProfessorRequest;
use sadETER\Http\Requests\TurmaRequest;
use sadETER\Http\Requests\BaseProfessorRequest;
use sadETER\RespostaAvaliacao;
use Auth;
use Session;

class CoordenadorController extends Controller
{

    /* Função para Armazenar dados do usuário em uma sessão */
    public function __construct(){

        $this->middleware('minha-middleware',
        ['only' => ['Coordenador','alunoNovo','adicionaAluno','professorNovo','adicionaProfessor','coordenadorNovo',
        'adicionaCoordenador','turmaNova','adicionaTurma','cursoNovo','adicionaCurso','disciplinaNova','adicionaDisciplina',
        'disciplinaProfessorNovo','adicionaBaseProfessor','listaProfessor','removeProf','mostraProf']]);

        $coordenador = Coordenador::where('email' ,'=', Auth::user()->email)->get();
        Session::put("user",$coordenador);
    }

    public function coordenador(){

        return view('coordenador.coordenador');
    }

    public function alunoNovo(){

        $curso = Curso::with('turmas')->get();

        return view('coordenador.cadastro.cadastro_aluno')->with('curso', $curso);
    }

    public function adicionaAluno(AlunosRequest $request){

        Aluno::create($request->all());

        return view('coordenador.cadastro.cadastrado')
            ->withInput(Request::only('nome'));

    }

    public function professorNovo(){

        return view('coordenador.cadastro.cadastro_professor');
    }

    public function adicionaProfessor(ProfessorRequest $request){

        Professor::create($request->all());

        return view('coordenador.cadastro.cadastrado')
            ->withInput(Request::only('nome'));
    }

    public function coordenadorNovo(){

        return view('coordenador.cadastro.cadastro_coordenador');
    }

    public function adicionaCoordenador(CoordenadorRequest $request){

        Coordenador::create($request->all());

        return view('coordenador.cadastro.cadastrado')
            ->withInput(Request::only('nome'));
    }

    public function turmaNova(){

        $curso = Curso::all();

        return view('coordenador.turma.cadastro_turma')->with('curso', $curso);
    }

    public function adicionaTurma(TurmaRequest $request){

        Turma::create($request->all());

        return redirect()
            ->action('CoordenadorController@turmaNova')
            ->withInput(Request::only('nome'));
    }

    public function cursoNovo(){

        $coordenador = Coordenador::all();

        return view('coordenador.turma.cadastra_curso')->with('coordenador', $coordenador);
    }

    public function adicionaCurso(CursoRequest $request){

        Curso::create($request->all());

        return redirect()
            ->action('CoordenadorController@cursoNovo')
            ->withInput(Request::only('nome'));
    }

    public function disciplinaNova(){

        $curso = Curso::all();
        return view('coordenador.turma.cadastrar_disciplina')->with('curso',$curso);
    }

    public function adicionaDisciplina(DisciplinaRequest $request){

        Disciplina::create($request->all());

        return redirect()
            ->action('CoordenadorController@disciplinaNova')
            ->withInput(Request::only('nome_base'));
    }

    public function disciplinaProfessorNovo(){

        $disciplina = Disciplina::with('curso')->get();
        $professor = Professor::all();
        $curso = Curso::with('turmas')->get();
        return view('coordenador.atribuirDis_professor')->with('disciplina', $disciplina)
        ->with('professor', $professor)
        ->with('curso', $curso);

    }

    public function adicionaBaseProfessor(BaseProfessorRequest $request){

        DisciplinaProfessor::create($request->all());

        return redirect()
            ->action('CoordenadorController@disciplinaProfessorNovo');
    }

    public function listaProfessor(){

        $professores = Professor::all();

        return view('coordenador.professor.listaProf')->with('professor', $professores);
    }

    public function removeProf($id){

        $professor = Professor::find($id);
        $professor->delete();

        return redirect()->action('CoordenadorController@listaProfessor');
    }

    public function mostraProf($id){

        $professor = Professor::find($id);

        if(empty($professor)){
            return 'Não Existem professores cadastrados';
        }
        return view('coordenador.professor.detalheProf')->with('p',$professor);
    }
}
