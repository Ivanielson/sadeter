@extends('templates.coordenador')

@section('conteudo')

@if(Auth::user()->tipo != "Coordenador")
    <div class="alert alert-danger">
        <strong> Acesso Negado! </strong> Você não tem permissão de acessar o conteúdo dessa página.
    </div>
@else

    <h1> Cadastrar Curso </h1>

    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{action('CoordenadorController@adicionaCurso')}}" method="POST">
        <div class="form-group">

            <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

            <label> Nome </label>
            <input name="nome" class="form-control" value="{{old('nome')}}">
        </div>

        <label>Coordenador</label>
        <select name="coordenador_codigo" class="form-control" >
            <option> Selecione o Coordenador </option>
            @foreach($coordenador as $c)
                <option value="{{$c->codigo}}">{{$c->nome}}</option>
            @endforeach
        </select>

        <br>
        <button type="submit" class="btn btn-primary btn-block"> Cadastrar </button>

    </form>
@endif
@stop