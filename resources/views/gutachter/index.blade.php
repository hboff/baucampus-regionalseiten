@php
$contact=1;
@endphp
<!-- Photoswipe library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/5.3.5/umd/photoswipe.umd.min.js" integrity="sha512-BGx0nICmNXjHxPsFbwYviMAT08lytG9dR8vnTEfxLNtCkdeALgC6nDbrhrG0DcnDufmNGFiCXgXIuPPXoo4zPA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/5.3.5/umd/photoswipe-lightbox.umd.min.js" integrity="sha512-CpBwN19ws59x5RFIMhBV+IYMhqtp4HTzVgfW1PCxkg36bwXu4tlWs47RiSUCj+EUhaeRMxj4w7CUG5v9w+7h1Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/5.3.5/photoswipe.css" integrity="sha512-OKOmvT2OKCG+gZ/a+r5CL4kiNCpeda/gwQ2H+ndaNZlwZUp29wxNcrkoJ44udPFmSP9xLxK6dWVoib963YJTCA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
  .demo a {
  position: absolute;
  bottom: 20px;
  left: 50%;
  z-index: 2;
  display: inline-block;
  -webkit-transform: translate(0, -50%);
  transform: translate(0, -50%);
  color: #fff;
  font : normal 400 20px/1 'Josefin Sans', sans-serif;
  letter-spacing: .1em;
  text-decoration: none;
  transition: opacity .3s;
}

  .demo a:hover {
  opacity: .5;
}

#section03 a {
  padding-top: 60px;
}
#section03 a span {
  position: absolute;
  top: 0;
  left: 50%;
  width: 46px;
  height: 46px;
  margin-left: -23px;
  border: 1px solid #fff;
  border-radius: 100%;
  box-sizing: border-box;
}
#section03 a span::after {
  position: absolute;
  top: 50%;
  left: 50%;
  content: '';
  width: 16px;
  height: 16px;
  margin: -12px 0 0 -8px;
  border-left: 1px solid #fff;
  border-bottom: 1px solid #fff;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  box-sizing: border-box;
}
#section03 a span::before {
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
  content: '';
  width: 44px;
  height: 44px;
  box-shadow: 0 0 0 0 rgba(255,255,255,.1);
  border-radius: 100%;
  opacity: 0;
  -webkit-animation: sdb03 3s infinite;
  animation: sdb03 3s infinite;
  box-sizing: border-box;
}
@-webkit-keyframes sdb03 {
  0% {
    opacity: 0;
  }
  30% {
    opacity: 1;
  }
  60% {
    box-shadow: 0 0 0 60px rgba(255,255,255,.1);
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}
@keyframes sdb03 {
  0% {
    opacity: 0;
  }
  30% {
    opacity: 1;
  }
  60% {
    box-shadow: 0 0 0 60px rgba(255,255,255,.1);
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
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

@foreach ($gutachter as $gutachters)
@if ($name == $gutachters['UrlName'])
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1> {{$gutachters['FirstName']}} {{$gutachters['LastName']}} </h1>
      <p>Ich bin <span class="typed" data-typed-items="Gutachter, Unternehmer, Bausachverständiger"></span>
      </p>
    </div>
    <section id="section03" class="demo">
  <a href="#about"><span></span>Scroll</a>
</section>
  </section><!-- End Hero -->


    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Über mich</h2>
          <p>{{$gutachters['Text']}}
          </p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="/img/{{$gutachters['Photo']}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Unternehmer &amp; Bausachverständiger</h3>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Geburtstag:</strong> <span> {{ date('d.m.Y', strtotime($gutachters['BirthDate'])) }} </span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                   <a href="{{$gutachters['Website']}}"> <span>{{$gutachters['Website']}}</span></a>
                  </li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Telefon:</strong> <span> {{$gutachters['Phone']}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Stadt:</strong> <span> {{$gutachters['Adress']}}, {{$gutachters['PostalCode']}} {{$gutachters['City']}}</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Alter:</strong> <span>{{ floor((time() - strtotime($gutachters['BirthDate'])) / (60 * 60 * 24 * 365)) }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{$gutachters['Degree']}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{$gutachters['Email']}}</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <div class="container">
    <div class="test-gallery">
    
@foreach ($gutachter_certificates as $certificate)
    @if ($gutachters['PartnerID'] == $certificate['PartnerID'])
    <div class="section-title">
    <h2>Zertifikate</h2>
</div>    
    @break
       @endif
 @endforeach
 @foreach ($gutachter_certificates as $certificate)
    @if ($gutachters['PartnerID'] == $certificate['PartnerID'])
      <a href="/img/certificates/{{$certificate['Certificate']}}.jpg" data-pswp-width="450" data-pswp-height="600">
        <img src="/img/certificates/{{$certificate['Certificate']}}.jpg"  width="150" height="200" alt="" />
      </a>
      @else
       @endif
 @endforeach
    </div>
</div>
    <script type="text/javascript">
      var lightbox = new PhotoSwipeLightbox({
        gallery: '.test-gallery',
        children: 'a',
        // dynamic import is not supported in UMD version
        pswpModule: PhotoSwipe 
      });
      lightbox.init();
    </script>


    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Lebenslauf</h2>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>{{$gutachters['FirstName']}} {{$gutachters['LastName']}}</h4>
              <p><em>Bausachverständiger bei Baucampus</em></p>
              <ul>
                <li>{{$gutachters['Adress']}}, {{$gutachters['PostalCode']}} {{$gutachters['City']}}</li>
                <li>{{$gutachters['Phone']}}</li>
                <li>{{$gutachters['Email']}}</li>
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
@foreach ($vitas as $vita)
@if ($gutachters['PartnerID'] == $vita['PartnerID'])
            <div class="resume-item">
              <h4>{{$vita['Degree']}}</h4>
              <h5>{{$vita['Time']}}</h5>
              <p><em>{{$vita['Description']}}</em></p>
            </div>
            @else
@endif
@endforeach
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Professional Experience</h3>
            @foreach ($professional_experience as $experience)
    @if ($gutachters['PartnerID'] == $experience['PartnerID'])
            <div class="resume-item">
              <h4>{{$experience['Title']}}</h4>
              <h5>{{$experience['Time']}}</h5>
              <p>{{$experience['Title']}}</p>
            </div>
            @else
            @endif
            
            @endforeach
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>

        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="bi bi-briefcase"></i></div>
            <h4 class="title"><a href="">Baubegleitung</a></h4>
            <p class="description">Bei der Baubegleitung erfahren Sie Unterstützung bei der Durchführung ihres Neubaus,
              aus unabhängiger und neutraler
              Sicht eines Bausachverständigen.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi bi-card-checklist"></i></div>
            <h4 class="title"><a href="">Bauschaden</a></h4>
            <p class="description">Ein Bauschaden, infolge eines Baumangels bedeutet eine Verschlechterung einer
              Immobilie und muss zügig erkannt und
              beseitigt werden.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-bar-chart"></i></div>
            <h4 class="title"><a href="">Energieberatung</a></h4>
            <p class="description">Bei der Energieberatung beraten wir Sie, wie Sie Energie einsparen und welche
              Fördermittel beantragt werden können.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-binoculars"></i></div>
            <h4 class="title"><a href="">Hauskaufberatung</a></h4>
            <p class="description">Die Hauskaufberatung hilft Ihnen bei der Suche nach einem Haus und gibt ihnen eine
              professionelle und unabhängige
              Expertise.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="bi bi-brightness-high"></i></div>
            <h4 class="title"><a href="">Immobilienbewertung</a></h4>
            <p class="description">Auf Basis von Baujahr, Zustand der Bausubstanz und Ausstattung den Wert des Gebäudes
              und addiert den Wert des Grundstücks hinzu.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
            <h4 class="title"><a href="">Schimmelpilz</a></h4>
            <p class="description">Schimmelpilz befällt Stellen in einem Raum in ihrem Haus oder ihrer
              Wohnung. Schimmelpilz
              kann unschön bis gefährlich sein.</p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->
    @else
@endif
@endforeach
    @include('partials._contact')
    @include('partials._footer2')




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
 <script>var pswpElement = document.querySelectorAll('.pswp')[0];

// build items array
var items = [];
var galleryElements = document.querySelectorAll('.my-gallery a');
for (var i = 0, l = galleryElements.length; i < l; i++) {
  items.push({
    src: galleryElements[i].getAttribute('href'),
    w: parseInt(galleryElements[i].getAttribute('data-size').split('x')[0]),
    h: parseInt(galleryElements[i].getAttribute('data-size').split('x')[1]),
  });
}

// define options (if needed)
var options = {
  // optionName: 'option value'
  // for example:
  index: 0 // start at first slide
};

// Initialize PhotoSwipe
var gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
gallery.init();</script>
</body>

</html>
 @include('partials._themen')