<?php
    require_once 'include.php';
?>

<div class="row spacer"></div>
<div class="row container-fluid justify-content-center mt-5">
    <div class="col-6  mt-5 border-end border-secondary ">
        <h1 class="display-3  mt-5">InventaPlus</h1>
    </div>
    <div class="col-4 mt-5">
        <form action="../controller/controllerLogin.php?tipo=Login" method="POST" class="mt-5" enctype="multipart/form-data">
            <div class="mb-3  mt-5">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="usuario" aria-describedby="usuarioHelp" name="usuario">
                <div id="usuarioHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="pass">
            </div>
            <button type="submit" class="btn btn-success">Ingresar</button>
            <a href="restablecerContraseña.php?usu=-1&CambioClave=-1" class="btn btn-secondary">olvide mi contraseña</a>
        </form>
    </div>
</div>
<div class="row spacer"></div>
<?php
    require 'includeFooter.php'
?>