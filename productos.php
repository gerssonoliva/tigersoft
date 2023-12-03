<!DOCTYPE html>
<html lang="es">

<head>
  <?php
    $setvar = array(
      "titulo"      => "Productos de Calidad",
      "follow"      => "",
      "description" => "",
      "keywords"    => "",
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
        <h1 class="text-white h1 fw-600">Productos de Calidad</h1>
      </div>
    </div>
  </section>

  <section>
      <div class="container">
          <div class="t-montserrat text-justify mt-2 mt-lg-5 pb-3">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, expedita error veritatis accusamus enim at architecto autem sint vitae officiis pariatur veniam. Impedit aperiam aliquid quisquam veniam quos eius optio.
            </p>
          </div>
          <!--<div class="d-inline d-md-flex text-center m-auto pb-3">
            <div class="t-montserrat text-primary fs-1x-50 fw-700 col-12 col-md-3">Mostrar:</div>
            <div class="col-12 col-md-8">
              <form>
                <div class="form-group">
                  <select class="form-control" id="cat_producto">
                    <option>-- Seleccione Categoría --</option>
                    <option>Categoria 1</option>
                    <option>Categoria 2</option>
                    <option>Categoria 3</option>
                    <option>Categoria 4</option>
                    <option>Categoria 5</option>
                  </select>
                </div>
              </form>
            </div>
          </div>-->
      </div>

    <div class="bg-primary p-5">

    </div>
    
    <div class="container py-5">
      <div class="row">

        <div class="col-12 col-sm-6 col-md-4 py-2">
          <div class="producto text-center">
            <div class="item_f">
              <a href="detalle-producto-cello-iq">
                <div>
                  <img srcset="img/producto_1.png" class="img-fluid">
                </div>
                <div class="my-2">
                  <span class="text-primary f-montserrat fw-600 fs-1x-25">Cello-IQ</span>
                </div>
              </a>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 py-2 mb-3">
          <div class="producto text-center">
            <div class="item_f">
                <a href="detalle-producto-cr300">
                  <div>
                    <img srcset="img/producto_2.png" class="img-fluid">
                  </div>
                  <div class="my-2">
                    <span class="text-primary f-montserrat fw-600 fs-1x-25">CR300</span>
                  </div>
                </a>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 py-2 mb-3">
          <div class="producto text-center">
            <div class="item_f">
                <a href="detalle-producto-cello-track">
                  <div>
                    <img srcset="img/producto_3.png" class="img-fluid">
                  </div>
                  <div class="my-2">
                    <span class="text-primary f-montserrat fw-600 fs-1x-25">Cello Track</span>
                  </div>
                </a>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 py-2 mb-3">
          <div class="producto text-center">
            <div class="item_f">
                <a href="detalle-producto-tt8750">
                  <div>
                    <img srcset="img/producto_4.png" class="img-fluid">
                  </div>
                  <div class="my-2">
                    <span class="text-primary f-montserrat fw-600 fs-1x-25">Tt8750+</span>
                  </div>
                </a>
            </div>
          </div>
        </div>


        <div class="col-12 col-sm-6 col-md-4 py-2 mb-3">
          <div class="producto text-center">
            <div class="item_f">
                <a href="detalle-producto-tt8850">
                  <div>
                    <img srcset="img/producto_5.png" class="img-fluid">
                  </div>
                  <div class="my-2">
                    <span class="text-primary f-montserrat fw-600 fs-1x-25">TT8850</span>
                  </div>
                </a>
            </div>
          </div>
        </div>


        <div class="col-12 col-sm-6 col-md-4 py-2 mb-3">
          <div class="producto text-center">
            <div class="item_f">
                <a href="detalle-producto-cello-track-nano">
                  <div>
                    <img srcset="img/producto_6.png" class="img-fluid">
                  </div>
                  <div class="my-2">
                    <span class="text-primary f-montserrat fw-600 fs-1x-25">Cello Track Nano</span>
                  </div>
                </a>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 py-2 mb-3">
          <div class="producto text-center">
            <div class="item_f">
                <a href="detalle-producto-sp8703">
                  <div>
                    <img srcset="img/producto_7.png" class="img-fluid">
                  </div>
                  <div class="my-2">
                    <span class="text-primary f-montserrat fw-600 fs-1x-25">SP8703</span>
                  </div>
                </a>
            </div>
          </div>
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


  <?php /* require_once "templates/map_links.phtml"; */?>



</body>

</html>