<?php
    require_once '../models/ClaseConexion.php';
    require_once 'claseProductos.php';

    class CrudProducto {

        public static function insert ($producto){
            $con=new claseConexion();          
            $sql="INSERT INTO productos(IdProducto, NombreProducto, Descripcion, Valor, Cantidad) "
                . "VALUES ('0','".$producto->getNombreProducto()."','".$producto->getDescripcion()."',
                '".$producto->getValor()."','".$producto->getCantidad()."')";
            echo $sql;
            $res=$con->ejecutarActualizacion($sql);
            $con->cerrarConexion();

            return$res;
        }

        public static function buscarPorId($id){
            $con=new claseConexion();
            $sql="select * from productos where IdProducto =".$id;
            $cont=$con->ejecutarConsulta($sql);
            $con->cerrarConexion();
            return $cont[0];//se envia un solo registro
        }

        public static function ActualizarProducto($producto){
            $con=new claseConexion();
            $sql="UPDATE productos SET NombreProducto='".$producto->getNombreProducto()."',
            Descripcion=".$producto->getDescripcion().",
            Valor=".$producto->getValor().",
            Cantidad=".$producto->getCantidad()."  WHERE IdProducto =".$producto->getIdProducto();
            $res=$con->ejecutarActualizacion($sql);
            $con->cerrarConexion();
            return $res;
        }

        public static function listarProductos(){
            $con=new claseConexion();
            $sql="SELECT  * FROM  productos";
            $cont=$con->ejecutarConsulta($sql);
            $con->cerrarConexion();
            return $cont;//se envia un solo registro
        }
    
        public static function EliminarProducto($id){
            $con=new claseConexion();
            $sql="DELETE FROM  productos WHERE IdProducto =".$id;
            $res=$con->ejecutarActualizacion($sql);
            $con->cerrarConexion();
            return $res;
        }
    }