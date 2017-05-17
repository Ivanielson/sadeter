@extends('templates.coordenador')

@section('conteudo')

@if(Auth::user()->tipo != "Coordenador")
    <div class="alert alert-danger">
        <strong> Acesso Negado! </strong> Você não tem permissão de acessar o conteúdo dessa página.
    </div>
@else

    <h1> Cadastrar Turma </h1>

    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{action('CoordenadorController@adicionaTurma')}}" method="POST">
        <div class="form-group">

            <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
        </div>

        <label>Turno</label>
        <select name="turno" class="form-control" >
            <option> Selecione o Turno </option>
            <option value="Manhã"> Manhã </option>
            <option value="Tarde"> Tarde </option>
            <option value="Noite"> Noite </option>
        </select>

        <div class="form-group">
            <label> Periodo </label>
            <input name="periodo" class="form-control" value="{{old('periodo')}}">
        </div>

        <label>Curso</label>
        <select name="curso_codigo" class="form-control" >
            <option> Selecione o Curso </option>
            @foreach($curso as $c)
                <option value="{{$c->codigo}}">{{$c->nome}}</option>
            @endforeach
        </select>
        <br>
        <button type="submit" class="btn btn-primary btn-block"> Cadastrar </button>
    </form>

@endif
@stop