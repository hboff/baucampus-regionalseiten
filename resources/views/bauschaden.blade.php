@extends('layout')
@php
$footer=2;
@endphp
@section('head')
<title>Ortstermin mit Bausachverständigem</title>
<meta name="Description" content="Der Ortstermin mit einem Bausachverständigen kurz erklärt.">
@endsection
@section('content')

<body class="w3-light-grey">
    <!-- Grid -->
    <div class="w3-row">

        <!-- Blog entries -->
        <div>
            <!-- Blog entry -->

            <img src="/img/anfahrschaden.jpg" alt="Bauschaden" title="Bauschaden" class="pb-5"
                style="width:100%; height:500px; object-fit: cover; object-position:center;">

            <!-- ======= About Section ======= -->
            <div id="about" class="about">
                <div class="container">

                    <div class="section-title">
                        <h1>Bauschaden</h1>
                    </div>

                    <div class="row">
                        <div class="col-lg-6" data-aos="fade-right">
                            <p>Die Ursachen von Baumängeln und Bauschäden sind, ohne kompetente und <b>fachliche
                                    Hilfe</b> durch einen Bausachverständigen nur schwer zu ermitteln. Ein Haus ist, im
                                Vergleich mit der Serienfertigung, immer als ein <b>handwerkliches Einzelstück</b> zu
                                sehen, dass durch die Vielzahl der Gewerke und Materialien, Planänderungen oder
                                Planungsfehlern nicht fehlerfrei erstellt werden kann.</p>
                            <p>So entstehen Baumängel, das heißt das Gebäude wurde nicht wie im Kaufvertrag oder
                                Bauvertrag vereinbart hergestellt. Diese Baumängel führen oft zu Bauschäden, die nicht
                                nur optische oder <b>funktionelle Beeinträchtigungen</b>, sondern sie können auch die
                                Bausubstanz schädigen. Hierbei ist es einerlei, ob diese Bauschäden bei einem Neubau
                                oder durch die Modernisierung einer Bestandsimmobilie entstanden sind.</p>
                            <p>Als Bauherr und Kunde wollen Sie diese Mängel nicht hinnehmen. Ein Bausachverständiger
                                ist hier der <b>kompetente Ansprechpartner</b>. Der Bausachverständige kann eine
                                neutrale Ursachenermittlung für en Baumangel bzw. Bauschaden vornehmen und helfen, das
                                Ausmaß des Schadens durch fachlich qualifizierte Erstmaßnahmen zu begrenzen. Das
                                einschalten eines Gutachters und dessen <b>fachliche Erläuterungen</b> bzw. dessen
                                Gutachten gibt ihnen als Bauherr die notwendige Sicherheit mit den Handwerkern und
                                Bauunternehmern auf Augenhöhe zu verhandeln.</p>


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







    @endsection
    @include('partials._themen')
