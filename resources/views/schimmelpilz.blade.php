@extends('layout')
@php
$footer=2;
@endphp
@section('head')
<title>Schimmelpilzberatung mit Bausachverständigem</title>
<meta name="Description" content="Beratung eines Bausachverständigen bei Schimmelpilzproblemen.">
@endsection
@section('content')

<body class="w3-light-grey">
    <!-- Grid -->
    <div class="w3-row">

        <!-- Blog entries -->
        <div>
            <!-- Blog entry -->

            <img src="/img/schimmelpilz2.jpg" alt="Schimmelpilz" title="Schimmelpilz" class="pb-5"
                style="width:100%; height:500px; object-fit: cover; object-position:center;">

            <!-- ======= About Section ======= -->
            <div id="about" class="about">
                <div class="container">

                    <div class="section-title">
                        <h1>Schimmelpilz</h1>
                    </div>

                    <div class="row">
                        <div class="col-lg-6" data-aos="fade-right">
                            <p>Schimmel oder eher gesagt Schimmelpilz in einem Haus oder einer Wohnung sind nicht nur
                                eine optische Beeinträchtigung, sondern kann auch zu <b>gesundheitlichen Problemen</b>
                                führen. Weiter schädigen Schimmelpilze die Bausubstanz ihres Gebäudes und führen zu
                                einer <b>Wertminderung</b> der Immobilie (merkantiler Minderwert).</p>
                            <p>Um den Schaden durch Schimmel möglichst klein zu halten, kann einem ein
                                Bausachverständiger <b>unkompliziert und schnell</b> helfen. Der qualifizierte
                                Bausachverständige nimmt die von Schimmel befallenen Stellen vor Ort in Augenschein, um
                                die möglichen Ursachen zu ermitteln und die weitere Vorgehensweise mit ihnen
                                abzustimmen. Durch die Zusammenarbeit mit dem Gutachter bei einem Befall durch
                                Schimmelpilze wird in der Regel die <b>Schimmelpilzsanierung</b> vereinfacht. Durch das
                                umfassende Wissen des Bausachverständigen werden teure und oft auch halbherzige
                                Sanierungsmaßnahmen verhindert. Wichtige Erstmaßnahmen, wie z.B. das Verhindern der
                                Sporenverbreitung der Schimmelpilze und der Einsatz der richtigen Fachbetriebe, helfen
                                den vorhandenen Schaden so klein wie möglich zu halten und vollständig zu beheben. Auch
                                nach einer erfolgten Sanierung des Schimmelpilzes helfen unsere Gutachter, den Erfolg
                                der Maßnahmen zu überprüfen und festzuhalten. Des Weiteren steht der Bausachverständige
                                ihnen mit Rat und Tat zur Seite, um auch in Zukunft Schimmel oder Schimmelpilz in ihrer
                                Immobilie zu vermeiden, damit Sie oder ihre Mieter wieder beruhigt in ihren 4 Wänden
                                leben können.</p>
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






    @endsection
    @include('partials._themen')
