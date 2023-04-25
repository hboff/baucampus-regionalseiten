<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\GutachterController;

use App\Http\Controllers\OrteatController;
use Illuminate\Support\Facades\DB;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$routes = [
    'schimmelpilz',
    'hauskaufberatung',
    'baubegleitung',
    'bauschaden',
    'energieberatung',
    'immobilienbewertung',
    'gutachter',
    'team',
    'kontakt',
    'kosten-preise',
    'research',
    'show',
    'impressum',
    'datenschutzerklaerung',
    
];

$domains = [
    'baugutachter-sylt.com' => [
        'laengengrad' => [8.2, 8.51],
        'breitengrad' => [54.74, 55.07],
        'domainort' => 'Sylt',
    ],
    'baugutachter-eisenach.com ' => [
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
        'domainort' => 'Ludwigshafen',
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
    
];


foreach ($domains as $domain => $domainData) {
Route::domain($domain)->group(function () use ($routes, $domainData) {
    Route::get('/', function() use ($domainData) {
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
        View::share('data', $data);
        return view('index', ['expert' => $expert,'domainort' => $domainData['domainort']]);
    });
    Route::get('/gutachter/{gutachter}', [GutachterController::class, 'show'], function (Request $request){});
    Route::get('/{ort}/bausachverstaendiger', [OrteatController::class, 'show'], function () use ($domainData) {})
            ->middleware('cache.headers:private;max_age=3600');
    Route::get('/baugutachter/{region}', function($region){
        return view ('baugutachter', ['ortsname' => $region]);
});
    Route::get('contact-us', [ContactController::class, 'index']);
    Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');
foreach ($routes as $route) {
Route::get($route, function () use ($route, $domainData) {
$data = DB::table('city_data')
->whereBetween('laenge', $domainData['laengengrad'])
->whereBetween('breite', $domainData['breitengrad'])
->get();


//In a SQL join, the two tables being joined are combined based on the values in a specified column or columns. The ON clause in a join specifies the conditions for combining the rows from the two tables.
//
//In the example I provided, the orteat and gutachter tables are joined on the breitengrad column in the orteat table and the Lon and Lon2 columns in the gutachter table. The join is performed using the on method in Laravel's Eloquent ORM, and the conditions are specified as orteat.breitengrad >= gutachter.Lon and orteat.breitengrad <= gutachter.Lon2. This means that only the rows from the orteat table where the breitengrad value falls between the Lon and Lon2 values in the gutachter table will be included in the result set.
//
//The result of the join is a single table that includes all columns from both the orteat and gutachter tables. The columns from the orteat table will have the same values for each row, while the name column from the gutachter table will have different values for each row, depending on the matching breitengrad value.

//HIER DIE WHEREBETWEEEN VON $data in $expert einfügen --> denke ich
$expert = DB::table('city_data')
           ->join('gutachter', function($join) {
               $join->on('city_data.laenge', '>=', 'gutachter.Lon')
                    ->on('city_data.laenge', '<=', 'gutachter.Lon2')
                    ->on('city_data.breite', '>=', 'gutachter.Lat')
                         ->on('city_data.breite', '<=', 'gutachter.Lat2');
           })
           ->get();
                  
return view($route, ['data' => $data, 'expert' => $expert, 'domainort' => $domainData['domainort']]);
});
}
});
}


 