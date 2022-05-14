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
                    <form action="../controller/controllerLogin.php?tipo=rcu" class="mt-5" method="POST" enctype="multipart/form-data">
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">@</span>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" name="usuario">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </form>
                <?php
                } else if ($_GET['usu'] == 0) {
                ?>
                    <form action="../controller/controllerLogin.php?tipo=rcu" class="mt-5" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class='col-md-12'>
                                <div class='alert alert-warning'>
                                    <center><strong>Error!</strong> Usuario no encontrado </center>
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">@</span>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" name="usuario">
                                </div>
                                <br>
                                <button type="submit" class="btn btn-success">Enviar</button>
                            </div>
                        </div>
                    </form>
                <?php
                } else {
                ?>
                    <form action="../controller/controllerLogin.php?tipo=rcc" class="mt-5" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="newpassword" class="form-label fs-3">Nueva contraseña</label>
                            <input type="password" class="form-control" id="newpassword">
                        </div>
                        <div class="mb-3">
                            <label for="confirmnewpassword" class="form-label fs-3">Confirmar nueva contraseña</label>
                            <input type="password" class="form-control" id="confirmnewpassword">
                        </div>

                        <button type="submit" class="btn btn-success">Cambiar Contraseña</button>
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