<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Ort;
use App\Models\Orteat;
use App\Models\Gutachter;
use App\Models\Certificate;
use App\Models\Vita;
use App\Models\Experience;
use App\Models\Region;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('ort', Ort::all());
        View::share('ortat', Orteat::all());
        View::share('status', Ort::all());
        View::share('status', Orteat::all());
        View::share('gutachter', Gutachter::all());
        View::share('gutachter_certificates', Certificate::all());
        View::share('vitas', Vita::all());
        View::share('professional_experience', Experience::all());
        View::share('regions', Region::all());
    }
}
