<?php

class EmoticonsDAO {

    //put your code here


    public function Gravar(EmoticonsDTO $EmoticonsDTO) {

        $pdo = Conexao::getInstance();
        $sql = "insert into Profissional (cod_emoticon, caminho, atalho, flg_ativo) values(?,?,?,?);";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $EmoticonsDTO->getCod_emoticon());
        $execucao->bindValue(2, $EmoticonsDTO->getCaminho());
        $execucao->bindValue(3, $EmoticonsDTO->getAtalho());
        $execucao->bindValue(4, $EmoticonsDTO->getFlg_ativo());
       
        return $execucao->execute();
    }

    public function Pesquisar() {
        $pdo = Conexao::getInstance();
        $sql = "select * from Emoticons as U, perfil p where u.idperfil = p.idperfil;";
        $execucao = $pdo->prepare($sql);
        $execucao->execute();
        $resultado = "";
        $resultado = $execucao->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }

    public function PesquisarEmoticons(EmoticonsDTO $EmoticonsDTO) {
        $pdo = Conexao::getInstance();
        $sql = "select * from Emoticons where idPerfil = ?;";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $EmoticonsDTO->getCod_emoticon());
        $execucao->execute();
        $resultado = "";
        $resultado = $execucao->fech(PDO::FETCH_ASSOC);
        return $resultado;
    }

    public function Apagar(EmoticonsDTO $EmoticonsDTO) {
        $pdo = Conexao::getInstance();
        $sql = "delete from Emoticons where idPerfil  =?;";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $EmoticonsDTO->getCod_emoticon());
        $execucao->bindValue(2, $EmoticonsDTO->getCaminho());
        $execucao->bindValue(3, $EmoticonsDTO->getAtalho());
        $execucao->bindValue(4, $EmoticonsDTO->getFlg_ativo());
       
        return $execucao->execute();
    }

    

    //fim
}
