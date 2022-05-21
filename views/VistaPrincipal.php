<?php
  require_once 'include.php'
?>
  <header>
    <nav class="navbar navbar-expand-xl navbar-light bg-light">
      <div class="container-fluid">
        <a href="index.html">
          <img src="../images/logo.png" alt="logo" width="60px" style="margin-left: 30px" />
        </a>

        <div class="navbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="navbar-brand" href="croche.html">stock</a>
            </li>
            <li class="nav-item">
              <a class="navbar-brand" href="croche.html">Productos</a>
            </li>
            <li class="nav-item">
              <a class="navbar-brand" href="croche.html">Ventas</a>
            </li>
            <li class="nav-item">
              <a class="navbar-brand" href="croche.html">Proveedores</a>
            </li>
            <li>
              <a class="btn btn-outline-primary" href="registoUsuario.php?tipoRegistro=C">Registrar Usuarios</a>
            </li>
          </ul>       
        </div>
      </div>
    </nav>
  </header>

  <div id="carouselExampleDark" class="carousel carousel-light slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>

    </div>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../imagenes/banner 1.jpg" class="d-block w-100" alt="banner 1" />
        <div class="carousel-caption d-none d-md-block">
          <h5>Ten un control sobre tu negocio</h5>
          <p>De esta maneras podras monitorear toda la informacion de tu almacen.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../imagenes/banner 2.jpg" class="d-block w-100" alt="banner 2" />
        <div class="carousel-caption d-none d-md-block">
          <h5>Ten un control sobre tu negocio</h5>
          <p>De esta maneras podras monitorear toda la informacion de tu almacen.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../imagenes/banner 3.jpg" class="d-block w-100" alt="banner 3" />
        <div class="carousel-caption d-none d-md-block">
          <h5>Ten un control sobre tu negocio</h5>
          <p>De esta maneras podras monitorear toda la informacion de tu almacen.</p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="../imagenes/banner 4.jpg" class="d-block w-100" alt="banner 4" />
        <div class="carousel-caption d-none d-md-block">
          <h5>Ten un control sobre tu negocio</h5>
          <p>De esta maneras podras monitorear toda la informacion de tu almacen.</p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="../imagenes/banner 5.jpg" class="d-block w-100" alt="banner 5" />
        <div class="carousel-caption d-none d-md-block">
          <h5>Ten un control sobre tu negocio</h5>
          <p>De esta maneras podras monitorear toda la informacion de tu almacen.</p>
        </div>
      </div>


    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<?php
  require_once 'includeFooter.php'
?>