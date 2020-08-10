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
        <link rel="stylesheet" type="text/css" href="css/login.css" media="screen">
    </head>
    <body>
        <div class="sidenav" style="background-image: url(images/stinfra-logon.png)">    
            <div class="login-main-text">
                <img src="images/suinfra.logo.png">
            </div>
        </div>
        <div class="main">
            <div class="col-md-4 col-sm-12">
                <div class="login-form">
                    <!-- LÓGICA DO LOGIN PARA DEFINIR SE É USUÁRIO OU SUPORTE -->
                    <form action="#" method="get">
                    <!-- LÓGICA DO LOGIN PARA DEFINIR SE É USUÁRIO OU SUPORTE -->
                        <div class="form-group">
                            <label>Nome de Usuário</label>
                            <input type="text" class="form-control" placeholder="Nome de Usuário">
                        </div>
                        <div class="form-group">
                            <label>Senha</label>
                            <input type="password" class="form-control" placeholder="Senha">
                        </div>
                        <div class="container-fluid">
                            <a type="submit" class="btn btn-black" href="usuario.php">Entrar</a>
                            <a type="submit" class="btn btn-success" href="suporte.php">Acessar usando AD</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>