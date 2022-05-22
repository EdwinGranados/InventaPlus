<?php

class cliente {
    private $idCliente ;
    private $nombreCliente;
    private $NIT;
    private $correo;
    private $telefono;
    private $dirección;

    function __construct(){
    }
    
    function getIdCliente(){
        return $this->idCliente;
    }

    function getNombreCliente(){
        return $this->nombreCliente;
    }

    function getNIT(){
        return $this->NIT;
    }

    function getCorreo(){
        return $this->correo;
    }

    function getTelefono(){
        return $this->telefono;
    }

    
    function getDirección(){
        return $this->dirección;
    }

    function setIdCliente($idCliente){
        return $this->idCliente = $idCliente;
    }

    function setNombreCliente($nombreCliente){
        return $this->nombreCliente = $nombreCliente;
    }

    function setNIT($NIT){
        return $this->NIT = $NIT;
    }

    function setCorreo($Correo){
        return $this->Correo = $Correo;
    }

    function setTelefono($telefono){
        return $this->telefono = $telefono;
    }

    function setDirección($dirección){
        return $this->dirección = $dirección;
    }

}



?>