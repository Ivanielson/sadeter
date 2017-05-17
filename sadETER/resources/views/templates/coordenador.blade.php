@if(Auth::user()->tipo != "Coordenador")
    <div class="alert alert-danger">
        <strong> Acesso Negado! </strong> Você não tem permissão de acessar o conteúdo dessa página.
    </div>
@else
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Sad - ETER"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link href="/css/app.css" rel="stylesheet">
		<link href="/css/custom.css" rel="stylesheet">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<title>Sad - ETER</title>
	</head>
	<body>
		<div class="container">
			<nav class="navbar navbar-default">
		<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="/coordenador">
				Coordenação
			</a>

		</nav>
			<div class="row">
				<div class="col-sm-3">
					<div class="sidebar-nav">
						<div class="navbar navbar-default" role="navigation">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<span class="visible-xs navbar-brand">Sidebar menu</span>
							</div>
							<div class="navbar-collapse collapse sidebar-navbar-collapse">
								<ul class="nav navbar-nav">
									<li class="active"><a href="/coordenador"> <span class="glyphicon glyphicon-home"></span> Inicio</a></li>
									<li><a href="/coordenador/aluno"> <span class="glyphicon glyphicon-user"></span> Cadastrar Aluno</a></li>
									<li><a href="/coordenador/professor"> <span class="glyphicon glyphicon-user"></span> Cadastrar Professor</a></li>
									<li><a href="/coordenador/coordenador"> <span class="glyphicon glyphicon-user"></span> Cadastrar Coordenador</a></li>
									<li><a href="/coordenador/turma"> <span class="glyphicon glyphicon-plus"></span> Adicionar Turma</a></li>
									<li><a href="/coordenador/disciplina"> <span class="glyphicon glyphicon-plus"></span> Adicionar Bases </a></li>
									<li><a href="/coordenador/base-professor"> <span class="glyphicon glyphicon-resize-small"></span> Atribuir Base a Um Professor </a></li>
									<li><a href="/coordenador/curso"> <span class="glyphicon glyphicon-plus"></span> adicionar Curso </a></li>
									<li><a href="/coordenador/lista-professores"> <span class="glyphicon glyphicon-education"></span> Professores </a></li>
									<li><a href="/auth/logout"> <span class="glyphicon glyphicon-log-out"> Sair</a></li>
								</ul>
							</div><!--/.nav-collapse -->
						</div>
					</div>
				</div>
				<div class="col-sm-9">
					@yield('conteudo')
				</div>
			</div>
		<footer class="footer">
			<p>&copy; Todos os direitos reservado Equipe sadETER - Sistema de Avaliação de Docentes-ETER. Projeto Integrador.</p>
		</footer>
		</div>
	</body>
</html>
@endif