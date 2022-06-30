<?php
include_once './webcomplomentes.php';
require_once '../DTO/UsuarioDTO.php';
require_once '../DAO/UsuarioDAO.php';

$id = $_GET["id"];
//echo $id;
$UsuarioDTO = New UsuarioDTO;
$UsuarioDTO ->setCod_usuario($id);

$UsuarioDAO = New UsuarioDAO;
$Pesquisa = $UsuarioDAO ->PesquisarUsuario($UsuarioDTO);
//var_dump($Pesquisa);
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Alterar Usuario </title>
    </head>
    <body style="background-color: palegoldenrod">
        <div class="container">
            <center>
                <div class="card" style="width: 400px; margin-top: 40px">
                    <img class="card-img-top" src="../Imagens/helpdesk.jpg">
                    <form name="AlterarUsuario" method="post" action="../CONTROLE/AlterarUsuarioController.php">
                        <h1> Alterar Usuario </h1> 
                        <p> <input type="text" name="cod_usuario" value="<?php echo $Pesquisa["cod_usuario"] ?>" placeholder="Código" ></p>
                       
                        <p> <input type = "email" name="email" value =" <?php echo $Pesquisa["email"]?> " placeholder="E-mail"></p>
                         <p> <input type = "text" name="usuario" value =" <?php echo $Pesquisa["usuario"]?> " placeholder="Usuario"></p>
                        <p> <input type = "password" name="senha" value ="" placeholder="Senha"></p>
                     
                        
                        
                        <button type="submit" class="btn btn-primary">Gravar</button>
                    </form>
                </div>        
        </div>   
    </center>
    <?php
// put your code here
    ?>
</body>
</html>
