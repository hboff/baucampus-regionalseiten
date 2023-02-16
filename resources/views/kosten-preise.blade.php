@extends('layout')
@php
$footer=2;
@endphp
@section('head')
<style>
table {
font-size: 170%;
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

</style>


 <title>Kosten und Preise</title>
<meta name="Description" content="Die Kosten und Preise von Baucampus.">
@endsection 
@section('content')

<body class="w3-light-grey">
    < !-- Grid -->
        <div class="w3-row">
            < !-- Blog entries -->
                <div>
                    < !-- Blog entry -->
                    <img src="/img/immobilienbewertung.jpg" alt="Preise" class="pb-5"
                            style="width:100%;min-height:350px;max-height:65vh; object-fit: cover; object-position:center;">
                        <div id="about" class="about">

                            <div class="container">
                                <div class="section-title">
                                    <h1>Preisliste Baucampus 2023</h1>
                                    
               
                                </div>

                                            <div class="contaier-fluid">
                                                <div style="overflow-x:auto;">
                                                    <table>
                                                        <tr>
                                                            <th class="col-11">Bauschaden</th>
                                                            <th class="col-1">Preis</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Ortstermin mit einem Bausachverständigen zur mündlichen
                                                                Beratung am Objekt,
                                                                ink. An- und Abfahrt</td>
                                                            <td>ab 460,
                                                                - € *</td>
                                                        </tr>
                                                        <tr>
                                                            <td>schriftliches Gutachten zum vorgenannten Ortstermin
                                                                (schriftliche Zusammenfassung des vorgenannten
                                                                Ortstermins)</td>
                                                            <td>ab 320,
                                                                - € *</td>
                                                        </tr>
                                                    </table><br />
                                                </div>
                                                <div style="overflow-x:auto;">
                                                    <table>
                                                        <tr>
                                                            <th class="col-11">Schimmelpilzberatung</th>
                                                            <th class="col-1">Preis</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Ortstermin anlässlich eines Schimmelpilzbefalls mit
                                                                einem Bausachverständigen zur mündlichen Beratung am
                                                                Objekt,
                                                                inkl An- und Abfahrt</td>
                                                            <td>ab 460,
                                                                - € *</td>
                                                        </tr>
                                                        <tr>
                                                            <td>schriftliches Gutachten zum vorgenannten Ortstermin</td>
                                                            <td>ab 320,
                                                                - € *</td>
                                                        </tr>
                                                    </table><br />
                                                </div>
                                                <div style="overflow-x:auto;">
                                                    <table>
                                                        <tr>
                                                            <th class="col-11">Hauskaufberatung,
                                                                Kaufberatung Eigentumswohnung</th>
                                                            <th class="col-1">Preis</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Ortstermin mit einem Bausachverständigen zur mündlichen
                                                                Hauskaufberatung inkl. An- und Abfahrt für ein
                                                                Einfamilienhaus oder eine Eigentumswohnung bis 200 qm
                                                                Wohnfläche</td>
                                                            <td>ab 480,
                                                                - € *</td>
                                                        </tr>
                                                        <tr>
                                                            <td>bis 300 qm Wohnfläche</td>
                                                            <td>ab 550,
                                                                - € *</td>
                                                        </tr>
                                                        <tr>
                                                            <td>schriftliche Zusammenfassung der vorgenannten
                                                                Hauskaufberatung</td>
                                                            <td>ab 320,
                                                                - € *</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Mehrfamilienhäuser,
                                                                Resthöfe,
                                                                etc.</td>
                                                            <td>auf Anfrage</td>
                                                        </tr>
                                                    </table><br />
                                                </div>
                                                <div style="overflow-x:auto;">
                                                    <table>
                                                        <tr>
                                                            <th class="col-11">Baubegleitung</th>
                                                            <th class="col-1">Preis</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Baubegleitung für den Neubau eines Hauses bzw. einer
                                                                Eigentumswohung,
                                                                inkl An und Abfahrt. Ersttermin mit einem
                                                                Bausachverständigen zur Erfassung der Bauunterlagen,
                                                                sowie der Besichtigung des Baugrundstücks</td>
                                                            <td>ab 680,
                                                                - € *</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Routinetermine während der Bauphase nach Absprache und
                                                                Erfordernis (in der Regel werden je nach Bauverlauf
                                                                zwischen 2 und 4 Termine benötigt)</td>
                                                            <td>ab 610,
                                                                - € *</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Unterstützung bei der Bauabnahme</td>
                                                            <td>ab 760,
                                                                - € *</td>
                                                        </tr>
                                                    </table><br />
                                                </div>
                                                <div style="overflow-x:auto;">
                                                    <table>
                                                        <tr>
                                                            <th class="col-11">Energieberatung</th>
                                                            <th class="col-1">Preis</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Ortstermin mit einem Bausachverständigen im Rahmen einer
                                                                Energieberatung am Objekt,
                                                                inkl An- und Abfahrt</td>
                                                            <td>ab 475,
                                                                - € *</td>
                                                        </tr>
                                                        <tr>
                                                            <td>schriftliche Zusammenfassung des o.g. Ortstermins</td>
                                                            <td>ab 320,
                                                                - € *</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Energieverbrauchsausweis</td>
                                                            <td>auf Anfrage</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Energiebedarfsausweis</td>
                                                            <td>auf Anfrage</td>
                                                        </tr>
                                                    </table><br />
                                                </div>
                                                <div style="overflow-x:auto;">
                                                    <table>
                                                        <tr>
                                                            <th class="col-11">Gewerbeimmobilien</th>
                                                            <th class="col-1">Preis</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Ortstermin mit einem Bausachverständigen zum Erwerb
                                                                einer Gewerbeimmobilie</td>
                                                            <td>auf Anfrage</td>
                                                        </tr>
                                                    </table><br />
                                                </div>
                                                <div style="overflow-x:auto;">
                                                    <table>
                                                        <tr>
                                                            <th class="col-11">Haus-Check</th>
                                                            <th class="col-1">Preis</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Ortstermin mit einem Bausachverständigen,
                                                                an einer Bestandsimmobilie. Suche nach Bauschäden und
                                                                Beratung zu den festgestellten Mängeln,
                                                                sowie Sanierungsvorschläge</td>
                                                            <td>ab 480,
                                                                - € *</td>
                                                        </tr>
                                                    </table><br />
                                                </div>
                                                <div style="overflow-x:auto;">
                                                    <table>
                                                        <tr>
                                                            <th class="col-11">Bewertung anhand des Exposes</th>
                                                            <th class="col-1">Preis</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Bewertung einer Immobilie anhand des Exposes und
                                                                weiterer durch den Kunden zur Verfügung gestellten
                                                                Daten.</td>
                                                            <td>ab 290,
                                                                - € *</td>
                                                        </tr>
                                                    </table>
                                                    <p>* inkl. MwSt.</p><br />
                                                </div>
                                           




                                            </div>
                                        </div>
                                     </div>
                                     </div>
                                     </div>
                                </div>

@endsection 
