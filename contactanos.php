<!DOCTYPE html>
<html lang="es">

<head>
  <?php
    $setvar = array(
    "titulo" => "Contáctanos",
    "follow" => "",
    "description" => "Contactanos",
    "keywords" => "",
    "active" => [5, 0],
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
        <h1 class="text-white h1 fw-600">Contacta con Nosotros</h1>
      </div>
    </div>
  </section>

   <!-- Map -->
    <div class="w-100 text-center">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.5883969270685!2d-77.06710938518857!3d-11.933706991542596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTHCsDU2JzAxLjQiUyA3N8KwMDMnNTMuNyJX!5e0!3m2!1sen!2spe!4v1597885834373!5m2!1sen!2spe" 
          class="w-100" width="1920" height="337" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
        </iframe>
    </div>

   <div class="container pt-4 pb-4 d-inline d-md-flex">
    <div class="col-12 col-md-8 col-lg-6">
      <?php require_once "templates/form-contact.phtml";?>
    </div>
    <div class="col-12 col-md-4 col-lg-6 m-auto">
      <h2 class="h3 text-center fw-700 text-primary mb-4"> Envíanos tu Consulta </h2>
      <p class="f-montserrat text-justify">Completa el formulario con tus datos de contacto y nos pondremos en comunicación contigo lo antes posible.</p>
      <ul class="list-group">
        <li class="p-1 list-group-item border-0">
          <i class='bx bx-phone-call text-primary p-1 rounded-circle border border-primary'></i>
          <a href="tel:015587912" class="text-dark">(+51) 01 558 7912</a>
        </li>
        <li class="p-1 list-group-item border-0">
          <i class='bx bx-phone-call text-primary p-1 rounded-circle border border-primary'></i>
          <a href="tel:971257642" class="text-dark">(+51) 971 257 642</a>
        </li>
        <li class="p-1 list-group-item border-0">
          <i class='bx bx-envelope text-primary p-1 rounded-circle border border-primary'></i>
          <a href="mailto:administracion@corptigersoft.com.pe" class="text-dark">administracion@corptigersoft.com.pe</a>
        </li>
      </ul>
    </div>
   </div>

  <div class="container pt-4 pb-4">
    <div class="d-inline d-md-flex text-center">
      <div class="col-12 col-md-6 col-lg-8 m-auto">
        <img class="img-fluid image" src="img/contactanos/contactanos_2.png" alt="Cliente">
      </div>
      <div class="col-12 col-md-6 col-lg-4 m-auto">
        <img class="img-fluid image" src="img/logo_tiger.png" alt="Cliente">
      </div>
    </div>
  </div>

  <?php require_once "templates/footer.phtml";?>
  <?php require_once "templates/foot_links.phtml";?>
  <?php /* require_once "templates/map_links.phtml"; */?>

</body>

</html>