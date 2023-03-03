@extends('layout')
@php
$footer=2;
@endphp
@section('head')
<title>Baucampus</title>
<meta name="Description" content="Baucampus">
@endsection
@section('content')
<div class="w3-display-container w3-animate-opacity w3-center">
    <img sizes="(max-width: 1400px) 100vw, 1400px" src="/img/baucampus.jpg" alt="Baucampus"
        style="width:100%;min-height:350px;max-height:100vh; object-fit: cover; object-position:center;">

    <div id="section03" class="demo">
        <a href="#1"><span></span>Scroll</a>
    </div>

</div>


<div id="1" class="w3-row-padding" style="margin:10vh; background-color:#fff;">
    <h1 class="heading-separator w3-center ">Baucampus</h1>
    <p class="subheading-text w3-center">Das Sachverständigennetzwerk</p>
</div>


<div class="w3-row-padding w3-text-black gr">

    <div class="w3-third">
        <div class="w3-card-4 w3-display-container zooma" style="margin-bottom:16px;">
            <a href="/baubegleitung"><img src="/img/baubegleitung.jpg" alt="Baubegleitung"
                    style="height:50vh; width: 100% !important; object-fit: cover; object-position:center;"></a>
            <div class="w3-xlarge w3-display-bottomleft w3-padding"
                style="background: rgba(255, 255, 255, 0.65); width:100%;">Baubegleitung</div>
        </div>
    </div>

    <div class="w3-third">
        <div class="w3-card-4 w3-display-container zooma" style="margin-bottom:16px;">
            <a href="/bauschaden"><img src="/img/bauschaden.jpeg" alt="Kultur"
                    style="height:50vh; width: 100% !important; object-fit: cover; object-position:center;"></a>
            <div class="w3-xlarge w3-display-bottomleft w3-padding"
                style="background: rgba(255, 255, 255, 0.65); width:100%;">Bauschaden</div>
        </div>
    </div>

    <div class="w3-third">
        <div class="w3-display-container w3-text-black zooma" style="margin-bottom:16px;">
            <a href="/energieberatung"><img src="/img/energieberatung-baucampus-main.png"
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
            <a href="/hauskaufberatung"><img src="/img/hauskaufberatung.jpeg"
                    alt="Öffentliche Verkehrsmittel"
                    style="height:50vh; width: 100% !important; object-fit: cover; object-position:bottom;"></a>

            <div class="w3-xlarge w3-display-bottomleft w3-padding"
                style="background: rgba(255, 255, 255, 0.65); width:100%;">Hauskaufberatung</div>
        </div>
    </div>

    <div class="w3-third">
        <div class="w3-card-4 w3-display-container zooma" style="margin-bottom:16px;">
            <a href="/immobilienbewertung"><img src="/img/immobilienbewertung.jpg"
                    alt="Bürogebäude"
                    style="height:50vh; width: 100% !important; object-fit: cover; object-position:center;"></a>
            <div class="w3-xlarge w3-display-bottomleft w3-padding"
                style="background: rgba(255, 255, 255, 0.65); width:100%;">Immobilienbewertung</div>
        </div>
    </div>

    <div class="w3-third">
        <div class="w3-card-4 w3-display-container zooma" style="margin-bottom:16px;">
            <a href="/schimmelpilz"><img src="/img/schimmelpilz2.jpg" alt="Flughafen"
                    style="height:50vh; width: 100% !important; object-fit: cover; object-position:center;"></a>
            <div class="w3-xlarge w3-display-bottomleft w3-padding"
                style="background: rgba(255, 255, 255, 0.65); width:100%;">Schimmelpilz</div>
        </div>
    </div>
    <br />
</div>

@endsection
