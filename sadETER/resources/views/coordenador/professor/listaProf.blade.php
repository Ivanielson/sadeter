@extends('templates.coordenador')

@section('conteudo')

@if(Auth::user()->tipo != "Coordenador")
    <div class="alert alert-danger">
        <strong> Acesso Negado! </strong> Você não tem permissão de acessar o conteúdo dessa página.
    </div>
@else
    <h1 class="h1" > Lista de Professores </h1>

    <table class="table table-striped table-bordered table-hover">
		<tr>
			<td><b> Professor </b></td>
			<td><b> Detalhar </b></td>
			<td><b> Remover </b></td>
		</tr>
		@foreach ($professor as $p)
			<tr>
				<td>{{$p->nome}}</td>
				<td> <a href="{{action('CoordenadorController@mostraProf', $p->codigo)}}"> <span class="glyphicon glyphicon-search"></span> </a> </td>
				<td> <a href="{{action('CoordenadorController@removeProf', $p->codigo)}}"> <span class="glyphicon glyphicon-trash"></span> </a>	</td>
			</tr>
		@endforeach
	</table>
@endif
@stop