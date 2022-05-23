<?php
    require_once '../models/ClaseConexion.php';
    require_once '../models/registroCliente/CRUDCliente.php';
    require_once '../models/registroCliente/claseCliente.php';

    switch($_GET['tipoRegisto']){
        case 'C':
            $cliente= new cliente();
            $cliente->setIdCliente(0);
            $cliente->setNombreCliente( $_POST['nombreCliente']);
            $cliente->setNIT($_POST['NIT']);
            $cliente->setCorreo( $_POST['Correo']);
            $cliente->setTelefono($_POST['telefono']);
            $cliente->setDirección( $_POST['dirección']);

            $res=CrudCliente::insert($cliente);
            if ($res == 1){
                header("Location: ../views/registroCliente.php?tipoRegistro=C&res=1");
            }
            break;
        case 'A':

            $cliente= new cliente();

            $cliente->setIdCliente($_POST['id']);
            $cliente->setNombreCliente( $_POST['nombreCliente']);
            $cliente->setNIT($_POST['NIT']);
            $cliente->setCorreo( $_POST['Correo']);
            $cliente->setTelefono($_POST['telefono']);
            $cliente->setDirección( $_POST['dirección']);


            $res=CrudCliente::ActualizarCliente($cliente);
            if ($res == 1){
                header("Location: ../views/registroCliente.php?tipoRegistro=A&id=".$_POST['id']."&res=2");
            }
            break;
        case 'D':
            $res=CrudProducto::EliminarCleinte($_GET['id']);
            if ($res == 1){
                header("Location: ../views/formulario.php?TipoLista=C");
            }
            break;
        default:
            break;
    }