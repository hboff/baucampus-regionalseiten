@extends('layout')
@php
$footer=2;
@endphp
@section('head')
<title>Energieberatung mit Bausachverständigem</title>
<meta name="Description" content="Die Energiebratung als Arbeitsbereich des Bausachverständigen im Überblick.">
@endsection
@section('content')

<body class="w3-light-grey">
    <!-- Grid -->
    <div class="w3-row">

        <!-- Blog entries -->
        <div>
            <!-- Blog entry -->

            <img src="/img/energieberatung-baucampus-main.png" alt="Energieberatung" title="Energieberatung"
                class="pb-5" style="width:100%; height:500px; object-fit: cover; object-position:center;">

            <!-- ======= About Section ======= -->
            <div id="about" class="about">
                <div class="container">

                    <div class="section-title">
                        <h1>Energieberatung</h1>
                    </div>

                    <div class="row">
                        <div class="col-lg-6" data-aos="fade-right">
                            <p>Die Energieberatung durch einen zertifizierten Energieberater an ihrer Immobilie, soll
                                ihnen einen Überblick über mögliche <b>Modernisierungsmaßnahmen</b> sowie
                                <b>Fördermöglichkeiten</b> geben. Unsere Energieberater beraten wertneutral und objektiv
                                und zeigen ihnen auf welche Maßnahmen im Rahmen der Energieberatung durch einen
                                Energieberater sinnvoll sind und welche zu einem späteren Zeitpunkt durchgeführt werden
                                können. </p>
                            <p>Der Energieberater wird während der Energieberatung auf ihre Immobilie eingehen und sich
                                ebenfalls mit den Gegebenheiten ihrer Immobilie auseinandersetzen.</p>
                            <p>Da die meisten Menschen weniger über den <b>Energiebedarf von Immobilien</b> wissen, als
                                bei anderen Gegenständen des täglichen Lebens wie z.B. Autos oder Haushaltsgeräten hat
                                sich der Gesetzgeber dafür entschieden, dass für den Verkauf und die Vermietung von
                                Gebäuden gültige Energieausweise gem. ENEV vorzulegen sind. Erschwert wird die
                                Einschätzung häufig noch für Privatpersonen, dadurch das allgemeingültige Informationen
                                über den Energieausweis Mangelware sind und Vergleichsobjekte fehlen. Der Energieberater
                                kann ihnen sowohl bei der Erstellung des Energieausweises für ihre Immobilie helfen, als
                                auch bei dem Kauf einer Immobilie eine <b>energetische Einschätzung</b> geben.</p>
                            <p>Es gibt zwei verschieden Arten von Energieausweisen zum einen gibt es den
                                <b>Verbrauchsausweis</b>, welcher auf von Kunden gelieferten Informationen bezüglich des
                                Energieverbrauch der letzten drei Jahre basiert. Zum anderen gibt es den Bedarfsausweis.
                                Der <b>Bedarfsausweis</b> wird verwendet wenn es keine bisherigen Werte gibt, die als
                                Grundlage dienen können. Hier wird zur Berechnung die Bauform, das Alter der Immobilie,
                                die Heizung als auch die Dämmung verwendet.</p>

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







    @endsection
    @include('partials._themen')
