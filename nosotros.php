<!DOCTYPE html>
<html lang="es">

<head>
  <?php
    $setvar = array(
      "titulo"      => "Nosotros",
      "follow"      => "",
      "description" => "",
      "keywords"    => "",
      "active"      => [2, 0],
    );

  require_once "templates/head_links.phtml";
  ?>

</head>

<body>

  <?php require_once "templates/header.phtml";?>

  <!-- home -->
  <section class="container-fluid m-0 p-0  wrap-s1 position-relative">
    <img class="img-wrap img-fluid w-100" src="./img/nosotros/quienes-somos.png" alt="">
    <div class="position-absolute w-100 wrap-text">
      <div class="container wrap-content">
        <h1 class="text-white h1 fw-600">Nosotros</h1>
      </div>
    </div>
  </section>

  <section>

    <div class="container py-4 py-md-5">
      <div class="row">
      <div class="col-sm-12 col-md-6 mx-auto my-3">
          <div class="t-montserrat text-justify nuestra_empresa">
            <h2 class="text-justify text-primary text-bold mt-1 mb-5">Nuestra <br> empresa</h2>
            <p>
              <span class="text-bold text-primary">TIGERSOFT</span>, es una empresa Peruana especializada en el
              desarrollo de sistemas de integración, implementando soluciones
              a medida, entre ellos Sistemas de gestión, ERP´s, Integracion
              modular de sistemas Contables, Sistemas de Rastreo
              GPS, entreo otros.
            </p>
            <p><span class="text-bold text-primary">TIGERSOFT</span> cuenta con autorización del MTC a través del
              permiso de Casa Comercializadora de equipos y Aparatos de
              Telecomunicaciones, así mismo cuenta con el respaldo de la
              Firma Israelí Pointer Ltda, para el uso y distribución de los
              Equipos GPS de alta Gama Cello F, IQ40, IQ50, entre otros.
              Nuestra filosofía de trabajo es brindar a cada uno de nuestros
              usuarios herramientas tecnológicas capaces de responder
              ante eventualidades de siniestro.
            </p>
            <div class="text-center text-md-left">
              <a class="fw-600 fs-1x-25" href="">Contactar</a>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 text-center text-md-left m-2 m-md-auto">
          <img class="img-fachada img-fluid" src="./img/nosotros/nosotros_1.png" alt="">
        </div>
      </div>
    </div>

    <div class="container ">
      <div class="d-inline d-md-flex pl-1 pt-1 pr-1 pl-md-2 pr-md-2 pl-lg-5 pr-lg-5">
        <div class="col-12 col-md-6 p-2 p-md-5">
          <div class="h-100 nos-text">
            <div class="t-montserrat text-white fw-700 h2 bg-primary pr-3 pl-3 pt-2 pb-2">Misión</div>
            <div class="t-montserrat text-justify p-3" style="background: #f5f5f5;">
              <p>Brindar soluciones de alta gama ofreciendo
                equipos de alta tecnología, administrables y
                homologados en el mercado nacional y regional.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 p-2 p-md-5">
          <div class="h-100 nos-text">
            <div class="t-montserrat text-white fw-700 h2 bg-primary pr-3 pl-3 pt-2 pb-2">Visión</div>
            <div class="t-montserrat text-justify p-3" style="background: #f5f5f5;">
              <p>Liderar el mercado Regional, en distribución,
                comercialización e instalación de equipos
                AVL/GPS/GPRS.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="d-inline d-md-flex pl-1 pt-1 pr-1 pl-md-2 pr-md-2 pl-lg-5 pr-lg-5">
        <div class="col-12 col-md-6 p-2 p-md-5">
          <div class="h-100 nos-text">
            <div class="t-montserrat text-white fw-700 h2 bg-primary pr-3 pl-3 pt-2 pb-2">Valores</div>
            <div class="t-montserrat text-justify p-3" style="background: #f5f5f5;">
              <p>Nuestro personal, busca siempre llevar cada
                tarea seguido de nuestros valores: la Innovación,
                Integridad, Confianza, Respeto.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 p-2 p-md-5" >
          <div class="h-100 nos-text">
            <div class="t-montserrat text-white fw-700 h2 bg-primary pr-3 pl-3 pt-2 pb-2">Fortalezas</div>
            <div class="t-montserrat text-justify p-3">
              <p>Nuestras principales Fortalezas están basadas
                en la Tecnología, Experiencia y Flexibilidad.</p>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    
  </section>

  <section class="sec_productos">
        <div class="container">
          <div class="w-100 mb-4 fs-x-14 text-justify ">

            <h2 class="text-justify text-primary text-bold mt-1 mb-5">Nuestro equipo</h2>

            <p class="texto_nosotros ">
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
              erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
              consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,
            </p>
          </div>
        </div>
  <div class="carrucel_1 container">
    <div class="col-12 py-2">
      <div id="carousel-2" class="carousel slide position-relative p-0 p-lg-5 m-auto col-10 col-lg-12" date-ride="carousel">
        <div class="carousel-inner container-items" role="listbox">

              <div class="equipo text-center">
                <div class="item_f">
                      <div class="mb-5 m-sm-1 m-md-0">
                        <img srcset="img/nosotros/equipo.png" class="img-fluid">
                        <div class="position-relative ">
                          <div class="nos-text caja_img">
                            <span class="text-primary">Nombre / Apellidos</span>
                            <span class="sombreado">CARGO - FUNCIÓN</span>
                          </div>
                        </div>
                      </div>
                </div>
              </div>

              <div class="equipo text-center">
                <div class="item_f">
                      <div class="mb-5 m-sm-1 m-md-0">
                        <img srcset="img/nosotros/equipo.png" class="img-fluid">
                        <div class="position-relative ">
                          <div class="nos-text caja_img">
                            <span class="text-primary">Nombre / Apellidos</span>
                            <span class="sombreado">CARGO - FUNCIÓN</span>
                          </div>
                        </div>
                      </div>
                </div>
              </div>

              <div class="equipo text-center">
                <div class="item_f">
                      <div class="mb-5 m-sm-1 m-md-0">
                        <img srcset="img/nosotros/equipo.png" class="img-fluid">
                        <div class="position-relative ">
                          <div class="nos-text caja_img">
                            <span class="text-primary">Nombre / Apellidos</span>
                            <span class="sombreado">CARGO - FUNCIÓN</span>
                          </div>
                        </div>
                      </div>
                </div>
              </div>

              <div class="equipo text-center">
                <div class="item_f">
                      <div class="mb-5 m-sm-1 m-md-0">
                        <img srcset="img/nosotros/equipo.png" class="img-fluid">
                        <div class="position-relative ">
                          <div class="nos-text caja_img">
                            <span class="text-primary">Nombre / Apellidos</span>
                            <span class="sombreado">CARGO - FUNCIÓN</span>
                          </div>
                        </div>
                      </div>
                </div>
              </div>

            <div class="equipo text-center">
                <div class="item_f">
                      <div class="mb-5 m-sm-1 m-md-0">
                        <img srcset="img/nosotros/equipo.png" class="img-fluid">
                        <div class="position-relative ">
                          <div class="nos-text caja_img">
                            <span class="text-primary">Nombre / Apellidos</span>
                            <span class="sombreado">CARGO - FUNCIÓN</span>
                          </div>
                        </div>
                      </div>
                </div>
              </div>

              <div class="equipo text-center">
                <div class="item_f">
                      <div class="mb-5 m-sm-1 m-md-0">
                        <img srcset="img/nosotros/equipo.png" class="img-fluid">
                        <div class="position-relative ">
                          <div class="nos-text caja_img">
                            <span class="text-primary">Nombre / Apellidos</span>
                            <span class="sombreado">CARGO - FUNCIÓN</span>
                          </div>
                        </div>
                      </div>
                </div>
              </div>

              <div class="equipo text-center">
                <div class="item_f">
                      <div class="mb-5 m-sm-1 m-md-0">
                        <img srcset="img/nosotros/equipo.png" class="img-fluid">
                        <div class="position-relative ">
                          <div class="nos-text caja_img">
                            <span class="text-primary">Nombre / Apellidos</span>
                            <span class="sombreado">CARGO - FUNCIÓN</span>
                          </div>
                        </div>
                      </div>
                </div>
              </div>
              
              <div class="equipo text-center">
                <div class="item_f">
                      <div class="mb-5 m-sm-1 m-md-0">
                        <img srcset="img/nosotros/equipo.png" class="img-fluid">
                        <div class="position-relative">
                          <div class="nos-text caja_img">
                            <span class="text-primary">Nombre / Apellidos</span>
                            <span class="sombreado">CARGO - FUNCIÓN</span>
                          </div>
                        </div>
                      </div>
                </div>
              </div>

        </div>
      </div>
    </div>
  </div>
</section>

  <?php require_once "templates/footer.phtml";?>
  <?php require_once "templates/foot_links.phtml";?>
  <?php /* require_once "templates/map_links.phtml"; */?>

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