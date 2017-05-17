<?php

Route::get('/aluno/' ,'AlunoController@aluno');

Route::get('/aluno/avaliacao/{id}', 'AlunoController@avaliar');

Route::post('/aluno/avalResposta', 'AlunoController@respostaAvaliacao');

Route::get('/coordenador', 'CoordenadorController@coordenador');

Route::get('/coordenador/aluno' , 'CoordenadorController@alunoNovo');

Route::post('/coordenador/novo-aluno', 'CoordenadorController@adicionaAluno');

Route::get('/coordenador/professor', 'CoordenadorController@professorNovo');

Route::post('/coordenador/novo-professor', 'CoordenadorController@adicionaProfessor');

Route::get('/coordenador/coordenador', 'CoordenadorController@coordenadorNovo');

Route::post('/coordenador/novo-coordenador', 'CoordenadorController@adicionaCoordenador');

Route::get('/coordenador/turma', 'CoordenadorController@turmaNova');

Route::post('/coordenador/nova-turma','CoordenadorController@adicionaTurma');

Route::get('/coordenador/curso', 'CoordenadorController@cursoNovo');

Route::post('/coordenador/novo-curso', 'CoordenadorController@adicionaCurso');

Route::get('/coordenador/disciplina', 'CoordenadorController@disciplinaNova');

Route::post('/coordenador/nova-disciplina', 'CoordenadorController@adicionaDisciplina');

Route::get('/coordenador/base-professor', 'CoordenadorController@disciplinaProfessorNovo');

Route::post('/coordenador/novo-base-professor', 'CoordenadorController@adicionaBaseProfessor');

Route::get('/professor', 'ProfessorController@relatorio');

Route:: get('/coordenador/lista-professores', 'CoordenadorController@listaProfessor');

Route::get('/coordenador/remove-prof/{id}', 'CoordenadorController@removeProf');

Route::get('/coordenador/detalhe-prof/{id?}', 'CoordenadorController@mostraProf')->where('id', '[0-9]+');

Route::get('/professor/resultAval/{id}', 'ProfessorController@resultAval');

Route::get('/professor/grafico','ProfessorController@listaGrafico');

Route::get('/', 'HomeController@getLogin');
Route::controllers([
'auth' => 'Auth\AuthController',
'password' => 'Auth\PasswordController',
]);

/* Rota para realizar testes de consulta */
Route::get('/consulta', 'AlunoController@consulta');