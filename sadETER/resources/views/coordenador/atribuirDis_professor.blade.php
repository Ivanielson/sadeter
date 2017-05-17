@extends('templates.coordenador')

@section('conteudo')

@if(Auth::user()->tipo != "Coordenador")
    <div class="alert alert-danger">
        <strong> Acesso Negado! </strong> Você não tem permissão de acessar o conteúdo dessa página.
    </div>
@else

    <h1> Atribuir Disciplna ao Professor </h1>

    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{action('CoordenadorController@adicionaBaseProfessor')}}" method="POST">
        <div class="form-group">

            <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
        </div>

        <label>Disciplina</label>
        <select name="disciplina_codigo" class="form-control" >
            <option> Selecione a Disciplina </option>
            @foreach($disciplina as $d)
                <option value="{{$d->codigo}}">{{$d->nome_base. " &ndash; Módulo ".$d->modulo. " &ndash; ".$d->curso->nome}}</option>
            @endforeach
        </select><br>

        <label>Professor</label>
        <select name="professor_codigo" class="form-control" >
            <option> Selecione o Professor </option>
            @foreach($professor as $p)
                <option value="{{$p->codigo}}">{{$p->nome}}</option>
            @endforeach
        </select><br>

        <label>Turma</label>
        <select name="turma_codigo" class="form-control" >
            <option> Selecione a Turma </option>
            @foreach($curso as $c)
             @foreach($c->turmas as $t)
                 <option value="{{$t->codigo}}">{{$c->nome . " &ndash; ".$t->turno. " &ndash; ".$t->periodo}}</option>
               @endforeach
            @endforeach
        </select><br>

        <div class="form-group">
            <label> Periodo </label>
            <input name="periodo" class="form-control" value="{{old('periodo')}}">
        </div>

        <div class="form-group">
        <label> Data de Inicio para Avaliação </label>
        <input type="date" name="dataInicioAvaliacao" class="form-control" value="{{old('dataInicioAvaliacao')}}">
        </div>

        <div class="form-group">
            <label> Data de Fim para Avaliação </label>
            <input type="date" name="dataFimAvaliacao" class="form-control" value="{{old('dataFimAvaliacao')}}">
        </div>

        <button type="submit" class="btn btn-primary btn-block"> Salvar <span class="glyphicon glyphicon-floppy-disk"></span> </button>

    </form>

@endif
@stop