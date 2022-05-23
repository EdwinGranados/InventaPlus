<?php
    require_once 'include.php';
 ?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card text-left">
                <?php
            switch ($_GET['TipoLista']) {
            case 'U':
              require_once '../models\registroUsuarios\CRUDUsuarios.php';
              ?><div class="card-header bg-primary">
                    <div class="card-block d-flex justify-content-between align-items-center">
                        <h4 class="text-white">Lista de Usuarios</h4>
                    </div>
                </div>
                <br>
                <div class="card-body">
                    <div>
                        <a class="btn btn-primary btn-sm" href="registoUsuario.php?tipoRegistro=C">Nuevo Registro</a>
                    </div>
                    <hr>
                    <table class="table table-bordered" id="tabla">
                        <thead>
                            <tr>
                                <th scope="col">Id.</th>
                                <th scope="col">Usuario</th>
                                <th scope="col">Fecha Creacion</th>
                                <th scope="col" class="text-center" colspan="2">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach (CrudUsuario::listarUsuarios() as $fila): ?>
                            <tr>
                                <td><?=$fila[0]?></td>
                                <td><?=$fila[1]?></td>
                                <td><?=$fila[4]?></td>
                                <td>
                                    <a class="btn btn-success btn-sm"
                                        href="registoUsuario.php?tipoRegistro=A&id=<?=$fila[0]?>">Editar</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div><?php
              break;
            case 'P':
              require_once '../models\registrarProductos\CRUDProductos.php';
              ?><div class="card-header bg-primary">
                    <div class="card-block d-flex justify-content-between align-items-center">
                        <h4 class="text-white">Lista de Productos</h4>
                    </div>
                </div>
                <br>
                <div class="card-body">
                    <div>
                        <a class="btn btn-primary btn-sm" href="registroProducto.php?tipoRegistro=C">Nuevo Registro</a>
                    </div>
                    <hr>
                    <table class="table table-bordered" id="tabla">
                        <thead>
                            <tr>
                                <th scope="col">Id.</th>
                                <th scope="col">Nombre Producto</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Valor</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col" class="text-center" colspan="2">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach (CrudProducto::listarProductos() as $fila): ?>
                            <tr>
                                <td><?=$fila[0]?></td>
                                <td><?=$fila[1]?></td>
                                <td><?=$fila[2]?></td>
                                <td><?=$fila[3]?></td>
                                <td><?=$fila[4]?></td>
                                <td><a class="btn btn-success btn-sm" href="registroProducto.php?tipoRegistro=A&id=<?=$fila[0]?>">Editar</a>
                              </td>
                                <td>
                                  <a class="btn btn-danger btn-sm" href="../controller\productosController.php?tipoRegisto=D&id=<?=$fila[0]?>" onclick="return confirm('¿Desea eliminar el registro?')">Eliminar</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div><?php
              break;
            case 'C':
              require_once '../models\registroCliente\CRUDCliente.php';
              ?><div class="card-header bg-primary">
                    <div class="card-block d-flex justify-content-between align-items-center">
                        <h4 class="text-white">Lista de Clientes</h4>
                    </div>
                </div>
                <br>
                <div class="card-body">
                    <div>
                        <a class="btn btn-primary btn-sm" href="ingresarUsuario.php">Nuevo Registro</a>
                    </div>
                    <hr>
                    <table class="table table-bordered" id="tabla">
                        <thead>
                            <tr>
                                <th scope="col">Id.</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">NIT</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">dirección</th>
                                <th scope="col" class="text-center" colspan="2">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach (CrudCliente::listarClientes() as $fila): ?>
                            <tr>
                                <td><?=$fila[0]?></td>
                                <td><?=$fila[1]?></td>
                                <td><?=$fila[2]?></td>
                                <td><?=$fila[3]?></td>
                                <td><?=$fila[5]?></td>
                                <td><?=$fila[6]?></td>
                                <td>
                                    <a class="btn btn-success btn-sm" href="editarUsuario.php?id=<?=$fila[0]?>">Editar</a>
                                </td>
                                <td>
                                  <a class="btn btn-danger btn-sm" href="../controller\clienteController.php?tipoRegisto=D&id=<?=$fila[0]?>" onclick="return confirm('¿Desea eliminar el registro?')">Eliminar</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div><?php
              break;
            ?>
            </div>
        </div>
    </div>
</div>


<?php
  }
    require 'includeFooter.php'
?>