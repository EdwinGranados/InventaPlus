<?php
require_once 'include.php'
?>

<?php
if ($_GET['CambioClave'] == 1) {
?>
<div class='col-md-12'>
    <div class='alert alert-success'>
        <center> Se ha cambioado la contraseña exitosamente </center>
    </div>
</div>
<?php
    header( "refresh:2;url=login.php" );
}
?>
<div class="row spacer"></div>
<div class="container">
    <div class="row align-items-center">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="row">
                <h1 class="display-5  mt-5">Recuperar su contraseña</h1>
            </div>
            <div class="row">
                <?php
                if ($_GET['usu'] == -1) {
                ?>
                <form action="../controller/controllerLogin.php?tipo=rcu" class="mt-5" method="POST"
                    enctype="multipart/form-data">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">Nombre Usuario</span>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                            aria-describedby="addon-wrapping" name="usuario">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success">Enviar</button>
                </form>
                <?php
                } else if ($_GET['usu'] == 0) {
                ?>
                <form action="../controller/controllerLogin.php?tipo=rcu" class="mt-5" method="POST"
                    enctype="multipart/form-data">
                    <div class="row">
                        <div class='col-md-12'>
                            <div class='alert alert-warning'>
                                <center><strong>Error!</strong> Usuario no encontrado </center>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">Nombre Usuario</span>
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                    aria-describedby="addon-wrapping" name="usuario">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-success">Enviar</button>
                        </div>
                    </div>
                </form>
                <?php
                } else {
                ?>
                <form name="form1" action="" class="mt-5" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <?php
                        if ($_GET['usu'] == -2){
                        ?>
                        <div class='col-md-12'>
                            <div class='alert alert-danger'>
                                <center> Las contraseñas no son iguales </center>
                            </div>
                        </div>
                        <?php
                        }else if($_GET['CambioClave'] == -2){
                        ?>
                        <div class='col-md-12'>
                            <div class='alert alert-danger'>
                                <center> No puede usar esta contraseña, porque ya existe </center>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="col">
                            <div class="mb-3">
                                <label for="newpassword" class="form-label fs-3">Nueva contraseña</label>
                                <input type="password" class="form-control" id="newpassword" name="newpsw">
                            </div>
                            <div class="mb-3">
                                <label for="confirmnewpassword" class="form-label fs-3">Confirmar nueva
                                    contraseña</label>
                                <input type="password" class="form-control" id="confirmnewpassword" name="cnewpsw">
                            </div>
                            <input type="hidden" name="idUsuario" value="<?php echo $_GET['usu'];?>">
                            <button class="btn btn-success"
                                onclick="ValidarClave(form1.newpsw.value,form1.cnewpsw.value)">Cambiar
                                Contraseña</button>
                        </div>

                </form>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>
<div class="row spacer"></div>
<?php
require 'includeFooter.php'
?>