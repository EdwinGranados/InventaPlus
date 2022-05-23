<?php
    require_once '../models/ClaseConexion.php';
    require_once 'claseCliente.php';

    class CrudCliente {

        public static function insert ($cliente){
            $con=new claseConexion();          
            $sql="INSERT INTO clientes(IdCliente, NombreCliente, NIT, Correo, Telefono, dirección) "
                . "VALUES ('0','".$cliente->getNombreCliente()."','".$cliente->getNIT()."',
                '".$cliente->getCorreo()."','".$cliente->getTelefono()."','".$cliente->getDirección()."')";
            echo $sql;
            $res=$con->ejecutarActualizacion($sql);
            $con->cerrarConexion();

            return$res;
        }

        public static function buscarPorId($id){
            $con=new claseConexion();
            $sql="select * from clientes where IdProducto =".$id;
            $cont=$con->ejecutarConsulta($sql);
            $con->cerrarConexion();
            return $cont[0];//se envia un solo registro
        }

        public static function ActualizarCliente($cliente){
            $con=new claseConexion();
            $sql="UPDATE clientes SET 

            NombreCliente='".$cliente->getNombreCliente()."',
            NIT=".$cliente->getNIT().",
            Correo=".$cliente->getCorreo().",
            Telefono=".$cliente->getTelefono().",
            dirección=".$cliente->getDirección()." 

            WHERE IdProducto =".$cliente->getIdCliente();
            $res=$con->ejecutarActualizacion($sql);
            $con->cerrarConexion();
            return $res;
        }

        public static function listarClientes(){
            $con=new claseConexion();
            $sql="SELECT  * FROM  clientes";
            $cont=$con->ejecutarConsulta($sql);
            $con->cerrarConexion();
            return $cont;//se envia un solo registro
        }

        public static function EliminarCleinte($id){
            $con=new claseConexion();
            $sql="DELETE FROM  clientes WHERE IdCliente =".$id;
            $res=$con->ejecutarActualizacion($sql);
            $con->cerrarConexion();
            return $res;
        }
    

    }