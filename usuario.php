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
        <link rel="stylesheet" type="text/css" href="css/mainenduser.css" media="screen">
    </head>
    <body>
        <main>
            <nav class="navbar navbar-expand-md navbar-custom">
                <a class="navbar-brand" href="index.php">
                    <img src="images/stinfra-logo.png" alt="">
                </a>
                
                <a class="btn btn-success ml-auto mr-1" href="novo-incidente-usuario.php">Reportar Novo Incidente</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="btn btn-dark ml-auto mr-1" href="perfil.html">Meu perfil</a>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-danger" href="#">Encerrar Sesssão</button>
                        </li>
                    </ul>
                </div>
            </nav>
            
            <div class="container-fluid">
                <h7>Bem vindo, </h7>
                <h6>usuario@stinfra.ufrgs.br</h6>
            </div>
            
            <div class="table-responsive-sm table-hover">
                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>Status</th>
                        <th>Descrição</th>
                        <th>Local</th>
                    </thead>
                    <!-- HARDCODED PRA VISUALIZAÇÃO -->
                    <td colspan="8" class="text-center">Você não possui nenhum incidente aberto no momento</td>
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