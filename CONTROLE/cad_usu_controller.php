<?php

require_once '../DAO/Conexao/Conexao.php';
require_once 'Class.usuario.php';

$cadastrar = new usuario();

$cadastrar->
        Cadastrar(
                $_REQUEST["email"],
                $_REQUEST["usuario"], 
                $_REQUEST["senha"]);
?>