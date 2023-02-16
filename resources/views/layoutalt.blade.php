<style>
  .osk-custom {
    background-color: #6d767e;
  }

  .osk-custom2 {
    backdrop-filter: invert(.2) blur(10px);
  }

  .osk-customs {
    z-index: 5000;
    backdrop-filter: invert(.2) blur(10px);
  }

  .oska {
    padding-left: 12.33vw;
    padding-right: 15vw;
  }

  .avatar {
    vertical-align: middle;
    width: 50px;
    height: 50px;
    border-radius: 50%;
  }
</style>

<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Baucampus</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/vendor/aos/aos.css" rel="stylesheet">
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/style.css" rel="stylesheet">

</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-secondary shadow">
    <div class="container-fluid">
      <button class="d-block d-xl-none navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarprofile" aria-controls="sidebarprofile"><i class="bi bi-person-circle"></i></button>
      <a class="navbar-brand" href="#">Baucampus</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end text-bg-dark d-block bg-secondary" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Baucampus</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Leistungen
              </a>
              <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="/baubegleitung">Baubegelitung</a></li>
                <li><a class="dropdown-item" href="/bauschaden">Bauschaden</a></li>
                <li><a class="dropdown-item" href="/energieberatung">Energieberatung</a></li>
                <li><a class="dropdown-item" href="/hauskaufberatung">Hauskaufberatung</a></li>
                <li><a class="dropdown-item" href="/immobilienbewertung">Immobilienbewertung</a></li>
                <li><a class="dropdown-item" href="/schimmelpilz">Schimmelpilz</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Über Uns
              </a>
              <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="/team"> Das Team</a></li>
                <li><a class="dropdown-item" href="#">Bauschaden</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Preise</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Kontakt</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  
  @yield('content')
    
    <section id="services" class="services">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <h4 class="title"><a href="">Baucampus</a></h4>
            <img src="/img/logo.png" alt="" style="    vertical-align: middle;
    width: 150;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
object-position: center;" class="description">
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <h4 class="title"><a href="">Themen</a></h4>
            <p class="description">@include('partials._orte')</p>
        </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <h4 class="title"><a href="">Allgemeines</a></h4>
            <a class="description link-dark" href="#"><u>Datenschutzerklärung</u></a>
            <a class="description link-dark" href="#"><u>Impressum</u></a>
          </div>
          
      </div>
    </section><!-- End Footer Section -->
  </main><!-- End #main -->



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/vendor/aos/aos.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/vendor/typed.js/typed.min.js"></script>
  <script src="/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/js/main.js"></script>

</body>

</html>