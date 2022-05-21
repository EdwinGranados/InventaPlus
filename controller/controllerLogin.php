<?php
    require_once '../models/ClaseConexion.php';
    require_once '../models/login/CrudLogin.php';
    require_once '../models/login/ClaseLogin.php';
    

    switch ($_GET['tipo']) {
        case 'Login':
            $login = new claseLogin();
            $usuario = $_POST['usuario'];
            $contrasena = $_POST['pass']; 
            $login = CrudLogin::buscarPorUsuario($usuario);
            if ($login[1]==$contrasena && $login[2] == 1) {
                header("Location: ../views/VistaPrincipal.php");
            }else{
                header("Location: ../views/login.php");
            }
            break;
        case 'rcu':
            $login = new claseLogin();
            $usuario = $_POST['usuario'];
            if($usuario == ""){
                header("Location: ../views/restablecerContraseña.php?usu=0&CambioClave=-1");
                return;
            }
            $login = CrudLogin::buscarPorUsuarioConID($usuario);
            if ($login[1] == $usuario and $login[3] == 1){
                header("Location: ../views/restablecerContraseña.php?usu=".$login[0]."&CambioClave=-1");
                return;
            }else{
                header("Location: ../views/restablecerContraseña.php?usu=0&CambioClave=-1");
                return;
            }
            break;
        case 'rcc':
            $login = new claseLogin();
            $idUsuario = $_POST['idUsuario'];
            $nuevacontraseña = $_POST['newpsw'];
            $login = CrudLogin::buscarPorUsuarioPorID($idUsuario);
            if($login[1]==$nuevacontraseña){
                header("Location: ../views/restablecerContraseña.php?usu=".$idUsuario."&CambioClave=-2");
            }else{
                $login = CrudLogin::CambiarContraseña($nuevacontraseña,$idUsuario);
                if($login > 0){
                    header("Location: ../views/restablecerContraseña.php?usu=".$idUsuario."1&CambioClave=1");  
                    return; 
                }
                print_r($login);
            }
            break;
        default:
            header("Location: ../views/restablecerContraseña.php?usu=0&CambioClave=-1");
            break;
    }
?>