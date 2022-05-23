<?php
    require_once 'include.php';
    require_once '../models\ClaseConexion.php';
    require_once '../models\registroCliente\CRUDCliente.php';
?>
<?php
if (isset($_GET['res'])) {
    if($_GET['res'] == 1){
?>
   <div class='col-md-12'>
        <div class='alert alert-success'>
            <center> Se ha creado el cliente Correctamente </center>
        </div>
    </div>
    <?php
    }else if($_GET['res'] == 2){
    ?>
    <div class='col-md-12'>
        <div class='alert alert-success'>
            <center> Se ha actualizado el cliente correctamente </center>
        </div>
    </div>
    <?php
    }
    header( "refresh:2;url=formulario.php?TipoLista=C" );
}
?>

<div class="row spacer"></div>
<div class="row container-fluid justify-content-center mt-5">
    <?php
    if ($_GET['tipoRegistro'] == 'C') {
?>
    <form action='../controller/clienteController.php?tipoRegisto=C' method="POST" class="mt-5"
        enctype="multipart/form-data">
        <div class="mb-3  mt-5">
            <label for="nombreCliente" class="form-label">Nombre del Cliente</label>
            <input type="text" class="form-control" id="nombreCliente" aria-describedby="nombreClienteHelp" name="nombreCliente">
            <div id="nombreClienteHelp" class="form-text"></div>
        </div>
        <div class="mb-3  mt-5">
            <label for="NIT" class="form-label">NIT</label>
            <input type="number" class="form-control" id="NIT" aria-describedby="NITHelp" name="NIT">
            <div id="NITHelp" class="form-number"></div>
        </div>
        <div class="mb-3  mt-5">
            <label for="Correo" class="form-label">Correo del Cliente</label>
            <input type="email" class="form-control" id="Correo" aria-describedby="CorreoHelp" name="Correo">
            <div id="CorreoHelp" class="form-email"></div>
        </div>
        <div class="mb-3  mt-5">
            <label for="telefono" class="form-label">Telefono del Cliente</label>
            <input type="number" class="form-control" id="telefono" aria-describedby="telefonoHelp" name="telefono">
            <div id="telefonoHelp" class="form-number"></div>
        </div>
        <div class="mb-3  mt-5">
            <label for="dirección" class="form-label">Direccion del Cliente</label>
            <input type="text" class="form-control" id="dirección" aria-describedby="direcciónHelp" name="dirección">
            <div id="direcciónHelp" class="form-text"></div>
        </div>      
        <button type="submit" class="btn btn-success">Registrar</button>
    </form>
    <?php
    }else if($_GET['tipoRegistro'] == 'A'){
        $ref = CrudCliente::buscarPorId($_GET['id']);
?>
    <form action='../controller/clienteController.php?tipoRegisto=A' method="POST" class="mt-5"
        enctype="multipart/form-data">
        <div class="mb-3  mt-5">
            <label for="nombreCliente" class="form-label">Nombre del Cliente</label>
            <input type="text" class="form-control" id="nombreCliente" aria-describedby="nombreClienteHelp" name="nombreCliente" value="<?=$ref[1]?>">
            <div id="nombreClienteHelp" class="form-text"></div>
        </div>
        <div class="mb-3  mt-5">
            <label for="NIT" class="form-label">NIT</label>
            <input type="number" class="form-control" id="NIT" aria-describedby="NITHelp" name="NIT" value="<?=$ref[1]?>">
            <div id="NITHelp" class="form-number"></div>
        </div>
        <div class="mb-3  mt-5">
            <label for="correo" class="form-label">Correo del Cliente</label>
            <input type="text" class="form-control" id="correo" aria-describedby="correoHelp" name="correo" value="<?=$ref[1]?>">
            <div id="correoHelp" class="form-text"></div>
        </div>
        <div class="mb-3  mt-5">
            <label for="telefono" class="form-label">Telefono del Cliente</label>
            <input type="number" class="form-control" id="telefono" aria-describedby="telefonoHelp" name="telefono" value="<?=$ref[1]?>">
            <div id="telefonoHelp" class="form-number"></div>
        </div>
        <div class="mb-3  mt-5">
            <label for="dirección" class="form-label">Direccion del Cliente</label>
            <input type="text" class="form-control" id="dirección" aria-describedby="direcciónHelp" name="dirección" value="<?=$ref[1]?>">
            <div id="direcciónHelp" class="form-text"></div>
        </div>
        <input type="hidden" name="idCliente" value="<?php echo $_GET['id'];?>">
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
    <?php
    }
?>
</div>
<div class="row spacer"></div>
<?php
    include_once 'includeFooter.php';
?>