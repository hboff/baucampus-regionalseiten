@extends('layout')
@php
$footer=2;
@endphp
@section('head')
<title>Impressum Baucampus</title>
<meta name="Description" content="Impressum Baucampus">
@endsection
@section('content')
<div id="about" class="about pt-5 mt-5">
    <div class="container pt-5">

        <div class="section-title">
            <h1>Impressum</h1>
        </div>
        <h3>Betreiber der Website:</h3>
        <p>Der Betreiber FEOS - FZCO ist ein Unternehmen in Dubai und der Hauptsitz des Unternehmens befindet sich in
            Dubai.</p>
        <p>FEOS - FZCO</p>
        <p>Building A1</p>
        <p>Dubai Silicon Oasis</p>
        <p>Dubai</p>
        <p>Vereinigte Arabische Emirate</p>
        <p>Elektronische Kontaktdaten:</p>
        <p>Telefon: 057222890636</p>
        <p>E-mail: oskar_lohse@baucampus.de</p>
        <p>Internet: www.baucampus.de</p>
        <p>General Manager Oskar Lohse</p>
        <br />
        <h3>Kontaktadresse in Deutschland:</h3>
        <p>Casimir Arlabosse</p>
        <p>Waltherstraße 15</p>
        <p>80337 München</p>
        <p>Telefon: 057222890636</p>
        <p>E-mail: arlabosse@baucampus.de</p>
        <p>Internet: www.baucampus.de</p>
        <br />
        <h3>Verantwortlich für den Inhalt nach § 55 Abs. 2 RStV</h3>
        <p>Casimir Arlabosse</p>
        <p>Waltherstraße 15</p>
        <p>80337 München</p>
    </div>

    @endsection
    @include('partials._themen')
