@extends('layout')
@php
$footer=2;
@endphp
@section('head')
<title>Hauskaufberatung mit Bausachverständigem</title>
<meta name="Description" content="Überblick über den Aublauf einer Hauskaufberatung mit einem Bausachverständigen.">
@endsection
@section('content')

<body class="w3-light-grey">
    <!-- Grid -->
    <div class="w3-row">

        <!-- Blog entries -->
        <div>
            <!-- Blog entry -->

            <img src="/img/haus-2.jpg" alt="Hauskaufberatung" title="Hauskaufberatung" class="pb-5"
                style="width:100%; height:500px; object-fit: cover; object-position:center;">

            <!-- ======= About Section ======= -->
            <div id="about" class="about">
                <div class="container">

                    <div class="section-title">
                        <h1>Hauskaufberatung</h1>
                    </div>

                    <div class="row">
                        <div class="col-lg-6" data-aos="fade-right">
                            <p>Beim <b>Kauf eines Hauses</b> oder einer Eigentumswohnung stellen sich viele Fragen. Mit
                                einer professionellen und unabhängigen <b>Hauskaufberatung</b> durch unsere
                                Bausachverständigen gehen Sie den richtigen Schritt, um ein Haus oder eine
                                Eigentumswohnung auf der Basis klarer <b>Fakten</b> zu erwerben.</p>

                            <p>Im Vorfeld der Hauskaufberatung prüft ihr Bausachverständiger die <b>vorhandenen
                                    Unterlagen</b>, meist das Exposé und bereitet den Termin anhand der Eckdaten des
                                Gebäudes durch eine <b>Marktwerteinschätzung</b> vor. Vor Ort begeht der Sachverständige
                                mit Ihnen gemeinsam die Immobilie, die Sie erwerben möchten und stellt den <b>baulichen
                                    Zustand</b> und den eventuellen <b>Sanierungsbedarf</b> des Objektes fest. Zudem
                                beantwortet der Baugutachter Fragestellungen, auf die es Ihnen besonders ankommt, z.B.
                                bzgl. eines Umbaus.</p>
                            <p>Im Anschluss an die Besichtigung der Immobilie findet eine <b>abschließende
                                    Besprechung</b> statt, bei der Ihnen ihr Bausachverständiger noch einmal alle
                                Fakten, die Sie zum Kauf der Immobilie wissen müssen, verständlich und klar
                                nachvollziehbar erklärt. Die Beratung durch unsere Bausachverständigen beim Kauf eines
                                Hauses oder einer Eigentumswohnung gibt ihnen <b>Sicherheit</b>, so dass Sie ihre
                                Kaufentscheidung beruhigt treffen können.</p>

                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
                            <img src="/img/hauskaufberatung-brochure.jpg" class="img-fluid" alt="">
                        </div>
                    </div>

                </div>
            </div> <!-- End About Section -->
            <!-- END BLOG ENTRIES -->
        </div>

        <!-- END GRID -->
    </div>
    <script>
        $(function () {
            $('a[href*=#]').on('click', function (e) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: $($(this).attr('href')).offset().top
                }, 500, 'linear');
            });
        });

    </script>
    @endsection
    @include('partials._themen')
