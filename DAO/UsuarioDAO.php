<?php

require_once 'Conexao/Conexao.php';
class UsuarioDAO {

    //put your code here

     public function Gravar(UsuarioDTO $UsuarioDTO) {
        $pdo = Conexao::getInstance();
        $sql = "insert into usuario ( email, usuario, senha, dt_ult_acesso) values(?,?,?,?)";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $UsuarioDTO->getEmail());
        $execucao->bindValue(2, $UsuarioDTO->getUsuario());
        $execucao->bindValue(3, $UsuarioDTO->getSenha());
        $execucao->bindValue(4, $UsuarioDTO->getDt_ult_acesso());
        
        return $execucao->execute();
    }


   public function Pesquisar() {
        $pdo = Conexao::getInstance();
        $sql = "select * from usuario";
        $execucao = $pdo->prepare($sql);
        $execucao->execute();
        $resultado = "";
        $resultado = $execucao->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }

    public function PesquisarUsuario(UsuarioDTO $UsuarioDTO) {
        $pdo = Conexao::getInstance();
        $sql = "select * from usuario where cod_usuario = ?;";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $UsuarioDTO->getCod_usuario());
        $execucao->execute();
        $resultado = "";
        $resultado = $execucao->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }

    public function Apagar(UsuarioDTO $UsuarioDTO) {
        $pdo = Conexao::getInstance();
        $sql = "delete from usuario where cod_usuario=?;";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $UsuarioDTO->getCod_usuario());
       

        return $execucao->execute();
    }

    public function Alterar(UsuarioDTO $UsuarioDTO) {
        $pdo = Conexao::getInstance();
        $sql = "update usuario set  email=?, usuario=?, senha=? where Cod_usuario=?;";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $UsuarioDTO->getEmail());
        $execucao->bindValue(2, $UsuarioDTO->getUsuario());
        $execucao->bindValue(3, $UsuarioDTO->getSenha());
        $execucao->bindValue(4, $UsuarioDTO->getCod_usuario());
        
        return $execucao->execute();
    }

    //fim
}
