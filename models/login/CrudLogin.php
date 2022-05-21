<?php
    require_once '../models/ClaseConexion.php';
    require_once 'claseLogin.php';
    
    class CrudLogin {
        public static function buscarPorUsuario($nom){
                $con=new claseConexion();
                $sql="SELECT usuario, contraseña ,Activo FROM usuarios WHERE usuario = '$nom';";
                $cont=$con->ejecutarConsulta($sql);
                $con->cerrarConexion();
                return $cont[0];//se envia un solo registro
        }

        public static function totalUsuarios(){
                $con=new claseConexion();
                $sql="SELECT COUNT(id) FROM tbl_usuarios";
                $cont=$con->ejecutarConsulta($sql);
                $con->cerrarConexion();
                return $cont[0];//se envia un solo registro
        }

        public static function buscarPorUsuarioConID($nom){
            $con=new claseConexion();
            $sql="SELECT idUsuario,usuario, Contraseña ,Activo FROM usuarios WHERE usuario = '$nom';";
            $cont=$con->ejecutarConsulta($sql);
            $con->cerrarConexion();
            return $cont[0];//se envia un solo registro
        }   
        
        public static function buscarPorUsuarioPorID($id){
            $con=new claseConexion();
            $sql="SELECT usuario, Contraseña ,Activo FROM usuarios WHERE idUsuario = '$id';";
            $cont=$con->ejecutarConsulta($sql);
            $con->cerrarConexion();
            return $cont[0];//se envia un solo registro
        }

        public static function CambiarContraseña($contraseña,$id){
            $con=new claseConexion();
            $sql="UPDATE usuarios SET Contraseña = '$contraseña' WHERE idUsuario = '$id';";
            $cont=$con->ejecutarActualizacion($sql);
            $con->cerrarConexion();
            return $cont;//se envia un solo registro
        }
    }