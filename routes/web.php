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
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
        'domainort' => 'Sylt',
    ],
    'baugutachter-eisenach.com ' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
        'domainort' => 'Eisenach',
    ],
    'baugutachter-koeln.com' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
        'domainort' => 'Eisenach',
    ],
    'baugutachter-muenster.eu' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
        'domainort' => 'Münster',
    ],
    'baugutachter-mannheim.eu' => [
        'laengengrad' => [52.0, 53.0],
        'breitengrad' => [10.0, 52.0],
        'domainort' => 'Mannheim',
    ],
     'baugutachter-moenchengladbach.com' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
        'domainort' => 'Mönchengladbach',
    ],
    'baugutachter-gelsenkirchen.eu' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
        'domainort' => 'Gelsenkirchen',  
    ],
    'baugutachter-braunschweig.eu' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
        'domainort' => 'Braunschweig',
    ],
    'baugutachter-chemnitz.com' => [
        'laengengrad' => [52.0, 53.0],
        'breitengrad' => [10.0, 52.0],
        'domainort' => 'Chemnitz',
    ],
    'baugutachter-halle.eu' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
        'domainort' => 'Halle',
    ],
    'baugutachter-freiburg.com' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
        'domainort' => 'Freiburg',
    ],
    'baugutachter-krefeld.eu' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
        'domainort' => 'Krefeld',
    ],
    'baugutachter-oberhausen.com' => [
        'laengengrad' => [52.0, 53.0],
        'breitengrad' => [10.0, 52.0],
        'domainort' => 'Oberhausen',
    ],
    'baugutachter-hagen.com' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
        'domainort' => 'Hagen',
    ],
    'baugutachter-potsdam.com' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
        'domainort' => 'Potsdam',
    ],
    'baugutachter-saarbruecken.com' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
        'domainort' => 'Saarbrücken',
    ],
    'baugutachter-ludwigshafen.com' => [
        'laengengrad' => [52.0, 53.0],
        'breitengrad' => [10.0, 52.0],
        'domainort' => 'Ludwigshafen',
    ],
    'baugutachter-muelheim.com' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
        'domainort' => 'Mülheim',
    ],
    'baugutachter-oldenburg.com' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
         'domainort' => 'Oldenburg',
    ],
    'baugutachter-leverkusen.com' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
        'domainort' => 'Leverkusen',
    ],
    'baugutachter-solingen.com' => [
        'laengengrad' => [52.0, 53.0],
        'breitengrad' => [10.0, 52.0],
        'domainort' => 'Solingen',
    ],
    'baugutachter-heidelberg.com' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
        'domainort' => 'Heidelberg',
    ],  
    'baugutachter-herne.com' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
        'domainort' => 'Herne',
    ],
    'baugutachter-neuss.com' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
        'domainort' => 'Neuss',
    ],
    'baugutachter-ingolstadt.com' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
        'domainort' => 'Ingolstadt',
    ],
    'baugutachter-offenbach.com' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
        'domainort' => 'Offenbach',
    ],
    'baugutachter-fuerth.com' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
        'domainort' => 'Fürth',
    ],
    'baugutachter-wuerzburg.com' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
        'domainort' => 'Wuerzburg',
    ],
    'baugutachter-heilbronn.com' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
        'domainort' => 'Heilbronn',
    ],
    'baugutachter-pforzheim.com' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
        'domainort' => 'Pforzheim',
    ],
    'baugutachter-bottrop.com' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
        'domainort' => 'Bottrop',
    ],
    'baugutachter-remscheid.com' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
        'domainort' => 'Remscheid',
    ],
    'baugutachter-reutlingen.com' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
        'domainort' => 'Reutlingen',
    ],
    'baugutachter-bremerhaven.com' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
        'domainort' => 'Bremerhaven',
    ],
    'baugutachter-koblenz.com' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
        'domainort' => 'Koblenz',
    ],
    'baugutachter-erlangen.com' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
        'domainort' => 'Erlangen',
    ],
    'baugutachter-jena.com' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
        'domainort' => 'Jena',
    ],
    'baugutachter-trier.com' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
        'domainort' => 'Trier',
    ],
    'baugutachter-salzgitter.com' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
        'domainort' => 'Salzgitter',
    ],
    'baugutachter-siegen.com' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
        'domainort' => 'Siegen',
    ],
    'baugutachter-guetersloh.com' => [
        'laengengrad' => [1.0, 12.0],
        'breitengrad' => [10.0, 52.0],
        'domainort' => 'Gütersloh',
    ],
];


foreach ($domains as $domain => $domainData) {
Route::domain($domain)->group(function () use ($routes, $domainData) {
    Route::get('/', function() use ($domainData) {
        return view('index', ['domainort' => $domainData['domainort']]);
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
$data = DB::table('orteat')
->whereBetween('laengengrad', $domainData['laengengrad'])
->whereBetween('breitengrad', $domainData['breitengrad'])
->get();


//In a SQL join, the two tables being joined are combined based on the values in a specified column or columns. The ON clause in a join specifies the conditions for combining the rows from the two tables.
//
//In the example I provided, the orteat and gutachter tables are joined on the breitengrad column in the orteat table and the Lon and Lon2 columns in the gutachter table. The join is performed using the on method in Laravel's Eloquent ORM, and the conditions are specified as orteat.breitengrad >= gutachter.Lon and orteat.breitengrad <= gutachter.Lon2. This means that only the rows from the orteat table where the breitengrad value falls between the Lon and Lon2 values in the gutachter table will be included in the result set.
//
//The result of the join is a single table that includes all columns from both the orteat and gutachter tables. The columns from the orteat table will have the same values for each row, while the name column from the gutachter table will have different values for each row, depending on the matching breitengrad value.

//HIER DIE WHEREBETWEEEN VON $data in $expert einfügen --> denke ich
$expert = $data = DB::table('orteat')
           ->join('gutachter', function($join) {
               $join->on('orteat.laengengrad', '>=', 'gutachter.Lon')
                    ->on('orteat.laengengrad', '<=', 'gutachter.Lon2');
           })
           ->get();




           
return view($route, ['data' => $data, 'expert' => $expert, 'domainort' => $domainData['domainort']]);
});
}
});
}



//Route::get('/kontakt', function () {
//    return view('kontakt');
//});

//Route::group(['domain' => 'baucampus.at'], function () {
//Route::get('/startseite', [OrteatController::class, 'startseite']);
//Route::get('/gutachter', [GutachterController::class, 'index']);
//Route::get('/{ort}/bausachverstaendiger', [OrteatController::class, 'show'], function (Request $request){});
//Route::get('/gutachter/{gutachter}', [GutachterController::class, 'show'], function (Request $request){});
//Route::get('/schimmelpilz', [OrteatController::class, 'schimmelpilz']);
//Route::get('/hauskaufberatung', [OrteatController::class, 'hauskaufberatung']);
//Route::get('/baubegleitung', [OrteatController::class, 'baubegleitung']);
//Route::get('/bauschaden', [OrteatController::class, 'bauschaden']);
//Route::get('/energieberatung', [OrteatController::class, 'energieberatung']);
//Route::get('/immobilienbewertung', [OrteatController::class, 'immobilienbewertung']);
//Route::get('/', [OrteatController::class, 'index']);
//Route::get('/team', [OrteatController::class, 'team']);
//Route::get('/gutachter', [OrteatController::class, 'gutachter']);
//});


//   Route::get('/gutachter', [GutachterController::class, 'index']);
//Route::get('/kontakt', function(){
//    return view('unterseiten/kontakt');
//});
//Route::get('/kosten-preise', function() {
//    return view('unterseiten/kosten-preise');
//});
//Route::get('/research', function() {
//    return view('unterseiten/research');
//});
//Route::get('/show', function(){
//    return view('orte/show');
//});
//Route::get('/impressum', function() {
//    return view('unterseiten/impressum');
//});
//Route::get('/orte/index', function(){
//    return view('orte/index');
//});
//
