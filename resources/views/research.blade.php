@extends('layout')
@php
$footer=2;
@endphp
@section('head')
<title>Marktberichte Baucampus</title>
<meta name="Description" content="Alle Marktberichte von Baucampus.">
@endsection
@section('content')

<body class="w3-light-grey">
    <!-- Grid -->
    <div class="w3-row">

        <!-- Blog entries -->
        <div>
            <!-- Blog entry -->
            <img src="https://baucampus.ch/bilder/baucampus-startseite.jpg" alt="Marktberichte" class="pb-5"
                style="width:100%;min-height:350px;max-height:65vh; object-fit: cover; object-position:bottom;">

            <!-- ======= About Section ======= -->
            <div id="about" class="about pt-3 mt-3">
                <div class="container">

                    <div class="section-title">
                        <h1>Marktberichte</h1>
                    </div>


                    <div class="w3-row-padding mb-5">
                        <p class="subheading-text w3-center">Immobilien Marktberichte</p>
                    </div>

                    <div class="w3-row-padding w3-text-black gr">

                        <div class="w3-third">
                            <div class="w3-card-4 w3-display-container zooma" style="margin-bottom:16px;">
                                <a href="https://www.baucampus.de/baucampus-marktbericht-immobilien-2022.pdf"><img
                                        src="/img/baucampus-marktbericht-2022.png" alt="Marktbericht Immobilien 2022"
                                        style="min-height:300px; height:50vh; width: 100% !important; object-fit: cover; object-position:top;"></a>
                                <div class="w3-xlarge w3-display-bottomleft w3-padding w3-osk-customs"
                                    style="width:100%;">Marktbericht 2022</div>
                            </div>
                        </div>

                        <div class="w3-third">
                            <div class="w3-card-4 w3-display-container zooma" style="margin-bottom:16px;">
                                <a href="https://www.baucampus.de/baucampus-marktbericht-immobilien-2021.pdf"><img
                                        src="https://www.baucampus.de/Bilder/baucampus-marktbericht-2021.png"
                                        alt="Marktbericht Immobilien 2021"
                                        style="min-height:300px; height:50vh; width: 100% !important; object-fit: cover; object-position:top;"></a>
                                <div class="w3-xlarge w3-display-bottomleft w3-padding w3-osk-customs"
                                    style="width:100%;">Marktbericht 2021</div>
                            </div>
                        </div>

                        <div class="w3-third mb-5">
                            <div class="w3-card-4 w3-display-container zooma" style="margin-bottom:16px;">
                                <a href="https://www.baucampus.de/baucampus-marktbericht-immobilien-2020.pdf"><img
                                        src="https://www.baucampus.de/Bilder/baucampus-marktbericht-2020.jpg"
                                        alt="Marktbericht Immobilien 2020"
                                        style="min-height:300px; height:50vh; width: 100% !important; object-fit: cover; object-position:top;"></a>
                                <div class="w3-xlarge w3-display-bottomleft w3-padding w3-osk-customs"
                                    style="width:100%;">Marktbericht 2020</div>
                            </div>
                        </div>
                        <div class="w3-row-padding mb-5">
                            <p class="subheading-text w3-center">Checklisten</p>
                        </div>
                        <div class="w3-third">
                            <div class="w3-display-container w3-text-black zooma" style="margin-bottom:16px;">
                                <a href="https://www.baucampus.de/baucampus-checkliste-hauskauf.pdf"><img
                                        src="https://www.baucampus.de/Bilder/checkliste-hauskauf.jpg"
                                        alt="Fassaden Design"
                                        style="min-height:300px; height:50vh; width: 100% !important; object-fit: cover; object-position:top;"></a>
                                <div class="w3-xlarge w3-display-bottomleft w3-padding w3-osk-customs"
                                    style="width:100%;">Checkliste Hauskauf</div>
                            </div>
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
