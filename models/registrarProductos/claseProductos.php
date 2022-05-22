<?php

class producto {
    private $idProducto;
    private $nombreProducto;
    private $descripcion;
    private $valor;
    private $cantidad;

    function __construct(){
    }

    
    function getIdProducto(){
        return $this->idProducto;
    }

    function getNombreProducto(){
        return $this->nombreProducto;
    }

    function getDescripcion(){
        return $this->descripcion;
    }

    function getValor(){
        return $this->valor;
    }

    function getCantidad(){
        return $this->cantidad;
    }

    function setIdProducto($idProducto){
        return $this->idProducto = $idProducto;
    }

    function setNombreProducto($nombreProducto){
        return $this->nombreProducto = $nombreProducto;
    }

    function setDescripcion($descripcion){
        return $this->descripcion = $descripcion;
    }

    function setValor($valor){
        return $this->valor = $valor;
    }

    function setCantidad($cantidad){
        return $this->cantidad = $cantidad;
    }

}



?>