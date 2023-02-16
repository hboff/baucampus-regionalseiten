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
            <button class="d-block d-xl-none navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#sidebarprofile" aria-controls="sidebarprofile"><i
                    class="bi bi-person-circle"></i></button>
            <a class="navbar-brand" href="#">Baucampus</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark d-block bg-secondary" tabindex="-1"
                id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Baucampus</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
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
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
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
    @include('partials._sidebar')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
            <h1>Rainer Kößling</h1>
            <p>Ich bin <span class="typed" data-typed-items="Gutachter, Unternehmer, Bausachverständiger"></span>
            </p>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>Über mich</h2>
                    <p>Mein Name ist Rainer Kößling
                        Ich bin geprüfter und anerkannter Bausachverständiger, Energieberater sowie geprüfter
                        Fachsanierer und Tüv
                        zertifizierter Schimmelsanierer

                        Ich bin 53 Jahre alt, verheiratet, habe 4 Kinder und verfüge über fast 33 Jahre Berufserfahrung
                        in der
                        Baubranche.
                        Dieses Wissen wird durch ständige Weiterbildung und zahlreiche Schulungen noch weiter ausgebaut.



                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src="/img/profile.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>Unternehmer &amp; Bausachverständiger</h3>
                        <p class="fst-italic">
                            Telefon: 0176 56908588

                            Email: koessling@baucampus.de
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Geburtstag:</strong> <span>1 April
                                            1969</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                                        <span>www.baugutachter-kiel.eu</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Telefon:</strong> <span>0176
                                            56908588</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Stadt:</strong> <span> Neuenrade 4,
                                            23823
                                            Seedorf</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Alter:</strong> <span>53</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Master</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                        <span>koessling@baucampus.de</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->



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
                            <h4>Rainer Kößling</h4>
                            <p><em>Bausachverständiger bei Baucampus</em></p>
                            <ul>
                                <li>Neuenrade 4, 23823 Seedorf</li>
                                <li>0176 56908588</li>
                                <li>koessling@baucampus.de</li>
                            </ul>
                        </div>

                        <h3 class="resume-title">Education</h3>
                        <div class="resume-item">
                            <h4>Master of Fine Arts &amp; Graphic Design</h4>
                            <h5>2015 - 2016</h5>
                            <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
                            <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero
                                voluptatum qui
                                ut dignissimos deleniti nerada porti sand markend</p>
                        </div>
                        <div class="resume-item">
                            <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
                            <h5>2010 - 2014</h5>
                            <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
                            <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel
                                ratione eius
                                unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque
                                etlon sader mart
                                dila</p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="resume-title">Professional Experience</h3>
                        <div class="resume-item">
                            <h4>Senior graphic design specialist</h4>
                            <h5>2019 - Present</h5>
                            <p><em>Experion, New York, NY </em></p>
                            <ul>
                                <li>Lead in the design, development, and implementation of the graphic, layout, and
                                    production
                                    communication materials</li>
                                <li>Delegate tasks to the 7 members of the design team and provide counsel on all
                                    aspects of the
                                    project. </li>
                                <li>Supervise the assessment of all graphic materials in order to ensure quality and
                                    accuracy of the
                                    design</li>
                                <li>Oversee the efficient use of production project budgets ranging from $2,000 -
                                    $25,000</li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>Graphic design specialist</h4>
                            <h5>2017 - 2018</h5>
                            <p><em>Stepping Stone Advertising, New York, NY</em></p>
                            <ul>
                                <li>Developed numerous marketing programs (logos, brochures,infographics, presentations,
                                    and
                                    advertisements).</li>
                                <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                                <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                                <li>Created 4+ design presentations and proposals a month for clients and account
                                    managers</li>
                            </ul>
                        </div>
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
                        <p class="description">Bei der Baubegleitung erfahren Sie Unterstützung bei der Durchführung
                            ihres Neubaus,
                            aus unabhängiger und neutraler
                            Sicht eines Bausachverständigen.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bi bi-card-checklist"></i></div>
                        <h4 class="title"><a href="">Bauschaden</a></h4>
                        <p class="description">Ein Bauschaden, infolge eines Baumangels bedeutet eine Verschlechterung
                            einer
                            Immobilie und muss zügig erkannt und
                            beseitigt werden.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="bi bi-bar-chart"></i></div>
                        <h4 class="title"><a href="">Energieberatung</a></h4>
                        <p class="description">Bei der Energieberatung beraten wir Sie, wie Sie Energie einsparen und
                            welche
                            Fördermittel beantragt werden können.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="bi bi-binoculars"></i></div>
                        <h4 class="title"><a href="">Hauskaufberatung</a></h4>
                        <p class="description">Die Hauskaufberatung hilft Ihnen bei der Suche nach einem Haus und gibt
                            ihnen eine
                            professionelle und unabhängige
                            Expertise.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon"><i class="bi bi-brightness-high"></i></div>
                        <h4 class="title"><a href="">Immobilienbewertung</a></h4>
                        <p class="description">Auf Basis von Baujahr, Zustand der Bausubstanz und Ausstattung den Wert
                            des Gebäudes
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
        @include('partials._contact')
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
