<?php
    require_once 'include.php';
    require_once '../models\ClaseConexion.php';
    require_once '../models\registrarProductos\CRUDProductos.php';
?>

<?php
if (isset($_GET['res'])) {
    if($_GET['res'] == 1){
?>
   <div class='col-md-12'>
        <div class='alert alert-success'>
            <center> Se ha creado el producto Correctamente </center>
        </div>
    </div>
    <?php
    }else if($_GET['res'] == 2){
    ?>
    <div class='col-md-12'>
        <div class='alert alert-success'>
            <center> Se ha actualizado el producto correctamente </center>
        </div>
    </div>
    <?php
    }
    header( "refresh:2;url=vistaPrincipal.php" );
}
?>

<div class="row spacer"></div>
<div class="row container-fluid justify-content-center mt-5">
    <?php
    if ($_GET['tipoRegistro'] == 'C') {
?>
    <form action='../controller/productosController.php?tipoRegisto=C' method="POST" class="mt-5"
        enctype="multipart/form-data">
        <div class="mb-3  mt-5">
            <label for="nombreProducto" class="form-label">Nombre del Producto</label>
            <input type="text" class="form-control" id="nombreProducto" aria-describedby="ProductoHelp" name="nombreProducto">
            <div id="ProductoHelp" class="form-text"></div>
        </div>


        <div class="mb-3  mt-5">
            <label for="descripcion" class="form-label">detalles del producto</label>
            <input type="text" class="form-control" id="descripcion" aria-describedby="descripcionHelp" name="descripcion">
            <div id="descripcionHelp" class="form-text"></div>
        </div>


        <div class="mb-3  mt-5">
            <label for="valor" class="form-label">Valor del Producto</label>
            <input type="text" class="form-control" id="valor" aria-describedby="valorHelp" name="valor">
            <div id="valorHelp" class="form-text"></div>
        </div>


        <div class="mb-3  mt-5">
            <label for="cantidad" class="form-label">Cantidad del Producto</label>
            <input type="text" class="form-control" id="cantidad" aria-describedby="cantidadHelp" name="cantidad">
            <div id="cantidadHelp" class="form-text"></div>
        </div>

       
        <button type="submit" class="btn btn-success">Registrar</button>
    </form>


    <?php
    }else if($_GET['tipoRegistro'] == 'A'){
        $ref = CrudProducto::buscarPorId($_GET['id']);
?>
    <form action='../controller/productosController.php?tipoRegisto=A' method="POST" class="mt-5"
        enctype="multipart/form-data">


        <div class="mb-3  mt-5">
            <label for="nombreProducto" class="form-label">Nombre del Producto</label>
            <input type="text" class="form-control" id="nombreProducto" aria-describedby="ProductoHelp" 
            name="nombreProducto" value="<?=$ref[1]?>">
            <div id="ProductoHelp" class="form-text"></div>
        </div>


        <div class="mb-3  mt-5">
            <label for="descripcion" class="form-label">detalles del producto</label>
            <input type="text" class="form-control" id="descripcion" aria-describedby="descripcionHelp" 
            name="descripcion" value="<?=$ref[1]?>">
            <div id="descripcionHelp" class="form-text"></div>
        </div>


        <div class="mb-3  mt-5">
            <label for="valor" class="form-label">Valor del Producto</label>
            <input type="text" class="form-control" id="valor" aria-describedby="valorHelp" 
            name="valor" value="<?=$ref[1]?>">
            <div id="valorHelp" class="form-text"></div>
        </div>


        <div class="mb-3  mt-5">
            <label for="cantidad" class="form-label">Cantidad del Producto</label>
            <input type="text" class="form-control" id="cantidad" aria-describedby="cantidadHelp" 
            name="cantidad" value="<?=$ref[1]?>">
            <div id="cantidadHelp" class="form-text"></div>
        </div>

        <input type="hidden" name="idProducto" value="<?php echo $_GET['id'];?>">
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
    <?php
    }
?>

</div>






<?php
    include_once 'includeFooter.php';
?>