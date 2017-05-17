@extends('templates.coordenador')

@section('conteudo')

@if(Auth::user()->tipo != "Coordenador")
    <div class="alert alert-danger">
        <strong> Acesso Negado! </strong> Você não tem permissão de acessar o conteúdo dessa página.
    </div>
@else
<div class="span8">
	<figure class="html5">
		<center><img src="img/equipe.jpg" class="img-rounded img-responsive"></center>
		<figcaption> <p> Equipe Sad - ETER: Ivanielson Cabral, André Francisco, Edson Silva, Celso Ramos, Saulo Artur e Francisco Anderson. </p></figcaption>
	</figure>
</div>

<div class="span8">
	<blockquote class="pull-right">
		<p class="well"><em>O Sad - ETER — Sistema de Avaliação de Docentes - ETER — tem como objetivo possibilitar o 
		processo de avaliação de docente da ETER, que poderá ser feito pelos discentes durante 
		o período disponibilizado pelo coordenador de cada curso. Com a inserção do 
		Sad - ETER, a avaliação poderá ser feita em qualquer lugar e horário e o professor terá 
		acesso em tempo real aos resultados. Dessa forma os professores poderão rever os 
		métodos e melhorar as práticas de ensino.</em></p>
		<small> Equipe: <cite> SadETER </cite></small>
	</blockquote>
</div>


@endif
@stop