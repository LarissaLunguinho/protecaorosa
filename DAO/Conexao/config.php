<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "chat";

// Conectamos ao nosso servidor MySQL
if (!($conn = new mysqli($host, $usuario, $senha, $banco))) {
    echo "Erro ao conectar ao MySQL.";
    exit;
}
// Selecionamos nossa base de dados MySQL
//if (!($con = mysql_select_db($banco, $conn))) {
//    echo "Erro ao selecionar ao MySQL.";
//    exit;
//}
//class
//TEMPO PARA REFRESH DO IFRAME
$Tempo = 5;
$Refresh = $Tempo * 1000;

class Config {

    function __construct() {
        
    }

    function BoasVindas() {
        echo "Olá <b>$_COOKIE[usuario] | Seu ultimo acesso foi em: $_COOKIE[dt_ult_acesso]</b>";
    }

}
?>
    

