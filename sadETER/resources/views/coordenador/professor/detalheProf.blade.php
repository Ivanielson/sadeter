@extends('templates.coordenador')

@section('conteudo')

@if(Auth::user()->tipo != "Coordenador")
    <div class="alert alert-danger">
        <strong> Acesso Negado! </strong> Você não tem permissão de acessar o conteúdo dessa página.
    </div>
@else

<h1>Professor(a): <?= $p->nome ?> </h1>
	<ul>
		<li>
			<b>Email:</b> {{ $p->email }}
		</li>
		<li>
			<b>Data de Nascimento:</b> {{date('d/m/Y',  strtotime($p->nascimento)) }}
		</li>
		<li>
			<b>Sexo:</b> {{ $p->sexo }}
		</li>
	</ul>

@endif
@stop