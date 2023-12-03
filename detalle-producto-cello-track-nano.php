<!DOCTYPE html>
<html lang="es">

<head>
  <?php
    $setvar = array(
      "titulo"      => "Producto: Cello Track Nano",
      "follow"      => "",
      "description" => "Detalle producto: Cello Track Nano",
      "keywords"    => "cello track nano, track, cello,, nano, cello-track-nano",
      "active"      => [4, 0],
    );

  require_once "templates/head_links.phtml";

  ?>

</head>

<body>

  <?php require_once "templates/header.phtml";?>

  <section class="container-fluid m-0 p-0  wrap-s1 position-relative">
    <img class="img-wrap img-fluid w-100" src="./img/nosotros/quienes-somos.png" alt="">
    <div class="position-absolute w-100 wrap-text">
      <div class="container wrap-content">
        <h1 class="text-white h1 fw-600">Detalle Producto: Cello Track Nano</h1>
      </div>
    </div>
  </section>

  <section class="container mt-4">
      <div class="t-montserrat text-primary text-left fw-700 m-auto">
        <a href="productos" class="text-decoration-none"><i class='bx bx-arrow-back fw-700 fs-1x-50 mr-2'></i>Ver todos los productos</a>
      </div>
    </section>

    <section>
      <div class="container d-inline d-md-flex my-3 my-md-5">
        <div class="col-12 col-md-6 col-lg-3 m-auto p-3 text-center">
          <img srcset="img/producto_6.png" class="img-fluid">
        </div>
        <div class="f-montserrat fs-1x-25 col-12 col-md-6 col-lg-9 text-justify">
          <div class="border-bottom">
            <p class="text-primary text-uppercase fs-1x-50 fw-600">Cello Track Nano</p>
          </div>
          <p class="pt-3">
          El CelloTrack Nano es la esencia de IoT: donde los sensores, la ubicación y las tecnologías de la comunicación se encuentran.
La versatilidad y modularidad de la solución CelloTrack Nano te permiten
satisfacer casi todas sus necesidades de monitoreo, tales como: Cadena de frío, Logística y seguridad, Equipo de alquiler
Trabajador remoto.</p>
          <div class="text-right fs-1x fs-md-1x-25 col-12">
            <a href="./recursos/Cello-Track-Nano.pdf" class="m-auto text-decoration-none bg-primary py-1 px-4 px-md-3 rounded-pill t-montserrat text-white" target="_blank"><i class='bx bxs-primary'></i>Descargar ficha técnica</a>
          </div>
        </div>
      </div>
  </section>


  <section class="img-bg-cover  d-flex align-items-center"
    style="background-image: url('./img/productos/productos_1.png');">
    <div class="container py-5">
    <div class="container wrap-content d-inline d-md-flex">
        <div class='t-montserrat text-white fw-600 m-auto col-12 col-md-6'>
          <h2 class='h4 md-h3 lg-h2'>¿Desea cotizar un producto?</h2>
          <h2 class='h5 md-h5 lg-h3'>Comunícate a nuestro numero de ventas</h2>
          <h2 class='h5 md-h5 lg-h3'><a class="link-white" href="tel:015587912">(+51) 5587912</a></h2>
        </div>
        <div class="m-auto col-6 col-sm-4 col-md-3 mb-3 p-0 p-md-4 p-lg-5">
              <img class="img-fluid image" src="./img/productos/productos_2.png" alt="Avatar">
        </div>
      </div>
    </div>
  </section>


  <?php require_once "templates/footer.phtml";?>
  <?php require_once "templates/foot_links.phtml";?>

</body>

</html>