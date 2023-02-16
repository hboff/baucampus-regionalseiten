<!DOCTYPE html>
<html lang="de">
<meta charset="UTF-8">
<title>Baucampus</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://baucampus.ch/w3.css">
<link rel="stylesheet" type="text/css" href="https://baucampus.ch/style.css">
<link rel="stylesheet" href="https://baucampus.ch/ideen-style.css">
<link rel="stylesheet" type="text/css" href="https://baucampus.ch/kontakt-style.css">
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>





<style>
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

</style>

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

            <a href="/startseite" class="w3-hide-small w3-left hover-underline-animation oskkk"
                style="padding-left:100px;">Baucampus</a>
            <a href="/kontakt" class=" w3-hide-small w3-hide-medium w3-right hover-underline-animation oskkk"
                style="padding-right:100px;">Kontakt</a>
            <a href="/kosten-preise"
                class=" w3-hide-small w3-hide-medium w3-right hover-underline-animation oskkk">Preise</a>

            <div class="w3-dropdown-hover w3-hide-small w3-hide-medium w3-right ">
                <a class=" hover-underline-animation oskkk">Über uns &#9207;</a>
                <div class="w3-dropdown-content w3-bar-block w3-card-4" style="position:fixed;">
                    <a href="/baugutachter" class="w3-bar-item w3-button" title="Gutachter Baucampus">Gutachter</a>
                    <a href="/research" class="w3-bar-item w3-button" title="Marktberichte Baucampus">Marktberichte</a>
                </div>
            </div>


            <div class="w3-dropdown-hover w3-hide-small w3-hide-medium w3-right ">
                <a class=" hover-underline-animation oskkk">Leistungen &#9207;</a>
                <div class="w3-dropdown-content w3-bar-block w3-card-4" style="position:fixed;">
                    <a href="/baubegleitung" class="w3-bar-item w3-button" title="Baubegleitung">Baubegleitung</a>
                    <a href="/bauschaden" class="w3-bar-item w3-button" title="Bauschaden">Bauschaden</a>
                    <a href="/energieberatung" class="w3-bar-item w3-button" title="Energieberatung">Energieberatung</a>
                    <a href="/hauskaufberatung" class="w3-bar-item w3-button"
                        title="Hauskaufberatung">Hauskaufberatung</a>
                    <a href="/immobilienbewertung" class="w3-bar-item w3-button"
                        title="Immobilienbewertung">Immobilienbewertung</a>
                    <a href="/schimmelpilz" class="w3-bar-item w3-button" title="Schimmelpilz">Schimmelpilz</a>
                </div>
            </div>

        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
            <a href="/startseite" class="w3-bar-item w3-button" onclick="toggleFunction()">Baucampus</a>
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
            <a href="/baugutachter" title="Gutachter Baucampus" class="w3-bar-item w3-button"
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







    <div class="w3-display-container w3-animate-opacity w3-center">
        <img sizes="(max-width: 1400px) 100vw, 1400px" src="https://baucampus.ch/bilder/baucampus-startseite.jpg"
            alt="Mein Haus"
            style="width:100%;min-height:350px;max-height:65vh; object-fit: cover; object-position:bottom;">
        <div class="w3-container w3-display-middle w3-margin-bottom">
            <div ">  
		<h1 style=" color:white;">Baucampus<h1>

            </div>
        </div>
    </div>


    <div class="w3-row-padding" style="margin:10vh; background-color:#fff;">
        <h2 class="heading-separator w3-center">Baucampus</h2>
        <p class="subheading-text w3-center">Das Sachverständigennetzwerk</p>
    </div>


    <div class="w3-row-padding w3-text-black gr">

        <div class="w3-third">
            <div class="w3-card-4 w3-display-container zooma" style="margin-bottom:16px;">
                <a href="/baubegleitung"><img src="https://baucampus.ch/bilder/baubegleitung.jpg" alt="Baubegleitung"
                        style="height:50vh; width: 100% !important; object-fit: cover; object-position:center;"></a>
                <div class="w3-xlarge w3-display-bottomleft w3-padding"
                    style="background: rgba(255, 255, 255, 0.65); width:100%;">Baubegleitung</div>
            </div>
        </div>

        <div class="w3-third">
            <div class="w3-card-4 w3-display-container zooma" style="margin-bottom:16px;">
                <a href="/bauschaden"><img src="https://baucampus.ch/bilder2/bauschaden.jpeg" alt="Kultur"
                        style="height:50vh; width: 100% !important; object-fit: cover; object-position:center;"></a>
                <div class="w3-xlarge w3-display-bottomleft w3-padding"
                    style="background: rgba(255, 255, 255, 0.65); width:100%;">Bauschaden</div>
            </div>
        </div>

        <div class="w3-third">
            <div class="w3-display-container w3-text-black zooma" style="margin-bottom:16px;">
                <a href="/energieberatung"><img src="https://baucampus.ch/bilder/energieberatung-baucampus-main.png"
                        alt="Fassaden Design"
                        style="height:50vh; width: 100% !important; object-fit: cover; object-position:center;"></a>
                <div class="w3-xlarge w3-display-bottomleft w3-padding"
                    style="background: rgba(255, 255, 255, 0.65); width:100%;">Energieberatung</div>
            </div>
        </div>
    </div>


    <div class="w3-row-padding w3-text-black gr">

        <div class="w3-third">
            <div class="w3-card-4 w3-display-container zooma" style="margin-bottom:16px;">
                <a href="/hauskaufberatung"><img src="https://baucampus.ch//bilder2/hauskaufberatung.jpeg"
                        alt="Öffentliche Verkehrsmittel"
                        style="height:50vh; width: 100% !important; object-fit: cover; object-position:bottom;"></a>

                <div class="w3-xlarge w3-display-bottomleft w3-padding"
                    style="background: rgba(255, 255, 255, 0.65); width:100%;">Hauskaufberatung</div>
            </div>
        </div>

        <div class="w3-third">
            <div class="w3-card-4 w3-display-container zooma" style="margin-bottom:16px;">
                <a href="/immobilienbewertung"><img src="https://baucampus.ch/bilder/immobilienbewertung.jpg"
                        alt="Bürogebäude"
                        style="height:50vh; width: 100% !important; object-fit: cover; object-position:center;"></a>
                <div class="w3-xlarge w3-display-bottomleft w3-padding"
                    style="background: rgba(255, 255, 255, 0.65); width:100%;">Immobilienbewertung</div>
            </div>
        </div>

        <div class="w3-third">
            <div class="w3-card-4 w3-display-container zooma" style="margin-bottom:16px;">
                <a href="/schimmelpilz"><img src="https://baucampus.ch/bilder/schimmelpilz2.jpg" alt="Flughafen"
                        style="height:50vh; width: 100% !important; object-fit: cover; object-position:center;"></a>
                <div class="w3-xlarge w3-display-bottomleft w3-padding"
                    style="background: rgba(255, 255, 255, 0.65); width:100%;">Schimmelpilz</div>
            </div>
        </div>
        <br />
    </div>


    <!-- Footer -->
    <footer style="padding-top:2vh; color:#9fa3a7; background-color:#F5F5F8; font-size:16px;">

        <div class="w3-row " style="margin-bottom:5vh;padding-left:10vh;">
            <div class="w3-third w3-container">
                <h3 style="color:#26292c;">Baucampus </h3>
                <img src="https://baucampus.ch/bilder/baucampus.png" class="w3-center" style="width:20%;"
                    alt="Baucampus">

            </div>
            <div class="w3-third w3-container">
                <h3 style="color:#26292c;margin-bottom:4vh;">Kontakt</h3>
                <p style="font-size:16px;">Tel.: 05722 / 913800</p>
                <p style="font-size:16px;">Fax: 05722 / 289 0638</p>
                <p style="font-size:16px; margin-bottom:10px;">E-Mail: oskar_lohse@baucampus.de</p>

            </div>
            <div class="w3-third w3-container">
                <h3 style="color:#26292c;">Themen</h3>

                @include('partials._orte')
            </div>
        </div>


        <div class="w3-row"
            style="padding-left:10vh; padding-top:2vh; padding-bottom:2vh; border-top:1px solid #EBEBED; font-size:14px;">
            <div class="w3-third w3-container">
                <a href="/impressum">Impressum</a>
                <a href="/datenschutzerklaerung">Datenschutzerklärung</a>

            </div>
            <div class="w3-third w3-container">

            </div>
            <div class="w3-third w3-container">
                <a href="https://baucampus.de">Baucampus.de</a>
                <a href="https://baucampus.at">Baucampus.at</a>
                <a href="https://baucampus.at">Baucampus.ch</a>
                <a href="https://baucampus.de">Baucampus.fr</a>

            </div>
        </div>


    </footer>
    <script src="/kontakt-script.js"></script>
</body>

</html>
