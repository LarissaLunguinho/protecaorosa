<?php
ob_start();
date_default_timezone_set('America/Sao_Paulo'); //hora local correta
include_once("../chat/config.php");
include_once("../chat/funcao.php");
include_once("../webcomplomentes.php");

if (isset($_GET['sair'])) {
    setcookie("usuario", "valor", time() - 3600);
  //  setcookie("cor_preferida", "valor", time() - 3600);
    setcookie("dt_ult_acesso", "valor", time() - 3600);
    setcookie("destino", "Todos", time() - 3600);
    $dt_ult_acesso = date("Y/m/d H:m:s");
    //mysql_query("INSERT INTO conversas VALUES ('', 'Sistema','todos', 'O usuario $_COOKIE[usuario] deixou o chat!','" . date("Y-m-d H:i") . "', '" . time() . "')");
}

if (isset($_POST['entrar'])) {
    $usuario = AntiSql($_POST['usuario']);
    $senha = ($_POST['senha']);

    if (empty($usuario)) {
        Alertar("O campo USUARIO não pode ficar em Branco", 0);
        exit;
    }
    if (empty($senha)) {
        Alertar("O campo SENHA não pode ficar em Branco", 0);
        exit;
    }
   // $cor = AntiSql($_POST['cor']);
   // if ($cor == "azul") {
   //     $cor = "#0000ff";
   // } elseif ($cor == "vermelho") {
   //     $cor = "#ff0000";
   // } elseif ($cor == "preto") {
   //     $cor = "000000";

    $sql = mysql_query("SELECT *,date_format(dt_ult_acesso,'%d/%m/%Y %H:%m:%s')as DTFORMAT FROM usuario WHERE usuario='$usuario' AND senha='$senha' ");

    $cont = mysql_num_rows($sql);
    $reSql = mysql_fetch_assoc($sql);
    $dt_ult_acesso = date("Y/m/d H:m:s");
    if ($cont == 0) {
        echo "Seus dados não foram localizados. tente novamente. ";
    } else if ($cont == 1) {
        setcookie("usuario", ucfirst($usuario));
       // setcookie("cor_preferida", $cor);
        setcookie("dt_ult_acesso", $reSql['DTFORMAT']);
        setcookie("destino", "Todos");
        mysql_query("INSERT INTO conversas VALUES ('', 'Sistema', 'todos', 'O usuario $usuario acabou de entrar','" . date("Y-m-d H:i") . "', '" . time() . "')");
        mysql_query("UPDATE usuario SET dt_ult_acesso='$dt_ult_acesso' where usuario='$usuario' ");
        echo "<script> location.href='../../Group_chat.php'; </script>";
    } else {
        echo "Ocorreu algum erro inesperado, tente novamente mais tarde";
    }
  }



if (!isset($_COOKIE['usuario'])) {
    ?>

<head>
	<title>LOGIN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="../imagem/rosa-favicon.png">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" href="../css/pag_inicial.css">
<!--===============================================================================================-->
</head>
    <style>
body::-webkit-scrollbar {
    width: 18px;               /* width of the entire scrollbar */
}

body::-webkit-scrollbar-track {
    background: #f1788c;        /* color of the tracking area */
}

body::-webkit-scrollbar-thumb {
  background-color: black;    /* color of the scroll thumb */
  border-radius: 20px;       /* roundness of the scroll thumb */
  border: 3px solid #d63384;  /* creates padding around scroll thumb */
}
    </style>
    <header id="header">
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="../paginicial.php">HOME</a></li>
                    <li><a class="nav-link scrollto" href="../atendimento.php">ATENDIMENTOS</a></li>
                    <li><a class="nav-link scrollto" href="../Group_chat.php">CHAT</a></li>
                    <li class="dropdown"><a href="../paginicial.html"><span>CADASTRAR</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="../cadastroanjo.php" target="_blank">ANJO</a></li>
                            <li><a href="../cadastrovitima.php" target="_blank">VÍTIMA</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="login/login.php"><span>LOGIN</span> <i class="bi bi-chevron-down"></i></a>
                      <!--  <ul>
                            <li><a href="../chat/esqueci_senha.php" target="_blank">Recuperar Senha</a></li>
                        </ul> -->
                    </li>
                </ul>
                <img src="../imagem/logo2.jpg" alt="logo" class="logo-menu">
            </nav>
            <!-- .navbar -->
    </header><!-- End Header -->
        <div class="fundo" style="background-image: url('../imagem/fundo.jpg'); "><!-- FOTO DE FUNDO-->
            <div class="limiter">
                <form action='../Group_chat.php' method='post'>
                    <div class="container-login100"> 
			<div class="wrap-login100">
                            <!--  	<form class="login100-form validate-form">-->
					<span class="login100-form-title p-b-34 p-t-27"> LOGIN 	</span>
                                        <br>
                                        <span class="login100-form-logo">
                                            <img src="images/Logo2.png" width=180 height=100>
					</span>

					

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
                                            <input class="input100" type="text" name="username" placeholder="Usuário">
                                            <span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
                                            <input class="input100" type="password" name="pass" placeholder="Senha">
                                            <span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
                                        
					<div class="container-login100-form-btn">
					<button class="login100-form-btn"> Entrar </button>
					</div>
                                        <br>
					<div class="text-center p-t-90">
                                            <a class="btn btn-dark btn-sm" href="../chat/esqueci_senha.php"> Esqueceu a senha? </a>
                                            <a class="btn btn-secondary btn-sm text-light" href="../cadastrovitima.php"> Quero me Cadastrar </a>
					</div>
				
			</div>
                    </div> <!-- con</form>tainer-login100 -->
            </form>
        </div>
    </div>

	<div id="dropDownSelect1"></div>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
    <?php
} else {
   echo "<script runat=”server”> Response.Redirect('../Group_chat.php'); </script>";
}
 ?>