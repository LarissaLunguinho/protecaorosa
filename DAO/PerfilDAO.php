<?php
require_once 'Conexao/Conexao.php';

class PerfilDAO {
    //put your code here
    
     public function Pesquisar() {
        $pdo = Conexao::getInstance();
        $sql = "select * from perfil";
        $execucao = $pdo->prepare($sql);
        $execucao->execute();
        $resultado = "";
        $resultado = $execucao->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }
}
