@extends('layout')
@php
$footer=2;
@endphp
@section('head')
<title>Baubegleitung mit Bausachverständigem</title>
<meta name="Description" content="Die Baubegleitung als Arbeitsbereich des Bausachverständigen kurz erklärt.">
<meta name="viewport" content="width=device-width, initial-scale=1">
@endsection
@section('content')

<body class="w3-light-grey">
    <!-- Grid -->
    <div class="w3-row">

        <!-- Blog entries -->
        <div>
            <!-- Blog entry -->

            <img src="/img/baubegleitung.jpg" alt="Baubegleitung" title="Baubegleitung" class="pb-5"
                style="width:100%; height:500px; object-fit: cover; object-position:center;">

            <!-- ======= About Section ======= -->
            <div id="about" class="about">
                <div class="container">

                    <div class="section-title">
                        <h1>Baubegleitung</h1>
                    </div>

                    <div class="row">
                        <div class="col-lg-6" data-aos="fade-right">
                            <p>Die <b>baubegleitende Qualitätssicherung</b> durch einen Bausachverständigen ermöglicht
                                dem Bauherren eine neutrale Qualitätskontrolle für den Bau oder den Umbau ihrer
                                Immobilie. Durch die steigende Konkurrenz und Kostendruck in der Baubranche leidet die
                                Bauqualität. Hier kann ein Bausachverständiger helfend eingreifen und so Geld und Nerven
                                sparen. Ein Baugutachter, der die <b>baubegleitende Qualitätssicherung</b> durchführt,
                                stellt sicher, dass Baubeschreibung, Bauplanung und Bauausführung übereinstimmen.</p>
                            <p> Ein Bausachverständiger sollte schon bereits vor dem Unterzeichnen der Bauunterlagen
                                hinzugezogen werden, um mögliche <b>Planungsfehler zu vermeiden</b>. Hierzu bieten wir
                                in unserem Ersttermin die Prüfung der Unterlagen auf Plausibilität und Vollständigkeit
                                und bieten eine Überprüfung der Bauunterlagen in fachtechnischer und
                                qualitätstechnischer Hinsicht an. Zu einem vollständigen Ersttermin im Rahmen der
                                qualitätssicherenden Baubegleitung gehört auch die Besichtigung des Grundstücks.</p>
                            <p>Nach dem eigentlichen Baubeginn werden durch den Bausachverständigen <b>einzelne
                                    Routinetermine</b>, also Baustellentermine, wahrgenommen, die nach der
                                Fertigstellung einzelner Bauabschnitte erfolgen Hierzu gehören z.B. Fertigstellung des
                                Kellers inkl. Abdichtung, nach Rohbau und Dachstuhl oder vor dem Innenputz nach
                                erfolgter Elektro- und Sanitärinstallation. Kurz gesagt alle Arbeiten, die durch eines
                                der nachfolgenden Gewerke verdeckt werden, werden im Verlauf der Baubegleitung durch den
                                Baugutachter in <b>Augenschein genommen</b>.</p>
                            <p>Am Ende der Bauphase steht die <b>Bauabnahme</b>. Dieser Abnahmetermin ist für den
                                Bauherrn besonders wichtig, da zum einen meist die letzte Rate für die Bauleistung
                                fällig wird, zum anderen sich die Beweislast umkehrt und die Verjährungsfrist beginnt.
                            </p>

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

    @endsection
    @include('partials._themen')
