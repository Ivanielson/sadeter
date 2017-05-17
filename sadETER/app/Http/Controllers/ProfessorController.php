<?php namespace sadETER\Http\Controllers;

use sadETER\Http\Requests;
use sadETER\RespostaAvaliacao;
use sadETER\DisciplinaProfessor;
use sadETER\Professor;
use Auth;
use Session;
use DB;

class ProfessorController extends Controller
{

	/* Função para Armazenar dados do usuário em uma sessão */
	public function __construct(){

    $this->middleware('minha-middleware',
        ['only' => ['relatorio','resultAval']]);

		$professor = Professor::where('email' ,'=', Auth::user()->email)->get();
		Session::put('user',$professor);
	}


   public function relatorio(){

    $resposta = DisciplinaProfessor::with('professores')->with('disciplina')->get();

    return view('professor.relatorio')->with('res', $resposta);
   }

   public function resultAval($id){

   	$resultAval = RespostaAvaliacao::where('codigo_disciplina_professor', '=' , $id)->get();

    $consulta = array('Contextualiza o conteúdo com os aspectos profissionais e/ou sociais?' => DB::table('resposta_avaliacao')
    ->select(DB::raw("count(*) as quantidade, resposta1 "))
    ->where('codigo_disciplina_professor', '=', $id)
    ->groupBy('resposta1')
    ->get(),
    
    'Reforça ou reformula as explicações que aluno não entende?' => DB::table('resposta_avaliacao')
    ->select(DB::raw("count(*) as quantidade, resposta2 "))
    ->where('codigo_disciplina_professor', '=', $id)
    ->groupBy('resposta2')
    ->get(),
    
    'Responde as perguntas dos alunos?' => DB::table('resposta_avaliacao')
    ->select(DB::raw("count(*) as quantidade, resposta3 "))
    ->where('codigo_disciplina_professor', '=', $id)
    ->groupBy('resposta3')
    ->get(),
    
    'Estabelece relações entre teoria e prática?' => DB::table('resposta_avaliacao')
    ->select(DB::raw("count(*) as quantidade, resposta4 "))
    ->where('codigo_disciplina_professor', '=', $id)
    ->groupBy('resposta4')
    ->get(),

    'Expõe o assunto de forma clara facilitaando a aprendizagem?(Postura,forma de transmitir o conteúdo)' => DB::table('resposta_avaliacao')
    ->select(DB::raw("count(*) as quantidade, resposta5 "))
    ->where('codigo_disciplina_professor', '=', $id)
    ->groupBy('resposta5')
    ->get(),

    'Incentiva a participação do aluno através de atividades práticas?' => DB::table('resposta_avaliacao')
    ->select(DB::raw("count(*) as quantidade, resposta6 "))
    ->where('codigo_disciplina_professor', '=', $id)
    ->groupBy('resposta6')
    ->get(),

    'Utiliza materiais de apoio que facilitam a compreenção das aulas(Recursos multimídia, textos, slids)?' => DB::table('resposta_avaliacao')
    ->select(DB::raw("count(*) as quantidade, resposta7 "))
    ->where('codigo_disciplina_professor', '=', $id)
    ->groupBy('resposta7')
    ->get(),

    'Mantém o controle de classe para o bom desenvolvimento das aulas?' => DB::table('resposta_avaliacao')
    ->select(DB::raw("count(*) as quantidade, resposta8 "))
    ->where('codigo_disciplina_professor', '=', $id)
    ->groupBy('resposta8')
    ->get(),

    'O professor permanece em sala durante a aula?' => DB::table('resposta_avaliacao')
    ->select(DB::raw("count(*) as quantidade, resposta9 "))
    ->where('codigo_disciplina_professor', '=', $id)
    ->groupBy('resposta9')
    ->get(),

    'Estabelece previamente a forma de avaliação dos conteúdos?(análise do plano de aula)' => DB::table('resposta_avaliacao')
    ->select(DB::raw("count(*) as quantidade, resposta10 "))
    ->where('codigo_disciplina_professor', '=', $id)
    ->groupBy('resposta10')
    ->get(),

    'Fronece resultados das avaliações esclarecendo as dúvidas?' => DB::table('resposta_avaliacao')
    ->select(DB::raw("count(*) as quantidade, resposta11 "))
    ->where('codigo_disciplina_professor', '=', $id)
    ->groupBy('resposta11')
    ->get(),

    'Proporciona o retrabalho de conteúdos ao longo do módulo?' => DB::table('resposta_avaliacao')
    ->select(DB::raw("count(*) as quantidade, resposta12 "))
    ->where('codigo_disciplina_professor', '=', $id)
    ->groupBy('resposta12')
    ->get(),

    'Trata os alunos com respeito?' => DB::table('resposta_avaliacao')
    ->select(DB::raw("count(*) as quantidade, resposta13 "))
    ->where('codigo_disciplina_professor', '=', $id)
    ->groupBy('resposta13')
    ->get(),

    'Mantém a calma, mesmo em situações de conflito?' => DB::table('resposta_avaliacao')
    ->select(DB::raw("count(*) as quantidade, resposta14 "))
    ->where('codigo_disciplina_professor', '=', $id)
    ->groupBy('resposta14')
    ->get(),
    );

    $grafico = json_encode($consulta);

   	return view('professor.grafico')->with('result', $resultAval)->with('consulta', $consulta)->with('grafico', $grafico);
   }

  public function listaGrafico(){

    return view('grafico_avaliacao');
  }
}
