<?php
if (isset($_POST['submit'])) {
    $link = mysqli_connect("localhost", "root", "", "chat_app");

// Check connection
    if ($link === false) {
        die("ERROR: Não pode conectar. "
                . mysqli_connect_error());
    }

// Escape user inputs for security
    $un = mysqli_real_escape_string(
            $link, $_REQUEST['uname']);
    $m = mysqli_real_escape_string(
            $link, $_REQUEST['msg']);
    date_default_timezone_set('America/Sao_Paulo');
    $ts = date('y-m-d h:ia');
    $Perfil = mysqli_real_escape_string(
            $link, $_REQUEST['perfil']);


// Attempt insert query execution
    $sql = "INSERT INTO chats (uname, msg, dt, perfil)
        VALUES ('$un', '$m', '$ts', '$Perfil');";
    if (mysqli_query($link, $sql)) { 
        ;
    } else {
        echo "ERROR: Messagem não enviada!!!";
    }
    // Close connection
    mysqli_close($link);
}
?>
<html>

    <head>
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="icon" type="image/x-icon" href="imagem/rosa-favicon.png">
        <style>
            *{
                box-sizing:border-box;
            }
            .navbar {
                background-color: black;
                box-shadow: 10px 10px 10px 10px #e9967a;
            }

            .logo-menu {
                width: 30%;
                
            }

            .navbar ul {
                margin: 0;
                padding: 0;
                display: flex;
                list-style: none;
                align-items: center;
            }
            .navbar li {
                position: relative;
            }
            .navbar a,
            .navbar a:focus {
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 10px 0 10px 30px;
                font-size: 15px;
                font-weight: bold;
                color: #fff;
                white-space: nowrap;
                transition: 0.3s;
            }
            .navbar a i,
            .navbar a:focus i {
                font-size: 12px;
                line-height: 0;
                margin-left: 5px;
            }
            .navbar a:hover,
            .navbar .active,
            .navbar .active:focus,
            .navbar li:hover > a {
                color: #ffc451;
            }
            .navbar .dropdown ul {
                display: block;
                position: absolute;
                left: 14px;
                top: calc(100% + 30px);
                margin: 0;
                padding: 10px 0;
                z-index: 99;
                opacity: 0;
                visibility: hidden;
                background: #fff;
                box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
                transition: 0.3s;
            }
            .navbar .dropdown ul li {
                min-width: 200px;
            }
            .navbar .dropdown ul a {
                padding: 10px 20px;
                font-size: 14px;
                text-transform: none;
                color: #151515;
                font-weight: 400;
            }
            .navbar .dropdown ul a i {
                font-size: 12px;
            }
            .navbar .dropdown ul a:hover,
            .navbar .dropdown ul .active:hover,
            .navbar .dropdown ul li:hover > a {
                background-color: #ffc451;
            }
            .navbar .dropdown:hover > ul {
                opacity: 1;
                top: 100%;
                visibility: visible;
            }
            .navbar .dropdown .dropdown ul {
                top: 0;
                left: calc(100% - 30px);
                visibility: hidden;
            }
            .navbar .dropdown .dropdown:hover > ul {
                opacity: 1;
                top: 0;
                left: 100%;
                visibility: visible;
            }
            @media (max-width: 1366px) {
                .navbar .dropdown .dropdown ul {
                    left: -90%;
                }
                .navbar .dropdown .dropdown:hover > ul {
                    left: -100%;
                }
            }
            body{
                background: #9152f8;
                background: -webkit-linear-gradient(top, #fd6084, #f7a29e, #f5b04b);
                
            }
            #container{
                width:900px;
                height:650px;
                background:white;
                margin:0 auto;
                font-size:0;
                border-radius:5px;
                overflow:hidden;
            }
            main{
                width:900px;
                height:700px;
                display:inline-block;
                font-size:15px;
                vertical-align:top;
            }
            main header{ /*Fundo atras do titulo chat online*/
                height:100px;
                padding:30px 20px;
                background-color:#FFDEAD; 
            }
            main header > *{
                display:inline-block;
                vertical-align:top;
            }

            main header img{
                width:100px;
            }
            main header div{
                margin-left:90px;
                margin-right:90px;
            }
            main header h2{
                font-size:25px;
                margin-top:5px;
                text-align:center;
                color:#FFFFFF;  
            }
            main .inner_div{
                padding-left:0;
                margin:0;
                list-style-type:none;
                position:relative;
                overflow:auto;
                height:400px;
                background-image:url(imagem/fundochat.jpeg);
                background-position:center;
                background-repeat:no-repeat;
                background-size:cover;
                position: relative;
                border-top:2px solid #fff;
                border-bottom:2px solid #fff;

            }
            main .triangle{
                width: 0;
                height: 0;
                border-style: solid;
                border-width: 0 8px 8px 8px;
                border-color: transparent transparent #58b666 transparent;
                margin-left:20px;
                clear:both;
            }
            main .message{
                padding:10px;
                color:#000;
                margin-left:15px;
                background-color:#58b666;
                line-height:20px;
                max-width:90%;
                display:inline-block;
                text-align:left;
                border-radius:5px;
                clear:both;
            }
            main .triangle1{
                width: 0;
                height: 0;
                border-style: solid;
                border-width: 0 8px 8px 8px;
                border-color: transparent transparent #6fbced transparent;
                margin-right:20px;
                float:right;
                clear:both;
            }
            main .message1{
                padding:10px;
                color:#000;
                margin-right:15px;
                background-color:#6fbced;
                line-height:20px;
                max-width:90%;
                display:inline-block;
                text-align:left;
                border-radius:5px;
                float:right;
                clear:both;
            }

            main footer{ /*fundo atras de onde envia a msg*/
                height:150px;
                padding:20px 30px 10px 20px;
                background-color:#FFDEAD;
            }
            main footer .input1{
                resize:none;
                border:100%;
                display:block;
                width:100%;
                height:55px;
                border-radius:3px;
                padding:20px;
                font-size:13px;
                margin-bottom:13px;
            }
            main footer textarea{
                resize:none;
                border:100%;
                display:block;
                width:100%;
                height:95px;
                border-radius:3px;
                padding:20px;
                font-size:13px;
                margin-bottom:13px;
                margin-left:20px;
            }
            main footer .input2{
                resize:none;
                border:100%;
                display:block;
                width:40%;
                height:55px;
                border-radius:3px;
                padding:20px;
                font-size:13px;
                margin-bottom:13px;
                margin-left:100px;
                color:white;
                text-align:center;
                background-color:black;
                border: 2px solid white; 
            }

            main footer textarea::placeholder{
                color:#ddd;

            }

        </style>
    <body onload="show_func()">
        <header id="header">
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="paginicial.php">HOME</a></li>
                    <li><a class="nav-link scrollto active" href="view/ListaUsuario.php">LISTAR</a></li>
                </ul>
                <img src="imagem/logo2.jpg" alt="logo" class="logo-menu">
            </nav>
            <!-- .navbar -->
        </header><!-- End Header -->
        <br> <div id="container">
            
            <br> 
            <br> 
            <main>
                <header>
                    <img src="imagem/Logo2.png" alt="" >
                    <div>
                        <h2 style='color: black;'>CHAT ONLINE</h2> 
                    </div>
                </header>

                <script>
                    function show_func() 
                    {
                        var element = document.getElementById("chathist");
                        element.scrollTop = element.scrollHeight;
                    }
                </script>

                <form id="myform" action="Group_chat.php" method="POST" >
                    <div class="inner_div" id="chathist">
                        <?php
                        $host = "localhost";
                        $user = "root";
                        $pass = "";
                        $db_name = "chat_app";
                        $con = new mysqli($host, $user, $pass, $db_name);

                        $query = "SELECT * FROM chats";
                        $run = $con->query($query);
                        $i = 0;

                        while ($row = $run->fetch_array()) :
                            if ($i == 0) {
                                $i = 5;
                                $first = $row;
                                ?>
                                <div id="triangle1" class="triangle1"></div>
                                <div id="message1" class="message1">
                                    <span style="color:white; float:right;">
                                        <?php echo $row['msg']; ?></span>
                                    <div>
                                        <span style="color:black; float:left; font-size:10px; clear:both;">
                                            <?php echo $row['uname'] . " - " . $row['perfil']; ?>,
                                            <?php echo $row['dt']; ?>
                                        </span>
                                    </div>
                                </div>
                                <br><br>
                                <?php
                            } else {
                                if ($row['uname'] != $first['uname']) {
                                    ?>
                                    <div id="triangle" class="triangle"></div>
                                    <div id="message" class="message">
                                        <span style="color:white; float:left;">
                                            <?php echo $row['msg']; ?>
                                        </span> <br/>
                                        <div>
                                            <span style="color:black;float:right;
                                                  font-size:10px;clear:both;">
                                                <?php echo $row['uname'] . " - " . $row['perfil']; ?> 
                                                <?php echo $row['dt'];?>
                                            </span>
                                        </div>
                                    </div>
                                    <br/><br/>
                                    <?php
                                } else {
                                    ?>
                                    <div id="triangle1" class="triangle1"></div>
                                    <div id="message1" class="message1">
                                        <span style="color:white;float:right;">
                                            <?php echo $row['msg']; ?>
                                        </span> <br/>
                                        <div>
                                            <span style="color:black;float:left;
                                                  font-size:10px;clear:both;">
                                                  <?php echo $row['uname'];
                                                  ?>
                                                <?php echo $row['dt']; ?>
                                            </span>
                                        </div>
                                    </div>
                                    <br/><br/>
                                    <?php
                                }
                            }
                        endwhile;
                        ?>
                    </div>
                    <footer>
                        <table>
                            <tr>
                            <th>

                                <p>
                                    Perfil:
                                    <select name="perfil">
                                        <option value=""> Perfil </option>
                                        
                                        <?php
                                        require_once 'DAO/PerfilDAO.php';
                                        $PerfilDAO = new PerfilDAO();
                                        $pesquisa = $PerfilDAO->Pesquisar();

                                        foreach ($pesquisa as $p) {

                                        echo " <option value='{$p["descricao"]}'> {$p["descricao"]}</option>";
                                        }
                                        ?>
                                    </select>
                                </p>
                            </th>
                                <th>
                                    <input  class="input1" type="text"
                                            id="uname" name="uname"
                                            placeholder="Usuária">
                                </th>

                                <th>
                                    <textarea id="msg" name="msg" rows='3' cols='50' placeholder="Escreva sua mensagem"></textarea></th>
                            <br>
                            
                            <th>
                                <input class="input2" type="submit"
                                       id="submit" name="submit" value="Enviar">
                            </th>               
                            </tr>
                        </table>               
                    </footer>
                </form>
            </main>   
        </div>

    </body>
</html>