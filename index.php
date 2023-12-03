<!DOCTYPE html>
<html lang="es">

<head>
  <?php
$setvar = array(
    "titulo" => "Tiger Soft",
    "follow" => "",
    "description" => "",
    "keywords" => "",
    "active" => [1, 0],
    "nav_home" => "nav-home",
);

require_once "templates/head_links.phtml";

?>


</head>

<body>


  <?php require_once "templates/header.phtml";?>

                <a href="" class="float">
                  <i class='bx bx-message-rounded-detail my-float'></i>
                </a>
           
  <!-- home -->
  <section id="home" class="wrap-banner">
    <div class="container-full">
      <div id="carouselBanner" class="carousel slide carousel-banner" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselBanner" data-slide-to="0" class="active"></li>
          <li data-target="#carouselBanner" data-slide-to="1"></li>
          <li data-target="#carouselBanner" data-slide-to="2"></li>
          <li data-target="#carouselBanner" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner ">


        <div class="carousel-item active">
            <picture>
              <source srcset="img/banner/brn-sm-01.jpg" media="(max-width: 700px)">
              <img srcset="img/banner/brn-01.jpg" class="img-fluid img-carousel" alt="">
            </picture>


            <div class="carousel-caption text_slider">
              <h1 class="h1 text-left ">
                <small class="text-primary f-montserrat fw-700 fs-2x-25">Rastrea</small><br>
                <small class="text-dark f-montserrat fw-700 fs-2x-25">tu Vehículo</small><br>
                <small class="text-dark f-montserrat fw-700 fs-1x-25">desde cualquier lugar</small>
              </h1>
              <div class="nav-item ">
                <a class="nav-link text-md-center t-montserrat bg-primary text-white py-2 px-4 <?php if ($setvar['active'][0] == 7) {echo 'active';}?> contact"
                  href="contactanos">
                  <span>Más Información</span>
                </a>
              </div>
            </div>
          </div>

          <!-- <div class="carousel-item active">
            <picture>
              <source srcset="img/banner_1.png" media="(max-width: 700px)">
              <img srcset="img/banner_1.png" class="img-fluid img-carousel" alt="">
            </picture>
            <div class="carousel-caption">
              <img srcset="img/banner_0_5.png" class="img-fluid img-carousel" alt="">
            </div>
            <div class="carousel-caption camion">
              <img srcset="img/camion.png" class="img-fluid img-carousel">
            </div>
            <div class="carousel-caption celular">
              <img srcset="img/celular.png" class="img-fluid img-carousel">
            </div>
            <div class="carousel-caption text_slider">
              <h2 class="h1 fw-700 text-left title-banner ">
                <small class="title_1">Rastrea</small><br>
                <small class="title_2">tu Vehículo</small>
                <small class="title_3">desde cualquier lugar</small>
              </h2>
              <div class="nav-item ">
                <a class="nav-link text-md-center mas_info <?php if ($setvar['active'][0] == 7) {echo 'active';}?> contact"
                  href="contactanos">
                  <span>Más Información</span>
                </a>
              </div>
            </div>
          </div> -->

          <!-- <div class="carousel-item">
            <picture>
              <source srcset="img/banner_1.png" media="(max-width: 700px)">
              <img srcset="img/banner_1.png" class="img-fluid img-carousel" alt="">
            </picture>
            <div class="carousel-caption">
              <img srcset="img/banner_0_5.png" class="img-fluid img-carousel" alt="">
            </div>
            <div class="carousel-caption camion">
              <img srcset="img/camion.png" class="img-fluid img-carousel">
            </div>
            <div class="carousel-caption celular">
              <img srcset="img/celular.png" class="img-fluid img-carousel">
            </div>
            <div class="carousel-caption text_slider">
              <h2 class="h1 fw-700 text-left title-banner ">
                <small class="title_1">Rastrea</small><br>
                <small class="title_2">tu Vehículo</small>
                <small class="title_3">desde cualquier lugar</small>
              </h2>
              <div class="nav-item ">
                <a class="nav-link text-md-center mas_info <?php if ($setvar['active'][0] == 7) {echo 'active';}?> contact"
                  href="contactanos">
                  <span>Más Información</span>
                </a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <picture>
              <source srcset="img/banner_1.png" media="(max-width: 700px)">
              <img srcset="img/banner_1.png" class="img-fluid img-carousel" alt="">
            </picture>
            <div class="carousel-caption">
              <img srcset="img/banner_0_5.png" class="img-fluid img-carousel" alt="">
            </div>
            <div class="carousel-caption camion">
              <img srcset="img/camion.png" class="img-fluid img-carousel">
            </div>
            <div class="carousel-caption celular">
              <img srcset="img/celular.png" class="img-fluid img-carousel">
            </div>
            <div class="carousel-caption text_slider">
              <h2 class="h1 fw-700 text-left title-banner ">
                <small class="title_1">Rastrea</small><br>
                <small class="title_2">tu Vehículo</small>
                <small class="title_3">desde cualquier lugar</small>
              </h2>
              <div class="nav-item ">
                <a class="nav-link text-md-center mas_info <?php if ($setvar['active'][0] == 7) {echo 'active';}?> contact"
                  href="contactanos">
                  <span>Más Información</span>
                </a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <picture>
              <source srcset="img/banner_1.png" media="(max-width: 700px)">
              <img srcset="img/banner_1.png" class="img-fluid img-carousel" alt="">
            </picture>
            <div class="carousel-caption">
              <img srcset="img/banner_0_5.png" class="img-fluid img-carousel" alt="">
            </div>
            <div class="carousel-caption camion">
              <img srcset="img/camion.png" class="img-fluid img-carousel">
            </div>
            <div class="carousel-caption celular">
              <img srcset="img/celular.png" class="img-fluid img-carousel">
            </div>
            <div class="carousel-caption text_slider">
              <h2 class="h1 fw-700 text-left title-banner ">
                <small class="title_1">Rastrea</small><br>
                <small class="title_2">tu Vehículo</small>
                <small class="title_3">desde cualquier lugar</small>
              </h2>
              <div class="nav-item ">
                <a class="nav-link text-md-center mas_info <?php if ($setvar['active'][0] == 7) {echo 'active';}?> contact"
                  href="contactanos">
                  <span>Más Información</span>
                </a>
              </div>
            </div>
          </div>
           -->
        </div>
        <a class="carousel-control-prev" href="#carouselBanner" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselBanner" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    </div>
  </section>

  <!-- Acceso Seguimiento -->
  <section>
    <div class="acceso">
      <div class="container-md-full">
        <div class="seguimiento bg-primary text-center">
          <p class="text-white f-montserrat fw-600 fs-1x-25">Acceso a Seguimiento</p>
        </div>
        <div class="pb-1 pt-md-3 pb-md-4 pb-lg-5">
          <ul class="campo_s">
            <li>
                <i class='bx bxs-user form'></i>
                <input type="text" class="radio px-3" placeholder="Ingresa tu Usuario">
            </li>
            <li>
                <i class='bx bxs-key form' ></i>
                <input type="text" class="radio px-3" placeholder="Ingresa tu Contraseña">
            </li>
            <li class="mt-2">
                <a href="" class="m-auto text-decoration-none bg-primary py-1 px-4 px-md-3 col-10 col-sm-12 rounded-pill t-montserrat text-white"><i class='bx bxs-primary'></i>Ingresar</a>
            </li>
            
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Servicios -->
  <section>
    <div class="container-md-full">
      <div class="row m-0 servicios">
        <div class="col-md-12 p-0 d-none d-lg-block text-center">
          <img class="img-fluid" src="img/banner_2.png">
        </div>
        <div class="container content_serv">
          <div class="servicio">
            <div class="">
              <img class="img-fluid" src="img/banner_2.png">
            </div>
            <div class="p-4">
              <p class="text-primary f-montserrat fw-600 fs-1x-25">Servicio Básico GPS</p>
              <p>Sistema de transmisión no continua, y bajo
              demanda, elección de equipos según la necesidad
              y control de unidades particulares.</p>
              <a href="">Ver más</a>
            </div>
          </div>
          <div class="servicio">
            <div class="">
              <img class="img-fluid" src="img/banner_2.png">
            </div>
            <div class="p-4">
              <p class="text-primary f-montserrat fw-600 fs-1x-25">Servicio Full GPS</p>
              <p>Servicio diseñado para la administración de
              Flotas vehículares, que permite el monitoreo
              continuo, los 365/12/24 del año.</p>
              <a href="">Ver más</a>
            </div>
          </div>
          <div class="servicio">
            <div class="">
              <img class="img-fluid" src="img/banner_2.png">
            </div>
            <div class="p-4">
              <p class="text-primary f-montserrat fw-600 fs-1x-25">Seguimiento de Activos</p>
              <p>Sistema de transmisión no continua, y bajo
              demanda, elección de equipos según la necesidad
              y control de unidades particulares.</p>
              <a href="">Ver más</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="m-auto">
  <div class="container productos">
    <div class="px-4 py-2 mt-4 text-white bg-primary f-montserrat fw-600 fs-1x-25 rounded-pill">
      Nuestros Productos
    </div>
  </div>
  <br>
  <div class="container b-white">
    <div class="col-12">
      <div id="carousel-2" class="carousel slide carousel-foro position-relative p-3 p-sm-4 " date-ride="carousel">
        <div class="carousel-inner container-items productos" role="listbox">
          
              <div class="producto text-center m-2">
                <div class="item_f">
                    <a href="detalle-producto-cello-iq" style="">
                      <div>
                        <img srcset="img/producto_1.png" class="img-fluid">
                      </div>
                      <div class="my-2">
                        <span class="text-primary f-montserrat fw-600 fs-1x-25">Cello-IQ</span>
                      </div>
                    </a>
                </div>
              </div>

              <div class="producto text-center m-2">
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

              <div class="producto text-center m-2">
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

              <div class="producto text-center m-2">
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

              <div class="producto text-center m-2">
                <div class="item_f">
                    <a href="detalle-producto-tt8850">
                      <div class="">
                        <img srcset="img/producto_5.png" class="img-fluid">
                      </div>
                      <div class="my-2">
                        <span class="text-primary f-montserrat fw-600 fs-1x-25">TT8850</span>
                      </div>
                    </a>
                </div>
              </div>

              <div class="producto text-center m-2">
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

              <div class="producto text-center m-2">
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
  </div>
</section>

  <?php require_once "templates/footer.phtml";?>
  <?php require_once "templates/foot_links.phtml";?>
  <?php //require_once "templates/map_links.phtml";?>


  <script src="./plugins/slick/slick.min.js"></script>
  <link rel="stylesheet" href="./plugins/slick/slick.css">
  <link rel="stylesheet" href="./plugins/slick/slick-theme.css">

  <script>
    $(document).ready(function () {

      $('.container-items').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        responsive: [

          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              // slidesToScroll: 3,
              infinite: true,
              // dots: true
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
              // slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              // slidesToScroll: 1
            }
          }
        ]

      });
    });
  </script>


</body>

</html>