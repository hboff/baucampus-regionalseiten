@extends('layout')
@php
$footer=2;
@endphp
@section('head')
<title>Immobilienbewertung mit Bausachverständigem</title>
<meta name="Description" content="Eine professionelle Immobilienbewertung mit einem Bausachversändigen von Baucampus.">
@endsection
@section('content')

<body class="w3-light-grey">
    <!-- Grid -->
    <div class="w3-row">

        <!-- Blog entries -->
        <div>
            <!-- Blog entry -->

            <img src="/img/immobilienbewertung.jpg" alt="Immobilienbewertung" title="Immobilienbertung" class="pb-5"
                style="width:100%; height:500px; object-fit: cover; object-position:center;">

            <!-- ======= About Section ======= -->
            <div id="about" class="about">
                <div class="container">

                    <div class="section-title">
                        <h1>Immobilienbewertung</h1>
                    </div>

                    <div class="row">
                        <div class="col-lg-6" data-aos="fade-right">
                            <p>Eine <b>Immobilienbewertung</b> ist die Schätzung des Marktwertes einer Immobilie. Der
                                Bausachverständige berücksichtigt dabei viele verschiedene Faktoren, um einen möglichst
                                genauen Wert zu ermitteln. Diese Faktoren können beispielsweise die Lage der Immobilie,
                                ihre Größe, der Zustand der Gebäude und die Umgebung umfassen.</p>
                            <p>Eine Immobilienbewertung ist wichtig, weil sie den <b>Marktwert einer Immobilie</b>
                                bestimmt. Dieser Wert ist wichtig für viele Entscheidungen, die bezüglich der Immobilie
                                getroffen werden müssen. Zum Beispiel kann er als Grundlage für die Festlegung eines
                                <b>Verkaufspreises</b> dienen oder bei einer Finanzierung als Sicherheit herangezogen
                                werden.</p>
                            <p>Der Bausachverständige begeht die Immobilie und macht sich ein Bild von ihrem
                                <b>Zustand</b> und ihren Merkmalen. Anschließend berücksichtigt er die entsprechenden
                                Faktoren und schätzt den Marktwert. Es ist wichtig, dass der Gutachter neutral und
                                unabhängig arbeitet, um eine möglichst genaue Bewertung zu gewährleisten.</p>
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
                            <img src="/img/immobilienbewertung-baucampus.jpg" class="img-fluid" alt="">
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
