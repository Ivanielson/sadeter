@extends('templates.aluno')

@section('conteudo')

@if(Auth::user()->tipo != "Aluno")
    <div class="alert alert-danger">
        <strong> Acesso Negado! </strong> Você não tem permissão de acessar o conteúdo dessa página.
    </div>
@else

    <h1> Avaliar </h1>
   
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{action('AlunoController@respostaAvaliacao')}}" method="POST">
        <div class="form-group">

            <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

        </div>

            <div class="form-group">
                @foreach($aluno as $a)
                <label> Código do Aluno </label>
                <input name="aluno_codigo" type="number" class="form-control" value="{{$a->codigo}}">
                @endforeach
            </div>

            <label>Base</label>
            <select name="codigo_disciplina_professor" class="form-control" >
                <option> Selecione uma Base </option>
                @foreach($consulta as $c)
                <option value="{{$c->codigo_disciplina_professor}}">{{$c->disciplina->nome_base}}</option>
                @endforeach
            </select><br><br>

            <div class="form-group">
                <label><b> 1. Conteúdo: refere-se ao conhecimento do conteúdo que o professor revela em suas aulas. </b></label><br>
                <label> 1.1 - Contextualiza o conteúdo com os aspectos profissionais e/ou sociais? </label><br>
                <label class="radio-inline">
                    <input type="radio" name="resposta1" id="inlineRadio1" value="Sim" checked> Sim
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta1" id="inlineRadio2" value="Não"> Não
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta1" id="inlineRadio2" value="Quase Sempre"> Quase Sempre
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta1" id="inlineRadio2" value="Algumas Vezes"> Algumas Vezes
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta1" id="inlineRadio2" value="Raramente"> Raramente
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta1" id="inlineRadio2" value="Nunca"> Nunca
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta1" id="inlineRadio2" value="Precisa Melhorar"> Precisa Melhorar
                </label>
            </div>

            <div class="form-group">
                <label> 1.2 - Reforça ou reformula as explicações que aluno não entende? </label><br>
                <label class="radio-inline">
                    <input type="radio" name="resposta2" id="inlineRadio1" value="Sim" checked> Sim
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta2" id="inlineRadio2" value="Não"> Não
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta2" id="inlineRadio2" value="Quase Sempre"> Quase Sempre
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta2" id="inlineRadio2" value="Algumas Vezes"> Algumas Vezes
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta2" id="inlineRadio2" value="Raramente"> Raramente
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta2" id="inlineRadio2" value="Nunca"> Nunca
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta2" id="inlineRadio2" value="Precisa Melhorar"> Precisa Melhorar
                </label>
            </div>


            <div class="form-group">
                <label> 1.3 - Responde as perguntas dos alunos? </label><br>
                <label class="radio-inline">
                    <input type="radio" name="resposta3" id="inlineRadio1" value="Sim" checked> Sim
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta3" id="inlineRadio2" value="Não"> Não
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta3" id="inlineRadio2" value="Quase Sempre"> Quase Sempre
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta3" id="inlineRadio2" value="Algumas Vezes"> Algumas Vezes
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta3" id="inlineRadio2" value="Raramente"> Raramente
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta3" id="inlineRadio2" value="Nunca"> Nunca
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta3" id="inlineRadio2" value="Precisa Melhorar"> Precisa Melhorar
                </label>
            </div>

            <div class="form-group">
                <label> 1.4 - Estabelece relações entre teoria e prática? </label><br>
                <label class="radio-inline">
                    <input type="radio" name="resposta4" id="inlineRadio1" value="Sim" checked> Sim
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta4" id="inlineRadio2" value="Não"> Não
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta4" id="inlineRadio2" value="Quase Sempre"> Quase Sempre
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta4" id="inlineRadio2" value="Algumas Vezes"> Algumas Vezes
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta4" id="inlineRadio2" value="Raramente"> Raramente
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta4" id="inlineRadio2" value="Nunca"> Nunca
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta4" id="inlineRadio2" value="Precisa Melhorar"> Precisa Melhorar
                </label>
            </div><br> <br>

            <div class="form-group">
                <label><b> 2. Didática: refere-se ao comportamento do professor em sala de aula, sua maneira de agir, os recursos, e as técnicas que utiliza para facilitar a aprendizagem. </b></label><br>
                <label> 2.1 - Expõe o assunto de forma clara facilitando a aprendizagem?(Postura,forma de transmitir o conteúdo) </label><br>
                <label class="radio-inline">
                    <input type="radio" name="resposta5" id="inlineRadio1" value="Sim" checked> Sim
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta5" id="inlineRadio2" value="Não"> Não
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta5" id="inlineRadio2" value="Quase Sempre"> Quase Sempre
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta5" id="inlineRadio2" value="Algumas Vezes"> Algumas Vezes
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta5" id="inlineRadio2" value="Raramente"> Raramente
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta5" id="inlineRadio2" value="Nunca"> Nunca
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta5" id="inlineRadio2" value="Precisa Melhorar"> Precisa Melhorar
                </label>
            </div>

            <div class="form-group">
                <label> 2.2 - Incentiva a participação do aluno através de atividades práticas? </label><br>
                <label class="radio-inline">
                    <input type="radio" name="resposta6" id="inlineRadio1" value="Sim" checked> Sim
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta6" id="inlineRadio2" value="Não"> Não
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta6" id="inlineRadio2" value="Quase Sempre"> Quase Sempre
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta6" id="inlineRadio2" value="Algumas Vezes"> Algumas Vezes
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta6" id="inlineRadio2" value="Raramente"> Raramente
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta6" id="inlineRadio2" value="Nunca"> Nunca
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta6" id="inlineRadio2" value="Precisa Melhorar"> Precisa Melhorar
                </label>
            </div>

            <div class="form-group">
                <label> 2.3 - Utiliza materiais de apoio que facilitam a compreenção das aulas(Recursos multimídia, textos, slids)? </label><br>
                <label class="radio-inline">
                    <input type="radio" name="resposta7" id="inlineRadio1" value="Sim" checked> Sim
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta7" id="inlineRadio2" value="Não"> Não
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta7" id="inlineRadio2" value="Quase Sempre"> Quase Sempre
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta7" id="inlineRadio2" value="Algumas Vezes"> Algumas Vezes
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta7" id="inlineRadio2" value="Raramente"> Raramente
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta7" id="inlineRadio2" value="Nunca"> Nunca
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta7" id="inlineRadio2" value="Precisa Melhorar"> Precisa Melhorar
                </label>
            </div>

            <div class="form-group">
                <label> 2.4 - Mantém o controle de classe para o bom desenvolvimento das aulas? </label><br>
                <label class="radio-inline">
                    <input type="radio" name="resposta8" id="inlineRadio1" value="Sim" checked> Sim
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta8" id="inlineRadio2" value="Não"> Não
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta8" id="inlineRadio2" value="Quase Sempre"> Quase Sempre
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta8" id="inlineRadio2" value="Algumas Vezes"> Algumas Vezes
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta8" id="inlineRadio2" value="Raramente"> Raramente
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta8" id="inlineRadio2" value="Nunca"> Nunca
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta8" id="inlineRadio2" value="Precisa Melhorar"> Precisa Melhorar
                </label>
            </div>

            <div class="form-group">
                <label> 2.5 - O professor permanece em sala durante a aula? </label><br>
                <label class="radio-inline">
                    <input type="radio" name="resposta9" id="inlineRadio1" value="Sim" checked> Sim
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta9" id="inlineRadio2" value="Não"> Não
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta9" id="inlineRadio2" value="Quase Sempre"> Quase Sempre
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta9" id="inlineRadio2" value="Algumas Vezes"> Algumas Vezes
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta9" id="inlineRadio2" value="Raramente"> Raramente
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta9" id="inlineRadio2" value="Nunca"> Nunca
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta9" id="inlineRadio2" value="Precisa Melhorar"> Precisa Melhorar
                </label>
            </div><br> <br>

            <div class="form-group">
                <label><b> 3. Planejamento/Avaliação: refere-se ao cumprimento, distribuição dos conteúdos ea forma como foram avaliadas. </b></label><br>
                <label> 3.1 - Estabelece previamente a forma de avaliação dos conteúdos?(análise do plano de aula) </label><br>
                <label class="radio-inline">
                    <input type="radio" name="resposta10" id="inlineRadio1" value="Sim" checked> Sim
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta10" id="inlineRadio2" value="Não"> Não
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta10" id="inlineRadio2" value="Quase Sempre"> Quase Sempre
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta10" id="inlineRadio2" value="Algumas Vezes"> Algumas Vezes
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta10" id="inlineRadio2" value="Raramente"> Raramente
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta10" id="inlineRadio2" value="Nunca"> Nunca
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta10" id="inlineRadio2" value="Precisa Melhorar"> Precisa Melhorar
                </label>
            </div>

            <div class="form-group">
                <label> 3.2 - Fornece resultados das avaliações esclarecendo as dúvidas? </label><br>
                <label class="radio-inline">
                    <input type="radio" name="resposta11" id="inlineRadio1" value="Sim" checked> Sim
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta11" id="inlineRadio2" value="Não"> Não
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta11" id="inlineRadio2" value="Quase Sempre"> Quase Sempre
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta11" id="inlineRadio2" value="Algumas Vezes"> Algumas Vezes
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta11" id="inlineRadio2" value="Raramente"> Raramente
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta11" id="inlineRadio2" value="Nunca"> Nunca
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta11" id="inlineRadio2" value="Precisa Melhorar"> Precisa Melhorar
                </label>
            </div>

            <div class="form-group">
                <label> 3.3 - Proporciona o retrabalho de conteúdos ao longo do módulo? </label><br>
                <label class="radio-inline">
                    <input type="radio" name="resposta12" id="inlineRadio1" value="Sim" checked> Sim
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta12" id="inlineRadio2" value="Não"> Não
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta12" id="inlineRadio2" value="Quase Sempre"> Quase Sempre
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta12" id="inlineRadio2" value="Algumas Vezes"> Algumas Vezes
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta12" id="inlineRadio2" value="Raramente"> Raramente
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta12" id="inlineRadio2" value="Nunca"> Nunca
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta12" id="inlineRadio2" value="Precisa Melhorar"> Precisa Melhorar
                </label>
            </div><br> <br>

            <div class="form-group">
                <label><b> 4. Relacionamento: refere-se a froma como o professor se relaciona com os alunos dentro e fora da sala de aula. </b></label><br>
                <label> 4.1 - Trata os alunos com respeito? </label><br>
                <label class="radio-inline">
                    <input type="radio" name="resposta13" id="inlineRadio1" value="Sim" checked> Sim
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta13" id="inlineRadio2" value="Não"> Não
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta13" id="inlineRadio2" value="Quase Sempre"> Quase Sempre
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta13" id="inlineRadio2" value="Algumas Vezes"> Algumas Vezes
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta13" id="inlineRadio2" value="Raramente"> Raramente
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta13" id="inlineRadio2" value="Nunca"> Nunca
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta13" id="inlineRadio2" value="Precisa Melhorar"> Precisa Melhorar
                </label>
            </div>

            <div class="form-group">
                <label> 4.2 - Mantém a calma, mesmo em situações de conflito? </label><br>
                <label class="radio-inline">
                    <input type="radio" name="resposta14" id="inlineRadio1" value="Sim" checked> Sim
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta14" id="inlineRadio2" value="Não"> Não
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta14" id="inlineRadio2" value="Quase Sempre"> Quase Sempre
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta14" id="inlineRadio2" value="Algumas Vezes"> Algumas Vezes
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta14" id="inlineRadio2" value="Raramente"> Raramente
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta14" id="inlineRadio2" value="Nunca"> Nunca
                </label>

                <label class="radio-inline">
                    <input type="radio" name="resposta14" id="inlineRadio2" value="Precisa Melhorar"> Precisa Melhorar
                </label>
            </div><br> <br>

            <div class="form-group">
                <label> Comentário </label>
                <textarea class="form-control" rows="3" name="comentario" value="{{old('comentario')}}" ></textarea>
            </div>

        <button type="submit" class="btn btn-primary btn-block"> Salvar <span class="glyphicon glyphicon-floppy-disk"></span> </button>
    </form>
    
@endif

@stop