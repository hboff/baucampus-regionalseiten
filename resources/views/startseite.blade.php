<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://baucampus.ch/w3.css">
    <link rel="stylesheet" type="text/css" href="https://baucampus.ch/style.css">
    <link rel="stylesheet" href="https://baucampus.ch/ideen-style.css">
    <link rel="stylesheet" type="text/css" href="https://baucampus.ch/kontakt-style.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href="/style.css" rel="stylesheet">


    <link href="/vendor/aos/aos.css" rel="stylesheet">
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    @php
        $contact=2;
    @endphp
    <title>Baugutchter {{$domainort}}</title>
<meta name="Description" content="Baugutachter {{$domainort}}">
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

        .zooma {
            overflow: hidden;
        }

        .zooma img {
            width: 100%;
            height: auto;
            /* SCALE */
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1);
            /* VERZÖGERUNG */
            -webkit-transition: all 0.3s linear;
            -moz-transition: all 0.3s linear;
            -ms-transition: all 0.3s linear;
            -o-transition: all 0.3s linear;
            transition: all 0.3s linear;
        }

        .zooma img:hover {
            -webkit-transform: scale(1.2);
            -moz-transform: scale(1.2);
            -ms-transform: scale(1.2);
            -o-transform: scale(1.2);
            transform: scale(1.2);
        }


        .heading-separator {
            position: relative;
            margin: 0;
            padding-bottom: 70px;
            color: #26292c;

        }

        .heading-separator:after {
            content: "";
            position: absolute;
            bottom: 25px;
            left: 0;
            right: 0;
            height: 2px;
            width: 50px;
            margin: 0 auto;
            background-color: #267df4;
        }

        /* Section: Features */
        .section-features h2 {
            padding-bottom: 40px;
            font-size: 30px;
        }

        .section-features img {
            position: absolute;
            right: 15px;
            height: 380px;
        }

        .subheading-text {
            font-size: 20px;
            font-style: italic;
        }

        /* Section: Services */
        .section-services .subheading-text {
            margin-bottom: 90px;
        }

        p+p {
            margin-top: 1vh;
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
            font: normal 400 20px/1 'Josefin Sans', sans-serif;
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
            box-shadow: 0 0 0 0 rgba(255, 255, 255, .1);
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
                box-shadow: 0 0 0 60px rgba(255, 255, 255, .1);
                opacity: 0;
            }

            100% {
                opacity: 0;
            }
        }

        <blade keyframes|%20sdb03%20%7B%0D>0% {
            opacity: 0;
        }

        30% {
            opacity: 1;
        }

        60% {
            box-shadow: 0 0 0 60px rgba(255, 255, 255, .1);
            opacity: 0;
        }

        100% {
            opacity: 0;
        }
        

    </style>
</head>

<body>

    <div class="w3-top w3-text-white w3-osk-customs">

        <div class="w3-bar w3-text-white" id="myNavbar">
            <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-left"
                href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
                Baucampus
            </a>

            <a class="w3-bar-item w3-button w3-hover-black w3-hide-large w3-right" href="javascript:void(0);"
                onclick="toggleFunction()" title="Toggle Navigation Menu">
                Nav<i class="fa fa-bars"></i>
            </a>

            <a href="/" class="w3-hide-small w3-left hover-underline-animation oskkk text-white"
                style="padding-left:100px;">Baucampus</a>
            <a href="/kontakt" class=" w3-hide-small w3-hide-medium w3-right hover-underline-animation oskkk text-white"
                style="padding-right:100px;">Kontakt</a>
            <a href="/kosten-preise"
                class=" w3-hide-small w3-hide-medium w3-right hover-underline-animation oskkk text-white">Preise</a>

            <div class="w3-dropdown-hover w3-hide-small w3-hide-medium w3-right ">
                <a class=" hover-underline-animation oskkk text-white">Über uns &#9207;</a>
                <div class="w3-dropdown-content w3-bar-block w3-card" style="position:fixed;">
                    <a href="/gutachter" class="w3-bar-item w3-button" style="font-size:20px;"
                        title="Gutachter Baucampus">Gutachter</a>
                    <a href="/research" class="w3-bar-item w3-button" style="font-size:20px;"
                        title="Marktberichte Baucampus">Marktberichte</a>
                    <a href="/team" class="w3-bar-item w3-button" style="font-size:20px;"
                        title="Marktberichte Baucampus">Team</a>
                    <a href="https://baucampus.com" class="w3-bar-item w3-button" style="font-size:20px;"
                        title="Marktberichte Baucampus">Partner werden</a>

                </div>
            </div>


            <div class="w3-dropdown-hover w3-hide-small w3-hide-medium w3-right ">
                <a class=" hover-underline-animation oskkk text-white">Leistungen &#9207;</a>
                <div class="w3-dropdown-content w3-bar-block w3-card-4" style="position:fixed;">
                    <a href="/baubegleitung" class="w3-bar-item w3-button" style="font-size:20px;"
                        title="Baubegleitung">Baubegleitung</a>
                    <a href="/bauschaden" class="w3-bar-item w3-button" style="font-size:20px;"
                        title="Bauschaden">Bauschaden</a>
                    <a href="/energieberatung" class="w3-bar-item w3-button" style="font-size:20px;"
                        title="Energieberatung">Energieberatung</a>
                    <a href="/hauskaufberatung" class="w3-bar-item w3-button" style="font-size:20px;"
                        title="Hauskaufberatung">Hauskaufberatung</a>
                    <a href="/immobilienbewertung" class="w3-bar-item w3-button" style="font-size:20px;"
                        title="Immobilienbewertung">Immobilienbewertung</a>
                    <a href="/schimmelpilz" class="w3-bar-item w3-button" style="font-size:20px;"
                        title="Schimmelpilz">Schimmelpilz</a>
                </div>
            </div>

        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
            <a href="/" class="w3-bar-item w3-button" onclick="toggleFunction()">Baucampus</a>
            <a href="/baubegleitung" title="Baubegleitung" class="w3-bar-item w3-button"
                onclick="toggleFunction()">Baubegleitung</a>
            <a href="/bauschaden" title="Bauschaden" class="w3-bar-item w3-button"
                onclick="toggleFunction()">Bauschaden</a>
            <a href="/energieberatung" title="Energieberatung" class="w3-bar-item w3-button"
                onclick="toggleFunction()">Energieberatung</a>
            <a href="/hauskaufberatung" title="Hauskaufberatung" class="w3-bar-item w3-button"
                onclick="toggleFunction()">Hauskaufberatung</a>
            <a href="/immobilienbewertung" title="Immobilienbewertung" class="w3-bar-item w3-button"
                onclick="toggleFunction()">Immobilienbewertung</a>
            <a href="/schimmelpilz" title="Schimmelpilz" class="w3-bar-item w3-button"
                onclick="toggleFunction()">Schimmelpilz</a>
            <a href="/gutachter" title="Gutachter Baucampus" class="w3-bar-item w3-button"
                onclick="toggleFunction()">Gutachter</a>
            <a href="/research" title="Marktberichte Baucampus" class="w3-bar-item w3-button"
                onclick="toggleFunction()">Marktberichte</a>

        </div>
    </div>
    <script>
        // Change style of navbar on scroll
        window.onscroll = function () {
            myFunction()
        };

        function myFunction() {
            var navbar = document.getElementById("myNavbar");
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-osk-custom";
            } else {
                navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-osk-custom", "");
            }
        }

        // Used to toggle the menu on small screens when clicking on the menu button
        function toggleFunction() {
            var x = document.getElementById("navDemo");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }

    </script>



@include('partials._sidebar2')

<main id="main">
</br>
</br>


<!-- END GRID -->
</div><br>
    <!-- ======= About Section ======= -->
    <div id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Baubegleitung {{$domainort}}</h2>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
          <p>Die <b>baubegleitende Qualitätssicherung</b> durch einen Bausachverständigen ermöglicht dem Bauherren eine neutrale Qualitätskontrolle für den Bau oder den Umbau ihrer Immobilie. Durch die steigende Konkurrenz und Kostendruck in der Baubranche leidet die Bauqualität. Hier kann ein Bausachverständiger helfend eingreifen und so Geld und Nerven sparen. Ein Baugutachter, der die <b>baubegleitende Qualitätssicherung</b> durchführt, stellt sicher, dass Baubeschreibung, Bauplanung und Bauausführung übereinstimmen.</p>
<p> Ein Bausachverständiger sollte schon bereits vor dem Unterzeichnen der Bauunterlagen hinzugezogen werden, um mögliche <b>Planungsfehler zu vermeiden</b>. Hierzu bieten wir in unserem Ersttermin die Prüfung der Unterlagen auf Plausibilität und Vollständigkeit und bieten eine Überprüfung der Bauunterlagen in fachtechnischer und qualitätstechnischer Hinsicht an. Zu einem vollständigen Ersttermin im Rahmen der qualitätssicherenden Baubegleitung gehört auch die Besichtigung des Grundstücks.</p>
<p>Nach dem eigentlichen Baubeginn werden durch den Bausachverständigen <b>einzelne Routinetermine</b>, also Baustellentermine, wahrgenommen, die nach der Fertigstellung einzelner Bauabschnitte erfolgen Hierzu gehören z.B. Fertigstellung des Kellers inkl. Abdichtung, nach Rohbau und Dachstuhl oder vor dem Innenputz nach erfolgter Elektro- und Sanitärinstallation. Kurz gesagt alle Arbeiten, die durch eines der nachfolgenden Gewerke verdeckt werden, werden im Verlauf der Baubegleitung durch den Baugutachter in <b>Augenschein genommen</b>.</p>
<p>Am Ende der Bauphase steht die <b>Bauabnahme</b>. Dieser Abnahmetermin ist für den Bauherrn besonders wichtig, da zum einen meist die letzte Rate für die Bauleistung fällig wird, zum anderen sich die Beweislast umkehrt und die Verjährungsfrist beginnt.</p>

          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <img src="/img/baucampus-baubegleitung.jpg" class="img-fluid" alt="">
          </div>
        </div>

      </div>
</div><!-- End About Section -->
<!-- END BLOG ENTRIES -->
</div>

<!-- END GRID -->
</div><br>

<!-- ======= About Section ======= -->
<div id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Energieberatung {{$domainort}}</h2>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
          <p>Die Energieberatung durch einen zertifizierten Energieberater an ihrer Immobilie, soll ihnen einen Überblick über mögliche <b>Modernisierungsmaßnahmen</b> sowie <b>Fördermöglichkeiten</b> geben. Unsere Energieberater beraten wertneutral und objektiv und zeigen ihnen auf welche Maßnahmen im Rahmen der Energieberatung durch einen Energieberater sinnvoll sind und welche zu einem späteren Zeitpunkt durchgeführt werden können. </p>
<p>Der Energieberater wird während der Energieberatung auf ihre Immobilie eingehen und sich ebenfalls mit den Gegebenheiten ihrer Immobilie auseinandersetzen.</p> 
<p>Da die meisten Menschen weniger über den <b>Energiebedarf von Immobilien</b> wissen, als bei anderen Gegenständen des täglichen Lebens wie z.B. Autos oder Haushaltsgeräten hat sich der Gesetzgeber dafür entschieden, dass für den Verkauf und die Vermietung von Gebäuden gültige Energieausweise gem. ENEV vorzulegen sind. Erschwert wird die Einschätzung häufig noch für Privatpersonen, dadurch das allgemeingültige Informationen über den Energieausweis Mangelware sind und Vergleichsobjekte fehlen. Der Energieberater kann ihnen sowohl bei der Erstellung des Energieausweises für ihre Immobilie helfen, als auch bei dem Kauf einer Immobilie eine <b>energetische Einschätzung</b> geben.</p> 
<p>Es gibt zwei verschieden Arten von Energieausweisen zum einen gibt es den <b>Verbrauchsausweis</b>, welcher auf von Kunden gelieferten Informationen bezüglich des Energieverbrauch der letzten drei Jahre basiert. Zum anderen gibt es den Bedarfsausweis. Der <b>Bedarfsausweis</b> wird verwendet wenn es keine bisherigen Werte gibt, die als Grundlage dienen können. Hier wird zur Berechnung die Bauform, das Alter der Immobilie, die Heizung als auch die Dämmung verwendet.</p>
 
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <img src="/img/baucampus-energieberatung.jpg" class="img-fluid" alt="">
          </div>
        </div>

      </div>
</div><!-- End About Section -->
<!-- END BLOG ENTRIES -->
</div>

<!-- END GRID -->
</div><br>
 <!-- ======= About Section ======= -->
 <div id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Schimmelpilz {{$domainort}}</h2>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
          <p>Schimmel oder eher gesagt Schimmelpilz in einem Haus oder einer Wohnung sind nicht nur eine optische Beeinträchtigung, sondern kann auch zu <b>gesundheitlichen Problemen</b> führen. Weiter schädigen Schimmelpilze die Bausubstanz ihres Gebäudes und führen zu einer <b>Wertminderung</b> der Immobilie (merkantiler Minderwert).</p>
<p>Um den Schaden durch Schimmel möglichst klein zu halten, kann einem ein Bausachverständiger <b>unkompliziert und schnell</b> helfen. Der qualifizierte Bausachverständige nimmt die von Schimmel befallenen Stellen vor Ort in Augenschein, um die möglichen Ursachen zu ermitteln und die weitere Vorgehensweise mit ihnen abzustimmen. Durch die Zusammenarbeit mit dem Gutachter bei einem Befall durch Schimmelpilze wird in der Regel die <b>Schimmelpilzsanierung</b> vereinfacht. Durch das umfassende Wissen des Bausachverständigen werden teure und oft auch halbherzige Sanierungsmaßnahmen verhindert. Wichtige Erstmaßnahmen, wie z.B. das Verhindern der Sporenverbreitung der Schimmelpilze und der Einsatz der richtigen Fachbetriebe, helfen den vorhandenen Schaden so klein wie möglich zu halten und vollständig zu beheben. Auch nach einer erfolgten Sanierung des Schimmelpilzes helfen unsere Gutachter, den Erfolg der Maßnahmen zu überprüfen und festzuhalten. Des Weiteren steht der Bausachverständige ihnen mit Rat und Tat zur Seite, um auch in Zukunft Schimmel oder Schimmelpilz in ihrer Immobilie zu vermeiden, damit Sie oder ihre Mieter wieder beruhigt in ihren 4 Wänden leben können.</p>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <img src="/img/baucampus-laptop.jpg" class="img-fluid" alt="">
          </div>
        </div>

      </div>
</div><!-- End About Section -->
<!-- END BLOG ENTRIES -->
</div>

<!-- END GRID -->
</div><br>
<!-- ======= About Section ======= -->
<div id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Bauschaden {{$domainort}}</h2>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
          <p>Die <b>baubegleitende Qualitätssicherung</b> durch einen Bausachverständigen ermöglicht dem Bauherren eine neutrale Qualitätskontrolle für den Bau oder den Umbau ihrer Immobilie. Durch die steigende Konkurrenz und Kostendruck in der Baubranche leidet die Bauqualität. Hier kann ein Bausachverständiger helfend eingreifen und so Geld und Nerven sparen. Ein Baugutachter, der die <b>baubegleitende Qualitätssicherung</b> durchführt, stellt sicher, dass Baubeschreibung, Bauplanung und Bauausführung übereinstimmen.</p>
          <p>Die Ursachen von Baumängeln und Bauschäden sind, ohne kompetente und <b>fachliche Hilfe</b> durch einen Bausachverständigen nur schwer zu ermitteln. Ein Haus ist, im Vergleich mit der Serienfertigung, immer als ein <b>handwerkliches Einzelstück</b> zu sehen, dass durch die Vielzahl der Gewerke und Materialien, Planänderungen oder Planungsfehlern nicht fehlerfrei erstellt werden kann.</p>
<p>So entstehen Baumängel, das heißt das Gebäude wurde nicht wie im Kaufvertrag oder Bauvertrag vereinbart hergestellt. Diese Baumängel führen oft zu Bauschäden, die nicht nur optische oder <b>funktionelle Beeinträchtigungen</b>, sondern sie können auch die Bausubstanz schädigen. Hierbei ist es einerlei, ob diese Bauschäden bei einem Neubau oder durch die Modernisierung einer Bestandsimmobilie entstanden sind.</p>
<p>Als Bauherr und Kunde wollen Sie diese Mängel nicht hinnehmen. Ein Bausachverständiger ist hier der <b>kompetente Ansprechpartner</b>. Der Bausachverständige kann eine neutrale Ursachenermittlung für en Baumangel bzw. Bauschaden vornehmen und helfen, das Ausmaß des Schadens durch fachlich qualifizierte Erstmaßnahmen zu begrenzen. Das einschalten eines Gutachters und dessen <b>fachliche Erläuterungen</b> bzw. dessen Gutachten gibt ihnen als Bauherr die notwendige Sicherheit mit den Handwerkern und Bauunternehmern auf Augenhöhe zu verhandeln.</p>
 
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <img src="/img/baucampus-bauschaden.jpg" class="img-fluid" alt="">
          </div>
        </div>

      </div>
</div><!-- End About Section -->
<!-- END BLOG ENTRIES -->
</div>

<!-- END GRID -->
</div><br>


@include('partials._footer4')

<!-- End Footer Section -->
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
