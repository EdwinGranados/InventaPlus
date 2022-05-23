<?php
    require_once '../models/ClaseConexion.php';
    require_once 'claseUsuarios.php';

    class CrudUsuario {

        public static function insert ($usuario){
            $con=new claseConexion();          
            $sql="INSERT INTO usuarios(IdUsuario, Usuario, Contraseña, Activo) "
                . "VALUES ('0','".$usuario->getUsuario()."','".$usuario->getContraseña()
                ."','".$usuario->getEstado()."')";
            echo $sql;
            $res=$con->ejecutarActualizacion($sql);
            $con->cerrarConexion();

            return$res;
        }

        public static function buscarPorId($id){
            $con=new claseConexion();
            $sql="select * from usuarios where IdUsuario =".$id;
            $cont=$con->ejecutarConsulta($sql);
            $con->cerrarConexion();
            return $cont[0];//se envia un solo registro
        }

        public static function ActualizarUsuario($usuario){
            $con=new claseConexion();
            $sql="UPDATE usuarios SET Usuario='".$usuario->getUsuario()."'
            ,Activo=".$usuario->getEstado()." WHERE IdUsuario =".$usuario->getIdUsuario();
            echo $sql;
            $res=$con->ejecutarActualizacion($sql);
            $con->cerrarConexion();
            return $res;
        }

        public static function CambiarEstado($id){
            $con=new claseConexion();
            $sql="UPDATE usuarios SET ACTIVO  = 0 where IdUsuario=".$id;
            $res=$con->ejecutarActualizacion($sql);
            $con->cerrarConexion();
            return $res;
        }

        public static function listarUsuarios(){
            $con=new claseConexion();
            $sql="SELECT  * FROM  usuarios";
            $cont=$con->ejecutarConsulta($sql);
            $con->cerrarConexion();
            return $cont;//se envia un solo registro
        }

        public static function listarUsuariosAvtivos(){
            $con=new claseConexion();
            $sql="SELECT  * FROM  usuarios WHERE Activo = 1";
            $cont=$con->ejecutarConsulta($sql);
            $con->cerrarConexion();
            return $cont;//se envia un solo registro
        }
    

    }