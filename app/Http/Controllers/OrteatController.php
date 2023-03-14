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
            'immobilienbewertung-bielefeld.com' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
            ],
            'immobilienbewertung-wuppertal.eu' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
            ],
            'baucampus.at' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
            ],
            'baucampus.be' => [
                'laengengrad' => [1.0, 12.0],
                'breitengrad' => [10.0, 52.0],
            ],
            'baucampus.nl' => [
                'laengengrad' => [52.0, 53.0],
                'breitengrad' => [10.0, 52.0],
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
                          ->on('city_data.laenge', '<=', 'gutachter.Lon2');
                 })
                 ->get();
        
        $cityData = DB::table('city_data')->select('laenge', 'breite')->where('stadt', $ortat)->first();
        $laengengrad = $cityData->laengengrad;
        $breitengrad = $cityData->breitengrad;

        $nearestCities = DB::select(DB::raw("
            SELECT stadt, (
                3959 * acos (
                    cos ( radians(?) )
                    * cos( radians( breitengrad ) )
                    * cos( radians( laengengrad ) - radians(?) )
                    + sin ( radians(?) )
                    * sin( radians( breitengrad ) )
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
    public function index() {
        $status='at';
        return view ('index', compact('status'));
    }
    public function startseite() {
        $status='at';
        return view ('startseite', compact('status'));
    }
    public function schimmelpilz() {
        $status='at';
        return view ('unterseiten.schimmelpilz', compact('status'));
    }
    public function hauskaufberatung() {
        $status='at';
        return view ('unterseiten.hauskaufberatung', compact('status'));
    }
    public function baubegleitung() {
        $status='at';
        return view ('unterseiten.baubegleitung', compact('status'));
    }
    public function bauschaden() {
        $status='at';
        return view ('unterseiten.bauschaden', compact('status'));
    }
    public function energieberatung() {
        $status='at';
        return view ('unterseiten.energieberatung', compact('status'));
    }
    public function immobilienbewertung() {
        $status='at';
        return view ('unterseiten.immobilienbewertung', compact('status'));
    }
    public function team() {
        $status='at';
        return view ('unterseiten.team', compact('status'));
    }
    public function gutachter() {
        $status='at';
        return view ('unterseiten.gutachter', compact('status'));
    }
}