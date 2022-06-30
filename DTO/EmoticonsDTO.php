<?php

class EmoticonsDTO {

    //put your code here
    private $cod_emoticon;
    private $caminho;
    private $flg_ativo;
    private $atalho;

    function getCod_emoticon() {
        return $this->cod_emoticon;
    }

    function getCaminho() {
        return $this->caminho;
    }

    function getFlg_ativo() {
        return $this->flg_ativo;
    }
    
    function getAtalho() {
        return $this->atalho;
    }

    function setCod_emoticon($cod_emoticon) {
        $this->cod_emoticon = $cod_emoticon;
    }
    function setCaminho($caminho) {
        $this->caminho = $caminho;
    }
    function setFlg_ativo($flg_ativo) {
        $this->flg_ativo = $flg_ativo;
    }
    function setAtalho($atalho) {
        $this->atalho = $atalho;
    }
    
    
//fim
}
