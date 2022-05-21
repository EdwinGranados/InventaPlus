<?php
    require_once '../models/ClaseConexion.php';
    require_once '../models/registroUsuarios/CRUDUsuarios.php';
    require_once '../models/registroUsuarios/ClaseUsuarios.php';

    switch($_GET['tipoRegisto']){
        case 'C':
            $usuario= new usuario();
            $usuario->setIdUsuario(0);
            $usuario->setUsuario( $_POST['usuario']);
            $usuario->setContraseña($_POST['pass']);
            $usuario->setEstado((isset($_POST['act']))?0:1);
            $res=CrudUsuario::insert($usuario);
            if ($res == 1){
                header("Location: ../views/registoUsuario.php?tipoRegistro=C&res=1");
            }
            break;
        case 'A':
            $usuario= new usuario();
            $usuario->setIdUsuario($_POST['id']);
            $usuario->setUsuario( $_POST['usuario']);
            $usuario->setEstado((!empty($_POST['act']))?0:1);
            $res=CrudUsuario::ActualizarUsuario($usuario);
            if ($res == 1){
                header("Location: ../views/registoUsuario.php?tipoRegistro=A&id=".$_POST['id']."&res=2");
            }
            break;
        default:
            break;
    }