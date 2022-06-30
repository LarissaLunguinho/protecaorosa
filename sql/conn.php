<?php

$hostname_conn = "localhost";
$database_conn = "intranet";
$username_conn = "root";
$password_conn = "";

// Conectamos ao nosso servidor MySQL
if (!($conn = mysql_connect($hostname_conn, $username_conn, $password_conn))) {
    echo "Erro ao conectar ao MySQL.";
    exit;
}
// Selecionamos nossa base de dados MySQL
if (!($con = mysql_select_db($database_conn, $conn))) {
    echo "Erro ao selecionar ao MySQL.";
    exit;
}
?>