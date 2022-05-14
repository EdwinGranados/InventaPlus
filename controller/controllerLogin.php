<?php
    require_once '../models/ClaseConexion.php';
    require_once '../models/CrudLogin.php';
    require_once '../models/ClaseLogin.php';
    

    switch ($_GET['tipo']) {
        case 'Login':
            $login = new claseLogin();
            $usuario = $_POST['usuario'];
            $contrasena = $_POST['pass']; 
            $login = CrudLogin::buscarPorUsuario($usuario);
            print_r($login);
            if ($login[1]==$contrasena && $login[2] == 1) {
                echo 'el usuario'.$usuario.'existe';
                header("Location: ../views/VistaPrincipal.php");
            }
            break;
        case 'rcu':
            $usuario = $_POST['usuario'];
            if($usuario == ""){
                header("Location: ../views/restablecerContraseña.php?usu=0&CambioClave=-1");
                return;
            }
            header("Location: ../views/restablecerContraseña.php?usu=1&CambioClave=-1");
            break;
        case 'rcc':
            header("Location: ../views/restablecerContraseña.php?usu=1&CambioClave=1");
            break;
        default:
            # code...
            break;
    }
?>