<?php
    require_once '../models/ClaseConexion.php';
    require_once '../models/registrarProductos/CRUDProductos.php';
    require_once '../models/registrarProductos/ClaseProductos.php';

    switch($_GET['tipoRegisto']){
        case 'C':
            $producto= new producto();
            $producto->setIdProducto(0);
            $producto->setNombreProducto( $_POST['nombreProducto']);
            $producto->setDescripcion($_POST['descripcion']);
            $producto->setValor( $_POST['valor']);
            $producto->setCantidad($_POST['cantidad']);
            $res=CrudProducto::insert($producto);


            if ($res == 1){
                header("Location:../views/registroProducto.php?tipoRegistro=C&res=1");
            }
            break;

        case 'A':
            $producto= new producto();


            
            $producto->setIdProducto(['id']);
            $producto->setNombreProducto( $_POST['nombreProducto']);
            $producto->setDescripcion($_POST['descripcion']);
            $producto->setValor( $_POST['valor']);
            $producto->setCantidad($_POST['cantidad']);


            $res=CrudProducto::ActualizarProducto($producto);
            if ($res == 1){
                header("Location: ../views/registroProducto.php?tipoRegistro=A&id=".$_POST['id']."&res=2");
            }
            break;
        default:
            break;
    }