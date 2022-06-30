<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/pag_inicial.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
        <link rel="icon" type="image/png" href="imagem/rosa-favicon.png">
        <title>PINK PROTECTION</title>
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
    <body>
        <header id="header">
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="paginicial.php">HOME</a></li>
                    <li><a class="nav-link scrollto" href="atendimento.php">ATENDIMENTOS</a></li>
                    <li><a class="nav-link scrollto" href="login/login.php">CHAT</a></li>
                    <li class="dropdown"><a href="paginicial.php"><span>CADASTRAR</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="cadastroanjo.php" target="_blank">ANJO</a></li>
                            <li><a href="cadastrovitima.php" target="_blank">VÍTIMA</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="login/login.php"><span>LOGIN</span> <i class="bi bi-chevron-down"></i></a>
                       <!-- <ul>
                            <li><a href="chat/esqueci_senha.php" target="_blank">Recuperar Senha</a></li>
                        </ul>-->
                    </li>
                </ul>
                <img src="imagem/logo2.jpg" alt="logo" class="logo-menu">
            </nav>
            <!-- .navbar -->
        </header><!-- End Header 
        <div id="myNav" class="overlay">
           <div class="overlay-content">
                <img src="imagem/templater7.png" width=100%; heigth=100%;>
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            </div>
        </div>-->
        <div class="vitima">
            <br>

            <br>
            <h2 style="text-align: center">  Nenhuma mulher deve se sentir sozinha </h2> 
           <!-- <span style="cursor:pointer; float: right;" onclick="openNav()">
                <img src="imagem/rosaicon.png" width=60px; heigth=60px;>    </span> 

            <span style="float: right;">
                <img src="imagem/info2.png" width=160px; heigth=160px;> </span>   -->
            <br>
            <div class="container" style="text-align: center"> 
                <b>  Por isso mobilizamos e ajudamos de forma voluntária á 
                    <br> orientar e acolher todas que necessitam. 
                    <br>Violência fisíca e psicológia não deve se tornar sua rotina.
                    <br>Tenha atendimento especializado ou para uma amiga virtual

                    <br><br>
                    <h4 style=" text-decoration: underline;">Totalmente de graça.</h4></b>

                <img class="rosas" src="imagem/Logo2.png" width=200 height=120> 
                <br>
                <br>
                <a href="cadastrovitima.php">
                    <button class="button">PRECISO DE AJUDA</button> </a>
            </div>
            <br><br>
        </div>

        <div class="anjo">
            <br>
            <div class="card">
                <div class="container">
                    <p style="font-size: 14px;"> 
                        <br>  <img src="imagem/michelle.png" alt="Michelle Obama" style="width: 56%; float:right;">
                        "Fracassar é parte <br>crucial do sucesso.<br> <br>
                        Toda vez que você<br> fracassa e se recupera, <br>
                        exercita perseverança <br>que é a chave da vida. <br><br>
                        Sua força está na <br>habilidade de se <br>recompor." <br>

                        <b style="font-size:18px;">MICHELLE OBAMA</b>
                    </p>
                </div>
            </div>

            <h1 style="font-family: Lucida Bright, Georgia, serif;
                color: #ffcd2c;
                text-shadow: 3px 3px 3px #ababab;
                text-align: center;
                font-size: 52px;
                font-weight: bold;"> SEJA VOLUNTÁRIA!</h1>

            <center>
                <p style="font-family: Georgia, Times, Times New Roman, serif;
                   -moz-text-align-last: center;
                   font-size: 25px;
                   text-align: center;">
                    <b> Você terapeuta, psicológa, agente/assistente social e advogada<br>
                        Tem gente precisando dos seus conselhos! <br>
                        Se junte a nossa causa<br><br>
                        Estamos esperando seu cadastro
                        <br></b>
                    ps.: aceitamos somente mulheres.
                </p> 
                <a href="cadastroanjo.php">
                    <button class="button"> QUERO AJUDAR </button> </a>
            </center>

            <img src="imagem/blablaa.png" width=250 height=250 style="position: absolute; left:100px;" />
            <br>
            <br><br>
            <br><br>
            <br><br>
        </div>
        <script>
            function openNav() {
                document.getElementById("myNav").style.width = "100%";
            }

            function closeNav() {
                document.getElementById("myNav").style.width = "0%";
            }
        </script>
        <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    </body>

</html>