@if(Auth::user()->tipo != "Professor")
    <div class="alert alert-danger">
        <strong> Acesso Negado! </strong> Você não tem permissão de acessar o conteúdo dessa página.
    </div>
@else

<html>
<head>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <script type="text/javascript" src="/js/jsapi.js"></script>  
    <meta charset="UTF-8">
    <title>Sad - ETER</title>
</head>
    <body>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/professor">
                        Resulta das Avaliações
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
                                <li class="active"><a href="/professor"> <span class="glyphicon glyphicon-home"></span> Inicio</a></li>
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