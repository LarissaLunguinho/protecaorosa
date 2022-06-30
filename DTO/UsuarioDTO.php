<?php


class UsuarioDTO {
    //put your code here
    PRIVATE $cod_usuario;
    private $email;
    PRIVATE $usuario;
    private $senha;
    private $dt_ult_acesso;
    
    
    function getCod_usuario() {
        return $this->cod_usuario;
    }

    function getEmail() {
        return $this->email;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getSenha() {
        return $this->senha;
    }

    function getDt_ult_acesso() {
        return $this->dt_ult_acesso;
    }

    function setCod_usuario($cod_usuario) {
        $this->cod_usuario = $cod_usuario;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setDt_ult_acesso($dt_ult_acesso) {
        $this->dt_ult_acesso = $dt_ult_acesso;
    }

    
        
    
    // FIM
}
