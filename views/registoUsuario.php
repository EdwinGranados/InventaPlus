<?php
    require_once 'include.php';
    require_once '../models\ClaseConexion.php';
    require_once '../models\registroUsuarios\CRUDUsuarios.php';
?>
<?php
if (isset($_GET['res'])) {
    if($_GET['res'] == 1){
?>
<div class='col-md-12'>
    <div class='alert alert-success'>
        <center> Se ha creado el usuario Correctamente </center>
    </div>
</div>
<?php
    }else if($_GET['res'] == 2){
    ?>
<div class='col-md-12'>
    <div class='alert alert-success'>
        <center> Se ha actualizado el usuario correctamente </center>
    </div>
</div>
<?php
    }
    header( "refresh:2;url=formulario.php?TipoLista=U" );
}
?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card text-left">
                <div class="row container-fluid justify-content-center mt-5">
                    <?php
                        if ($_GET['tipoRegistro'] == 'C') {
                    ?>
                    <form action='../controller/usuariosController.php?tipoRegisto=C' method="POST" class="mt-5"
                        enctype="multipart/form-data">
                        <div class="mb-3  mt-5">
                            <label for="usuario" class="form-label">Usuario</label>
                            <input type="text" class="form-control" id="usu" aria-describedby="usuarioHelp"
                                name="usuario">
                            <div id="usuarioHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="pass" name="pass">
                        </div>
                        <div class="mb-3">
                            <label for="act" class="form-label">Activo</label>
                            <input type="checkbox" name="act" id="act" checked>
                        </div>
                        <button type="submit" class="btn btn-success">Registrar</button>
                    </form>
                    <?php
                    }else if($_GET['tipoRegistro'] == 'A'){
                    $ref = CrudUsuario::buscarPorId($_GET['id']);
                    ?>
                    <form action='../controller/usuariosController.php?tipoRegisto=A' method="POST" class="mt-5"
                        enctype="multipart/form-data">
                        <div class="mb-3  mt-5">
                            <label for="usuario" class="form-label">Usuario</label>
                            <input type="text" class="form-control" id="usu" aria-describedby="usuarioHelp"
                                name="usuario" value="<?=$ref[1]?>">
                            <div id="usuarioHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="act" class="form-label">Activo</label>
                            <input type="checkbox" name="act" id="act" <?=($ref[3]==1)? 'checked' :'';?>>
                        </div>
                        <input type="hidden" name="idUsuario" value="<?=$_GET['id'];?>">
                        <button type="submit" class="btn btn-success">Actualizar</button>
                    </form>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    include_once 'includeFooter.php';
?>