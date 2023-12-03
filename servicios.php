<!DOCTYPE html>
<html lang="es">

<head>
  <?php
    $setvar = array(
      "titulo"      => "Nuestros Servicios",
      "follow"      => "",
      "description" => "",
      "keywords"    => "",
      "active"      => [3, 0],
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
        <h1 class="text-white h1 fw-600">Servicios</h1>
      </div>
    </div>
  </section>

  <section>
    <div class=" m-0 p-0 ">
      <div class="d-inline d-md-flex">
        <div class="col-sm-12 col-md-6 text-right m-2 m-md-auto pl-0">
          <img class="img-fachada img-fluid" src="./img/servicios/servicios.png" alt="">
        </div>
        <div class="col-sm-12 col-md-6 m-auto p-5">
          <div class="t-montserrat text-justify nuestra_empresa" style="max-width: 800px;">
            <h2 class="text-justify text-primary text-bold mt-1 mb-5">Seguridad en <br> todo momento</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, expedita error veritatis accusamus
              enim at architecto autem sint vitae officiis pariatur veniam. Impedit aperiam aliquid quisquam veniam quos
              eius optio.
            </p>
            <div class="text-center text-md-left">
              <a class="fw-600 fs-1x-25" href="">Contactar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="img-bg-cover  d-flex align-items-center"
    style="background-image: url('./img/servicios/servicios_2.png');">

    <div class="container py-5">
      <div class="container text-white">
        <h2>Servicios</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, expedita error veritatis accusamus enim at
          architecto autem sint vitae officiis pariatur veniam. Impedit aperiam aliquid quisquam veniam quos eius optio.
        </p>
        <div class="carrucel_1 container">
          <div class="col-12">
            <div id="carousel-2" class="carousel slide carousel-servicios position-relative m-auto" date-ride="carousel">
              <div class="carousel-inner container-items services pt-5" role="listbox">

                    <div class="item_foro elementos_carrucel text-center">
                      <div class="item_f m-1 m-md-3 m-lg-4 mb-lg-5">
                        <div class="enlaces">
                          <div class="mb-3 mb-md-5">
                            <a href="#">
                              <div class="ahvr-square ahvr-box-effect-1 ">
                                <img class="img-fluid image" src="img/servicios/servicio1.png" alt="Avatar">
                                <div class="overlay mb-5">
                                  <div class="box-content box-center">
                                    <h4 class="box-title"> <span> Servicio 1 </span> </h4>
                                    <p class="box-text "> Best Sports Features Best Sports Features Best Sports Features
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="item_foro elementos_carrucel text-center pb-5">
                      <div class="item_f m-1 m-md-3 m-lg-4">
                        <div class="enlaces">
                          <div class="mb-3 mb-md-5">
                            <a href="#">
                              <div class="ahvr-square ahvr-box-effect-1">
                                <img class="img-fluid image" src="img/servicios/servicio2.png" alt="Avatar">
                                <div class="overlay mb-5">
                                  <div class="box-content box-center">
                                    <h4 class="box-title"> <span> Servicio 2 </span> </h4>
                                    <p class="box-text "> Best Sports Features Best Sports Features Best Sports Features
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="item_foro elementos_carrucel text-center pb-5">
                      <div class="item_f m-1 m-md-3 m-lg-4">
                        <div class="enlaces">
                          <div class="mb-3 mb-md-5">
                            <a href="#">
                              <div class="ahvr-square ahvr-box-effect-1">
                                <img class="img-fluid image" src="img/servicios/servicio3.png" alt="Avatar">
                                <div class="overlay mb-5">
                                  <div class="box-content box-center">
                                    <h4 class="box-title"> <span> Servicio 3 </span> </h4>
                                    <p class="box-text "> Best Sports Features Best Sports Features Best Sports Features
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="item_foro elementos_carrucel text-center pb-5">
                      <div class="item_f m-1 m-md-3 m-lg-4 mb-lg-5">
                        <div class="enlaces">
                          <div class="mb-3 mb-md-5">
                            <a href="#">
                              <div class="ahvr-square ahvr-box-effect-1">
                                <img class="img-fluid image" src="img/servicios/servicio3.png" alt="Avatar">
                                <div class="overlay mb-5">
                                  <div class="box-content box-center">
                                    <h4 class="box-title"> <span> Servicio 4 </span> </h4>
                                    <p class="box-text "> Best Sports Features Best Sports Features Best Sports Features
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="item_foro elementos_carrucel text-center pb-5">
                      <div class="item_f m-1 m-md-3 m-lg-4">
                        <div class="enlaces">
                          <div class="mb-3 mb-md-5">
                            <a href="#">
                              <div class="ahvr-square ahvr-box-effect-1">
                                <img class="img-fluid image" src="img/servicios/servicio1.png" alt="Avatar">
                                <div class="overlay mb-5">
                                  <div class="box-content box-center">
                                    <h4 class="box-title"> <span> Servicio 5 </span> </h4>
                                    <p class="box-text "> Best Sports Features Best Sports Features Best Sports Features
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="item_foro elementos_carrucel text-center pb-5">
                      <div class="item_f m-1 m-md-3 m-lg-4">
                        <div class="enlaces">
                          <div class="mb-3 mb-md-5">
                            <a href="#">
                              <div class="ahvr-square ahvr-box-effect-1">
                                <img class="img-fluid image" src="img/servicios/servicio2.png" alt="Avatar">
                                <div class="overlay mb-5">
                                  <div class="box-content box-center">
                                    <h4 class="box-title"> <span> Servicio 6 </span> </h4>
                                    <p class="box-text "> Best Sports Features Best Sports Features Best Sports Features
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>
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

  <section>

    <div class="container py-4">
      <div class="w-100 mb-4 fs-x-14 text-justify ">

        <h2 class="text-justify text-primary text-bold mt-1 mb-5">Principales clientes</h2>

        <p class="t-montserrat text-justify">
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
          dolore magna aliquam
          erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
          aliquip ex ea commodo
          consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,
        </p>
      </div>

      <div class="carrucel_1 container">
        <div class="col-12">
          <div id="carousel-2" class="carousel slide carousel-servicios position-relative" date-ride="carousel">
            <div class="carousel-inner container-items clientes pt-5" role="listbox">
            
            <div class="col-12 col-sm-6 col-md-4 p-3 mt-5">
            <img class="img-fluid image" src="img/servicios/cliente_1.jpg" alt="Cliente">
            </div>
            <div class="col-12 col-sm-6 col-md-4 p-3 mt-4">
              <img class="img-fluid image" src="img/servicios/cliente_2.jpg" alt="Cliente">
            </div>
            <div class="col-12 col-sm-6 col-md-4 p-3">
              <img class="img-fluid image" src="img/servicios/cliente_3.jpg" alt="Cliente">
            </div>
            <div class="col-12 col-sm-6 col-md-4 p-3 mt-5"">
            <img class="img-fluid image" src="img/servicios/cliente_1.jpg" alt="Cliente">
            </div>
            <div class="col-12 col-sm-6 col-md-4 p-3 mt-4">
              <img class="img-fluid image" src="img/servicios/cliente_2.jpg" alt="Cliente">
            </div>
            <div class="col-12 col-sm-6 col-md-4 p-3">
              <img class="img-fluid image" src="img/servicios/cliente_3.jpg" alt="Cliente">
            </div>

            </div>
          </div>
        </div>
      </div>

      <!-- <div class="col-12 d-inline d-md-flex text-center">
        <div class="row"> -->
          
          <!-- <div>
            <img class="img-fluid image" src="img/servicios/repsol.png" alt="Cliente">
          </div>
          <div>
            <img class="img-fluid image" src="img/servicios/oltursa.png" alt="Cliente">
          </div> -->
        <!-- </div>
      </div> -->
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
        slidesToShow: 3,
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