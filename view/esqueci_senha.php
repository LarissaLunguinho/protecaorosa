<?php
include_once("config.php");
include_once("../controle/Class.usuario.php");
include_once("../webcomplomentes.php");


if (isset($_POST['enviar'])) {
    $Resetar = new Usuario;
    $Resetar->EsqueciSenha($_POST['usuario'], $_POST['email']);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="../imagem/rosa-favicon.png">
        <link rel="stylesheet" href="../css/recuperar.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-grid.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
        <title>Recuperar senha</title>
    </head>
    <style>
        body{       
            background-image: url(../imagem/fundo.jpg);  }
    </style>
    <body>
        <header id="header">
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="../paginicial.php">HOME</a></li>
                    <li><a class="nav-link scrollto" href="../atendimento.php">ATENDIMENTOS</a></li>
                    <li><a class="nav-link scrollto" href="chat/index.php">CHAT</a></li>
                    <li class="dropdown"><a href="../paginicial.php"><span>CADASTRAR</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="../cadastroanjo.php" target="_blank">ANJO</a></li>
                            <li><a href="../cadastrovitima.php" target="_blank">VÍTIMA</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="../login/login.php"><span>LOGIN</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="esqueci_senha.php" target="_blank">Recuperar Senha</a></li>
                        </ul>
                    </li>
                </ul>
                <img src="../imagem/logo2.jpg" alt="logo" class="logo-menu">
            </nav>
            <!-- .navbar -->
        </header><!-- End Header -->
    <br>    
    <br>    
    <br>    
    <center>
        <div class="container"> 
                <div class="card bg-light text-dark" style=" width: 500px;">
                    <div class="card-body">
                        <form action='esqueci_senha.php' method='post'>
                            <table align='center'>
                                <br>
                                <h3>Esqueceu a Senha</h3>
                                <tr>
                                    <td><b>Digite o seu Email: </b></td> 
                                    <td><input type='text' name='email' id='email' class="form-control"><td>
                                </tr>
                                <tr>
                                    <td><b>Digite o seu Usuario: </b></td>
                                    <td><input type='text' name='usuario' id='usuario' class="form-control"><td>
                                </tr>
                                <br>
                                <tr>
                                    <td><b>Confirmar? </b></td>
                                    <td>
                                 <br>       
                                    <button type="submit" class="btn btn-primary" name='enviar' id='enviar'>Sim !</button>
                                   <td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
        </div>
            </center>
    </body>
</html>