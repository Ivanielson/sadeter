@extends('templates.professor')

@section('conteudo')
@if(Auth::user()->tipo != "Professor")
    <div class="alert alert-danger">
        <strong> Acesso Negado! </strong> Você não tem permissão de acessar o conteúdo dessa página.
    </div>
@else
    <table class="table table-hover table-bordered table-condensed">
        <caption>Lista de Professores e suas Bases</caption>
        <thead>
            <tr>
                <th>Professor(a)</th>
                <th> Relatório </th>
            </tr>
        </thead>

        <tbody>
        @foreach($res as $p)
        	<tr>
        		<td>{{ $p->professores->nome. " &ndash; ".$p->disciplina->nome_base. " &ndash; Módulo ".$p->disciplina->modulo }}</td>
        		<td> <a href="{{action('ProfessorController@resultAval', $p->codigo_disciplina_professor)}}"> <span class="glyphicon glyphicon-eye-open"></span> </a></td>
        	</tr>
        @endforeach
        </tbody>
	</table>
@endif
@stop