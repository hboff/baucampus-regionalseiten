@extends('layout')
@php
$footer=2;
@endphp
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="

crossorigin=""></script>
<style>.zooma {
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

table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

th {
    background-color: #435761;
    color: #fff;
}

th,
td {
    text-align: left;
    padding: 8px;
    min-width: 100px;
}

tr:nth-child(even) {
    background-color: #f2f2f2
}

.avatar {
    vertical-align: middle;
    width: 50px;
    height: 50px;
    margin-right: 20px;
    margin-left: 20px;

    border-radius: 50%;
    object-fit: cover;
    object-position: center;
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
@section('head') <title>Gutachter Baucampus</title>
<meta name="Description"content="Gutachter Baucampus">
@endsection 
@section('content') 
<body class="w3-light-grey">< !-- Grid --><div class="w3-row">
    <div><div id="about"class="about pt-5 mt-5"><div class="container pt-5"><div class="section-title"><h1>Gutachter</h1><p class="subheading-text w3-center">Unsere Bausachverständigen</p></div><table><tr><th>Gutachter</th><th></th><th>Anschrift</th><th>Kontakt</th></tr>@foreach($gutachter as $gutachters) <tr><td><a href="/gutachter/{{ $gutachters['UrlName'] }}"
class="link-dark"target="_blank"><img src="/img/{{ $gutachters['Photo'] }}"
style="vertical-align: middle; width: 100px; height: 100px; border-radius: 50%; object-fit: cover; object-position: center;"></a></td><td><a href="/gutachter/{{ $gutachters['UrlName'] }}"
class="link-dark" target="_blank"> {{$gutachters['FirstName']}} {{$gutachters['LastName'] }}</a></td>
<td> {{$gutachters['Adress']}}
<br /> {{$gutachters['PostalCode']}} {{$gutachters['City']}}</td>
<td> {{ $gutachters['Phone']}}<br /> 
     {{ $gutachters['Email']}}<br />
     <a href="{{ $gutachters['Website'] }}" target="_blank"> {{$gutachters['Website']}}</a></td>
     </tr>@endforeach 
</table></div><br></div><div id="map"style="width:100%; height:400px;"class="mt-5"></div></div><br>
<script>
        var map = L.map('map').setView([51.165691, 10.451526], 5);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var locations = [            @foreach($gutachter as $gutachters)                [{!! $gutachters['HomeCityLat'] !!}, {!! $gutachters['HomeCityLon'] !!}],
            @endforeach
        ];

        for (var i = 0; i < locations.length; i++) {
            var marker = L.marker(locations[i]).addTo(map);
        }
    </script>

@endsection
