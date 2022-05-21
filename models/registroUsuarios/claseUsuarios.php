<?php

class usuario {
    private $idUsuario;
    private $usuario;
    private $contraseña;
    private $estado;

    function __construct(){
    }

    
    function getIdUsuario(){
        return $this->idUsuario;
    }

    function getUsuario(){
        return $this->Usuario;
    }

    function getContraseña(){
        return $this->Contraseña;
    }

    function getEstado(){
        return $this->Activo;
    }

    function setIdUsuario($idUsuario){
        return $this->idUsuario = $idUsuario;
    }

    function setUsuario($usuario){
        return $this->Usuario = $usuario;
    }

    function setContraseña($contraseña){
        return $this->Contraseña = $contraseña;
    }

    function setEstado($estado){
        return $this->Activo = $estado;
    }
}