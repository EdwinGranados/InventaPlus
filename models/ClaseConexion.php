<?php

class claseConexion {
    /*Datos de conexion a la base de datos*/
    private $servidor;
    private $usuario;
    private $clave;
    private $basedatos;
    private $conexion;
    
    function getConexion() {
        return $this->conexion;
    }
   
    public function __construct() {
        $this->servidor="localhost";
        $this->usuario="Desarrollo";
        $this->clave="Desarrollo";
        $this->basedatos="inventaplus";
        
        $this->conexion= new mysqli($this->servidor, $this->usuario, 
                $this->clave, $this->basedatos);
        if(mysqli_connect_errno()){
            echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
        }
    }
    
    public function ejecutarConsulta($sql){
        //echo $sql;
        $contenedor=$this->conexion->query($sql);
        return $contenedor->fetch_all();
    }
    
    public function ejecutarActualizacion ($sql){
        $res=$this->conexion->query($sql);
        return $res;
    }
    
    public function cerrarConexion(){
        $this->conexion->close();
    }
    
}