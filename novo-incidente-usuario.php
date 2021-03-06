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
        <link rel="stylesheet" type="text/css" href="css/mainenduser.css" media="screen">
        <link rel="stylesheet" type="text/css" href="css/novo-incidente.css" media="screen">
    </head>
    <body>
        <main>
            <nav class="navbar navbar-expand-md navbar-custom">
                <a class="navbar-brand" href="index.php">
                    <img src="images/stinfra-logo.png" alt="">
                </a>
                <a class="btn btn-dark ml-auto mr-1" href="mainsupport.html">Meu perfil</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <button class="btn btn-danger" href="#">Encerrar Sesssão</button>
                        </li>
                    </ul>
                </div>
            </nav>
            
            <div class="container-fluid">
                <h3>Novo Incidente</h3>
            </div>

            <form action="usuario.php" method="post">
                <div class="container-fluid">
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nome do Usuário Requerente" name="usuario">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Patrimônio do Computador" name="patrimonio"> 
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="IP do Computador" name="ip"> 
                    </div>
                </div><br>
                <div class="form-row">
                    <div class="col">
                        <select id="local" class="form-control" name="local">
                            <option selected disabled>Local</option>
                            <option value="Centro">Campus Centro</option>
                            <option value="Litoral">Campus Litoral</option>
                            <option value="Saude">Campus da Saúde e Olímpico</option>
                            <option value="Vale">Campus do Vale</option>
                        </select>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Detalhes do Local (Prédio/Sala)" name="detalhes_local">
                    </div>
                </div><br>
                <!--
                <div class="form-row">
                    <div class="col">
                        <select id="prioridade" class="form-control">
                            <option selected disabled>Prioridade do Incidente</option>
                            <option value="Muito Alta">Muito Alta</option>
                            <option value="Alta">Alta</option>
                            <option value="Média">Média</option>
                            <option value="Baixa">Baixa</option>
                        </select>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="IP do Computador"> 
                    </div>
                </div><br>
                -->
                <div class="form-row">
                    <div class="col">
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Descreva seu problema..." name="descricao"></textarea>
                    </div>
                </div><br>
                <div class="text-center">
                    <input type="submit" class="btn btn-success" href="usuario.php" value="Criar" />
                    <a type="submit" class="btn btn-danger" href="usuario.php">Cancelar</a>
                </div>
                </div>             
            </form>            
            
            <footer class="page-footer font-small blue">
                <div class="footer-copyright text-center py-3">© 2020 Copyright:
                    <a href="http://www.ufrgs.br/suinfra/"> ufrgs.br/suinfra/</a>
                </div>
            </footer>
        </main>
    </body>    
</html>