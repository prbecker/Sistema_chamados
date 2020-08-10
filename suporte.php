<?php 
    require_once("config.php");

    if(isset($_POST["local"]))
    {
        $stmt = $conn->prepare("INSERT INTO sistema_chamados(usuario, patrimonio, ip, local, detalhes,descricao) VALUES(?, ?, ?, ?, ?, ?)");
    
        $stmt->bind_param("ssssss", $usuario, $patrimonio, $ip, $local, $detalhes_local, $descricao);
        $usuario = $_POST["usuario"];
        $patrimonio = $_POST["patrimonio"];
        $ip = $_POST["ip"];
        $local = $_POST["local"];
        $detalhes_local = $_POST["detalhes_local"];
        $descricao = $_POST["descricao"];

        $stmt->execute();
    }
?>

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
    </head>
    <body>
        <main>
            <nav class="navbar navbar-expand-md navbar-custom">
                <a class="navbar-brand" href="index.php">
                    <img src="images/stinfra-logo.png" alt="">
                </a>    
                <a class="btn btn-success ml-auto mr-1" href="pesquisa.html">Pesquisa de Soluções</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="novo-incidente-suporte.html">Criar Incidente</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="perfil">Meu Perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-danger" href="#">Encerrar Sesssão</a>
                        </li>
                    </ul>
                </div>
            </nav>
            
            <div class="container-fluid">
                <h7>Bem vindo, </h7>
                <h6>suporte@stinfra.ufrgs.br</h6>
            </div>
            
            <div class="table-responsive-sm table-hover">
                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>Status</th>
                        <th>Prioridade</th>
                        <th>Descrição</th>
                        <th>Local</th>
                        <th>Usuário</th>
                        <th>Analista</th>
                        <th>Patrimônio</th>
                    </thead>
                    <!-- HARDCODED PRA VISUALIZAÇÃO -->
                    <tr>
                        <td><a href="andamento-incidente-suporte.html">00001522020</a></td>
                        <td>Novo</td>
                        <td>Muito Alta</td>
                        <td>Computador não liga mais</td>
                        <td>Campus do Vale</td>
                        <td>Antônio Antunes</td>
                        <td></td>
                        <td>150.184.182-00</td>
                    </tr>
                    <tr>
                        <td><a href="#.html">00001532020</a></td>
                        <td>Em andamento</td>
                        <td>Alta</td>
                        <td>PC está extremamente lento e acusando vírus</td>
                        <td>Campus do Centro</td>
                        <td>Célia Barbosa</td>
                        <td>Maurício Silva</td>
                        <td>123.432.751-52</td>
                    </tr>
                    <tr>
                        <td><a href="#.html">00001542020</a></td>
                        <td>Em andamento</td>
                        <td>Média</td>
                        <td>A impressora não imprime mais</td>
                        <td>Campus do Centro</td>
                        <td>Daniel Oliveira</td>
                        <td>Lucas Farias</td>
                        <td>684.268.842-87</td>
                    </tr>
                    <tr>
                        <td><a href="#.html">00001552020</a></td>
                        <td>Em andamento</td>
                        <td>Baixa</td>
                        <td>O Word não está abrindo</td>
                        <td>Reitoria</td>
                        <td>Pedro Ramos</td>
                        <td>Lucas Farias</td>
                        <td>213.751.584-23</td>
                    </tr>
                    
                    <!-- HARDCODED PRA VISUALIZAÇÃO -->
                </table>
            </div>
            
            <footer class="page-footer font-small blue">
                <div class="footer-copyright text-center py-3">© 2020 Copyright:
                    <a href="http://www.ufrgs.br/suinfra/"> ufrgs.br/suinfra/</a>
                </div>
            </footer>
        </main>
    </body>    
</html>