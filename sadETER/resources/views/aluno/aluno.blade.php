@extends('templates.aluno')

@section('conteudo')
@if(Auth::user()->tipo != "Aluno")
    <div class="alert alert-danger">
        <strong> Acesso Negado! </strong> Você não tem permissão de acessar o conteúdo dessa página.
    </div>
@else
<h3> Olá {{Auth::user()->name."," }} <strong> Seja Bem-Vindo!</strong></h3>
    <h1 class="h1" > Avaliar Docentes </h1>

    <table class="table table-striped table-bordered table-hover">
		<tr>
			<td><b> Professor </b></td>
			<td><b> Avaliação </b></td>
		</tr>
		@foreach ($consulta as $p)
			<tr>
				<td>{{ $p->nome}}</td>
				<td> <a href="{{action('AlunoController@avaliar', $p->codigo)}}"> <span class="glyphicon glyphicon-pencil"></span> </a>	</td>
			</tr>
		@endforeach
	</table>
@endif
@stop