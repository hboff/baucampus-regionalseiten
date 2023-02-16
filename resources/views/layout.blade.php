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
    @yield('head')
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



    @yield('content')
    @include('partials._contact')
    @if(str_contains(url()->current(), "bausachverstaendiger"))
    @include('partials._footer1')
@else
@if(str_contains(url()->current(), "baugutachter"))
@include('partials._footer3')
@else
@include('partials._footer2')
@endif
@endif
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
