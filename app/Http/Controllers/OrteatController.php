<?php

namespace App\Http\Controllers;


use App\Models\Ort;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class OrteatController extends Controller
{
    // Show single lisitng
    public function show($ortat) {
        $status='at';
        
        $domains = [
            'baugutachter-sylt.com' => [
                'laengengrad' => [8.2, 8.51],
                'breitengrad' => [54.74, 55.07],
                'domainort' => 'Sylt',
            ],
            'baugutachter-eisenach.com' => [
                'laengengrad' => [10.10, 11.25],
                'breitengrad' => [50.04, 51.15],
                'domainort' => 'Eisenach',
            ],
            'baugutachter-koeln.com' => [
                'laengengrad' => [6.6, 7.4],
                'breitengrad' => [50.8, 51.0],
                'domainort' => 'Köln',
            ],
            'baugutachter-muenster.eu' => [
                'laengengrad' => [7.34, 8.03],
                'breitengrad' => [51.81, 52.14],
                'domainort' => 'Münster',
            ],
            'baugutachter-mannheim.eu' => [
                'laengengrad' => [8.06, 8.85],
                'breitengrad' => [49.485, 49.72],
                'domainort' => 'Mannheim',
            ],
             'baugutachter-moenchengladbach.com' => [
                'laengengrad' => [5.86, 6.56],
                'breitengrad' => [50.94, 51.22],
                'domainort' => 'Mönchengladbach',
            ],
            'baugutachter-gelsenkirchen.eu' => [
                'laengengrad' => [7.0, 7.2],
                'breitengrad' => [51.49, 51.81],
                'domainort' => 'Gelsenkirchen',  
            ],
            'baugutachter-braunschweig.eu' => [
                'laengengrad' => [10.39, 11.24],
                'breitengrad' => [51.6, 52.32],
                'domainort' => 'Braunschweig',
            ],
            'baugutachter-chemnitz.com' => [
                'laengengrad' => [12.32, 13.53],
                'breitengrad' => [50.19, 51.07],
                'domainort' => 'Chemnitz',
            ],
            'baugutachter-halle.eu' => [
                'laengengrad' => [11.7, 12.7],
                'breitengrad' => [51.45, 51.96],
                'domainort' => 'Halle',
            ],
            'baugutachter-freiburg.com' => [
                'laengengrad' => [7.4, 8.7],
                'breitengrad' => [47.5, 48.2],
                'domainort' => 'Freiburg',
            ],
            'baugutachter-krefeld.eu' => [
                'laengengrad' => [5.86, 6.63],
                'breitengrad' => [51.22, 51.46],
                'domainort' => 'Krefeld',
            ],
            'baugutachter-oberhausen.com' => [
                'laengengrad' => [6.37, 6.89],
                'breitengrad' => [51.49, 51.81],
                'domainort' => 'Oberhausen',
            ],
            'baugutachter-hagen.com' => [
                'laengengrad' => [7.34, 7.61],
                'breitengrad' => [51.27, 51.44],
                'domainort' => 'Hagen',
            ],
            'baugutachter-potsdam.com' => [
                'laengengrad' => [12.01, 13.15],
                'breitengrad' => [51.96, 52.46],
                'domainort' => 'Potsdam',
            ],
            'baugutachter-saarbruecken.com' => [
                'laengengrad' => [6.6, 7.6],
                'breitengrad' => [49.1, 49.4],
                'domainort' => 'Saarbrücken',
            ],
            'baugutachter-ludwigshafen.com' => [
                'laengengrad' => [8.06, 8.4],
                'breitengrad' => [49.06, 49.485],
                'domainort' => 'Ludwigshafen am Rhein',
            ],
            'baugutachter-muelheim.com' => [
                'laengengrad' => [6.37, 6.91],
                'breitengrad' => [51.28, 51.46],
                'domainort' => 'Mülheim',
            ],
            'baugutachter-oldenburg.com' => [
                'laengengrad' => [7.0, 9.2],
                'breitengrad' => [10.0, 52.0],
                 'domainort' => 'Oldenburg',
            ],
            'baugutachter-leverkusen.com' => [
                'laengengrad' => [6.85, 7.4],
                'breitengrad' => [51.0, 51.12],
                'domainort' => 'Leverkusen',
            ],
            'baugutachter-solingen.com' => [
                'laengengrad' => [6.37, 7.14],
                'breitengrad' => [51.12, 51.22],
                'domainort' => 'Solingen',
            ],
            'baugutachter-heidelberg.com' => [
                'laengengrad' => [8.4, 9.07],
                'breitengrad' => [49.06, 49.485],
                'domainort' => 'Heidelberg',
            ],  
            'baugutachter-herne.com' => [
                'laengengrad' => [7.2, 7.61],
                'breitengrad' => [51.51, 51.81],
                'domainort' => 'Herne',
            ],
            'baugutachter-neuss.com' => [
                'laengengrad' => [6.56, 6.85],
                'breitengrad' => [51.0, 51.22],
                'domainort' => 'Neuss',
            ],
            'baugutachter-ingolstadt.com' => [
                'laengengrad' => [11.3, 12.8],
                'breitengrad' => [48.34, 48.9],
                'domainort' => 'Ingolstadt',
            ],
            'baugutachter-offenbach.com' => [
                'laengengrad' => [8.74, 9.0],
                'breitengrad' => [50.04, 50.4],
                'domainort' => 'Offenbach',
            ],
            'baugutachter-fuerth.com' => [
                'laengengrad' => [10.02, 11.03],
                'breitengrad' => [48.9, 49.485],
                'domainort' => 'Fürth',
            ],
            'baugutachter-wuerzburg.com' => [
                'laengengrad' => [9.6, 10.65],
                'breitengrad' => [49.485, 50.04],
                'domainort' => 'Würzburg',
            ],
            'baugutachter-heilbronn.com' => [
                'laengengrad' => [9.07, 10.02],
                'breitengrad' => [49.06, 49.485],
                'domainort' => 'Heilbronn',
            ],
            'baugutachter-pforzheim.com' => [
                'laengengrad' => [7.6, 8.85],
                'breitengrad' => [48.66, 49.06],
                'domainort' => 'Pforzheim',
            ],
            'baugutachter-bottrop.com' => [
                'laengengrad' => [6.89, 7.0],
                'breitengrad' => [51.49, 51.81],
                'domainort' => 'Bottrop',
            ],
            'baugutachter-remscheid.com' => [
                'laengengrad' => [7.14, 7.61],
                'breitengrad' => [51.12, 51.22],
                'domainort' => 'Remscheid',
            ],
            'baugutachter-reutlingen.com' => [
                'laengengrad' => [8.7, 9.5],
                'breitengrad' => [47.64, 48.66],
                'domainort' => 'Reutlingen',
            ],
            'baugutachter-bremerhaven.com' => [
                'laengengrad' => [8.2, 9.5],
                'breitengrad' => [53.3, 53.9],
                'domainort' => 'Bremerhaven',
            ],
            'baugutachter-koblenz.com' => [
                'laengengrad' => [6.8, 7.8],
                'breitengrad' => [50.2, 50.5],
                'domainort' => 'Koblenz',
            ],
            'baugutachter-erlangen.com' => [
                'laengengrad' => [10.65, 11.98],
                'breitengrad' => [49.485, 50.04],
                'domainort' => 'Erlangen',
            ],
            'baugutachter-jena.com' => [
                'laengengrad' => [11.25, 12.32],
                'breitengrad' => [50.19, 51.07],
                'domainort' => 'Jena',
            ],
            'baugutachter-trier.com' => [
                'laengengrad' => [6.3, 7.3],
                'breitengrad' => [49.4, 50.0],
                'domainort' => 'Trier',
            ],
            'baugutachter-salzgitter.com' => [
                'laengengrad' => [10.39, 11.24],
                'breitengrad' => [51.6, 52.18],
                'domainort' => 'Salzgitter',
            ],
            'baugutachter-siegen.com' => [
                'laengengrad' => [7.8, 8.6],
                'breitengrad' => [50.72, 51.03],
                'domainort' => 'Siegen',
            ],
            'baugutachter-guetersloh.com' => [
                'laengengrad' => [8.03, 8.63],
                'breitengrad' => [51.66, 51.95],
                'domainort' => 'Gütersloh',
            ],
            'baugutachter-kiel.eu' => [
                'laengengrad' => [8.5, 12],
                'breitengrad' => [54.13, 55],
                'domainort' => 'Kiel',
            ],
            'baugutachter-bremen.com' => [
                'laengengrad' => [9.2, 9.4],
                'breitengrad' => [52.7, 53.3],
                'domainort' => 'Bremen',
            ],
            'bausachverstaendiger-hannover.eu' => [
                'laengengrad' => [9.4, 9.75],
                'breitengrad' => [51.66, 51.95],
                'domainort' => 'Hannover',
            ],
            'baugutachter-frankfurt.eu' => [
                'laengengrad' => [8.4, 10.1],
                'breitengrad' => [49.4, 50.4],
                'domainort' => 'Frankfurt',
            ],
            'baugutachter-muenchen.eu' => [
                'laengengrad' => [10.85, 13.9],
                'breitengrad' => [47.79, 48.9],
                'domainort' => 'München',
            ],
            'baugutachter-leipzig.eu' => [
                'laengengrad' => [11.7, 12.7],
                'breitengrad' => [50.8, 51.5],
                'domainort' => 'Leipzig',
            ],
            'baugutachter-augsburg.eu' => [
                'laengengrad' => [10.4, 11.3],
                'breitengrad' => [48.0, 48.9],
                'domainort' => 'Augsburg',
            ],
            'baugutachter-bonn.eu' => [
                'laengengrad' => [6.8, 7.8],
                'breitengrad' => [50.5, 50.8],
                'domainort' => 'Bonn',
            ],
            'baugutachter-arnsberg.de' => [
                'laengengrad' => [7.34, 8.03],
                'breitengrad' => [51.27, 51.66],
                'domainort' => 'Arnsberg',
            ],
            'baugutachter-bochum.com' => [
                'laengengrad' => [7.06, 7.32],
                'breitengrad' => [51.28, 51.87],
                'domainort' => 'Bochum',
            ],
            'baugutachter-magdeburg.com' => [
                'laengengrad' => [11.24, 12.01],
                'breitengrad' => [51.96, 52.32],
                'domainort' => 'Magdeburg',
            ],
            'baugutachter-bielefeld.com' => [
                'laengengrad' => [5.0, 8.91],
                'breitengrad' => [51.87, 52.12],
                'domainort' => 'Bielefeld',
            ],
            'baugutachter-celle.com' => [
                'laengengrad' => [9.5, 10.39],
                'breitengrad' => [52.53, 53.3],
                'domainort' => 'Celle',
            ],
            'baugutachter-dortmund.com' => [
                'laengengrad' => [7.32, 8.45],
                'breitengrad' => [51.28, 51.87],
                'domainort' => 'Dortmund',
            ],
            'baugutachter-goettingen.com' => [
                'laengengrad' => [9.72, 11.24],
                'breitengrad' => [50.8, 51.6],
                'domainort' => 'Göttingen',
            ],
            'baugutachter-hamburg.com' => [
                'laengengrad' => [9.5, 11.8],
                'breitengrad' => [53.3, 55.1],
                'domainort' => 'Hamburg',
            ],
            'baugutachter-hildesheim.com' => [
                'laengengrad' => [9.4, 10.39],
                'breitengrad' => [51.6, 52.25],
                'domainort' => 'Hildesheim',
            ],
            'baugutachter-kassel.com' => [
                'laengengrad' => [9.0, 9.72],
                'breitengrad' => [50.7, 51.44],
                'domainort' => 'Kassel',
            ],
            'baugutachter-osnabrueck.com' => [
                'laengengrad' => [5.0, 8.41],
                'breitengrad' => [51.12, 52.74],
                'domainort' => 'Osnabrück',
            ],
            'baugutachter-paderborn.com' => [
                'laengengrad' => [8.45, 9.4],
                'breitengrad' => [51.2, 52.12],
                'domainort' => 'Paderborn',
            ],
            'baugutachter-wolfsburg.com' => [
                'laengengrad' => [10.39, 11.24],
                'breitengrad' => [52.32, 52.93],
                'domainort' => 'Wolfsburg',
            ],
            'gutachter-braunschweig.com' => [
                'laengengrad' => [10.39, 11.24],
                'breitengrad' => [51.6, 52.32],
                'domainort' => 'Braunschweig',
            ],
            'baugutachter-minden.com' => [
                'laengengrad' => [5.5, 16.0],
                'breitengrad' => [47.0, 55.0],
                'domainort' => 'Minden',
            ],
            'bausachverstaendiger-berlin.com' => [
                'laengengrad' => [12.71, 15.2],
                'breitengrad' => [51.68, 53.14],
                'domainort' => 'Berlin',
            ],
            'baugutachter-rostock.com' => [
                'laengengrad' => [12.0, 12.8],
                'breitengrad' => [53.78, 55.0],
                'domainort' => 'Rostock',
            ],
            'baugutachter-regensburg.com' => [
                'laengengrad' => [11.4, 12.9],
                'breitengrad' => [48.9, 49.5],
                'domainort' => 'Regensburg',
            ],
            'baugutachter-ulm.com' => [
                'laengengrad' => [9.5, 10.4],
                'breitengrad' => [48.0, 48.9],
                'domainort' => 'Ulm',
            ],
            'baugutachter-passau.com' => [
                'laengengrad' => [12.8, 13.9],
                'breitengrad' => [48.3, 49.1],
                'domainort' => 'Passau',
            ],
            'baugutachter-flensburg.com' => [
                'laengengrad' => [8.0, 11.5],
                'breitengrad' => [54.3, 55.1],
                'domainort' => 'Flensburg',
            ],
            'baugutachter-neumuenster.com' => [
                'laengengrad' => [8.8, 11.3],
                'breitengrad' => [53.9, 54.3],
                'domainort' => 'Neumünster',
            ],
            'baugutachter-luebeck.com' => [
                'laengengrad' => [10.0, 11.8],
                'breitengrad' => [53.3, 53.9],
                'domainort' => 'Lübeck',
            ],
            'baugutachter-marburg.com' => [
                'laengengrad' => [7.7, 9.0],
                'breitengrad' => [50.4, 50.9],
                'domainort' => 'Marburg',
            ],
            'baugutachter-mainz.com' => [
                'laengengrad' => [7.7, 8.4],
                'breitengrad' => [49.4, 50.04],
                'domainort' => 'Mainz',
            ],
            'baugutachter-wiesbaden.com' => [
                'laengengrad' => [7.7, 8.5],
                'breitengrad' => [50.04, 50.4],
                'domainort' => 'Wiesbaden',
            ],
            'baugutachter-darmstadt.com' => [
                'laengengrad' => [8.4, 9.6],
                'breitengrad' => [49.4, 50.04],
                'domainort' => 'Darmstadt',
            ],
            'baugutachter-fulda.com' => [
                'laengengrad' => [9.0, 10.1],
                'breitengrad' => [50.04, 50.7],
                'domainort' => 'Fulda',
            ],
            'baugutachter-rosenheim.com' => [
                'laengengrad' => [11.57, 13.9],
                'breitengrad' => [47.4, 47.95],
                'domainort' => 'Rosenheim',
            ],
            'baugutachter-landshut.com' => [
                'laengengrad' => [11.78, 13.9],
                'breitengrad' => [47.4, 47.95],
                'domainort' => 'Landshut',
            ],
            'baugutachter-kaufbeuren.com' => [
                'laengengrad' => [10.4, 11.57],
                'breitengrad' => [47.4, 47.95],
                'domainort' => 'Kaufbeuren',
            ],
            'baugutachter-kempten.com' => [
                'laengengrad' => [9.5, 10.4],
                'breitengrad' => [47.4, 48.0],
                'domainort' => 'Kempten',
            ],
            
        ];
        
        
        foreach ($domains as $domain => $domainData) {
     
        $data = DB::table('city_data')
        ->whereBetween('laenge', $domainData['laengengrad'])
        ->whereBetween('breite', $domainData['breitengrad'])
        ->get();
      
        $expert = DB::table('city_data')
                 ->join('gutachter', function($join) {
                     $join->on('city_data.laenge', '>=', 'gutachter.Lon')
                          ->on('city_data.laenge', '<=', 'gutachter.Lon2')
                          ->on('city_data.breite', '>=', 'gutachter.Lat')
                         ->on('city_data.breite', '<=', 'gutachter.Lat2');
                 })
                 ->get();
        
        $cityData = DB::table('city_data')->select('laenge', 'breite')->where('stadt_umlaut', $ortat)->first();
        $laengengrad = $cityData->laenge;
        $breitengrad = $cityData->breite;

        $nearestCities = DB::select(DB::raw("
    SELECT DISTINCT stadt_umlaut, stadt,
    (
        3959 * acos (
            cos ( radians(?) )
            * cos( radians( breite ) )
            * cos( radians( laenge ) - radians(?) )
            + sin ( radians(?) )
            * sin( radians( breite ) )
        )
    ) AS distance
    FROM city_data
    HAVING distance < 50
    ORDER BY distance
    LIMIT 0 , 16
"), [$breitengrad, $laengengrad, $breitengrad]);
        
      
        return view('unterseiten.bausachverstaendiger', [
            'nearestCities' => $nearestCities,
            'expert' => $expert,
            'data' => $data,
            'ortsname'=> $ortat,
            ]);    }  
        }       
    
}
