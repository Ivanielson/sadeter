@extends('templates.coordenador')

@section('conteudo')

@if(Auth::user()->tipo != "Coordenador")
    <div class="alert alert-danger">
        <strong> Acesso Negado! </strong> Você não tem permissão de acessar o conteúdo dessa página.
    </div>
@else

    <h1> Cadastrar Professor </h1>

    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{action('CoordenadorController@adicionaProfessor')}}" method="POST">
        <div class="form-group">

            <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

            <label> Nome </label>
            <input name="nome" class="form-control" value="{{old('nome')}}">
        </div>

        <div class="form-group">
            <label> E-Mail </label>
            <input name="email" class="form-control" value="{{old('email')}}">
        </div>

        <div class="form-group">
            <label> Data de Nascimento </label>
            <input type="date" name="nascimento" class="form-control" value="{{old('nascimento')}}">
        </div>

        <div class="form-group">
            <label class="radio-inline">
                <input type="radio" name="sexo" id="inlineRadio1" value="Masculino" checked> Masculino
            </label>

            <label class="radio-inline">
                <input type="radio" name="sexo" id="inlineRadio2" value="Feminino"> Feminino
            </label>
        </div>

        <button type="submit" class="btn btn-primary btn-block"> Cadastrar </button>
    </form>
    
@endif
@stop