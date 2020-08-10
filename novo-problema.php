<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>STINFRA</title>
        <meta charset="utf-8">
        <meta name="generator" content="Brackets">
        <meta name="description" content="STINFRA">
        <meta name="application-name" content="SCS STINFRA">
        <meta http-equiv="refresh" content="300">
        
        <link href="css/bootstrap.min.css" rel="stylesheet">        
        <link rel="stylesheet" type="text/css" href="css/index.css" media="screen">
        <link rel="stylesheet" type="text/css" href="css/pesquisa.css" media="screen">
        <link rel="stylesheet" type="text/css" href="css/novo-incidente.css" media="screen">
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <main>
            <nav class="navbar navbar-expand-md navbar-custom">
                <a class="navbar-brand" href="index.php">
                    <img src="images/stinfra-logo.png" alt="">
                </a>
                
                <a class="btn btn-success ml-auto mr-1" href="suporte.html">Sistema de Chamado</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="btn btn-danger" href="#">Encerrar Sesssão</a>
                        </li>
                    </ul>
                </div>
            </nav>
            
            <div class="container-fluid">
                <h3>Novo Problema</h3>
            </div>
            
            <div class="container-fluid">
                <div class="form-row">
                    <div class="col">
                        <select id="categoria" class="form-control">
                            <option selected disabled>Categoria do Problema</option>
                            <option value="Hardware">Hardware</option>
                            <option value="Rede">Rede</option>
                            <option value="Software">Software</option>
                        </select>
                    </div>
                </div><br>
                <div class="form-row">
                    <div class="col">
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Descreva seu problema..."></textarea>
                    </div>
                </div><br>                
                <div class="text-center">
                    <a type="submit" class="btn btn-success" href="pesquisa.html">Criar</a>
                    <a type="submit" class="btn btn-danger" href="pesquisa.html">Cancelar</a>
                </div>                
            </div>
            
            <footer class="page-footer font-small blue">
                <div class="footer-copyright text-center py-3">© 2020 Copyright:
                    <a href="http://www.ufrgs.br/suinfra/"> ufrgs.br/suinfra/</a>
                </div>
            </footer>
            
            <footer class="page-footer font-small blue">
                <div class="footer-copyright text-center py-3">© 2020 Copyright:
                    <a href="http://www.ufrgs.br/suinfra/"> ufrgs.br/suinfra/</a>
                </div>
            </footer>
        </main>
    </body>    
</html>