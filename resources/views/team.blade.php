@extends('layout')
@php
$footer=2;
@endphp
@section('head')
<title>Baucampus Team</title>
<meta name="Description" content="Team Baucampus">
@endsection
@section('content')

<body class="w3-light-grey">
    <img src="/img/baubegleitung.jpg" alt="Baubegleitung" title="Baubegleitung"
        style="width:100%; height:500px; object-fit: cover; object-position:center;">

    <!-- Grid -->
    <div id="about" class="about">
        <div class="container">
            <div class="section-title pt-5">
                <h1>Unser Team</h1>
                <p class="subheading-text w3-center">Baucampus Team</p>
            </div>
        </div>
    </div>

    <div class="container py-5">

        <!-- Row  [Team]-->

        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
                <div class="card h-100 shadow-sm border-0 rounded">
                    <img src="/img/oskar2.jpg" class="card-img-top" alt="Oskar Lohse" />
                    <div class="card-body">
                        <p class="text-muted">Oskar Lohse</p>
                        <p class="card-text">
                            Founder & CEO
                        </p>
                    </div>

                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm border-0 rounded">
                    <img src="/img/bausachverstaendiger_heller-2.jpg" class="card-img-top" alt="Barbara Heller" />
                    <div class="card-body">
                        <p class="text-muted">Barbara Heller</p>
                        <p class="card-text">
                            Chief Operating Officer
                        </p>
                    </div>

                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm border-0 rounded">
                    <img src="/img/bausachverstaendiger-freda-lohse.jpg" class="card-img-top" alt="Freda Lohse" />
                    <div class="card-body">
                        <p class="text-muted">Freda Lohse</p>
                        <p class="card-text">
                            Chief Marketing Officer
                        </p>
                    </div>

                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm border-0 rounded">
                    <img src="/img/casimir.jpg" class="card-img-top" alt="Casimir Arlabosse" />
                    <div class="card-body">
                        <p class="text-muted">Casimir Arlabosse</p>
                        <p class="card-text">
                            Chief Technology Officer
                        </p>
                    </div>

                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm border-0 rounded">
                    <img src="/img/friedrich-lohse.jpg" class="card-img-top" alt="Friedrich Lohse" />
                    <div class="card-body">
                        <p class="text-muted">Friedrich Lohse</p>
                        <p class="card-text">
                            Head of Research & Development
                        </p>
                    </div>

                </div>
            </div>
        </div>

    </div>

    @endsection
