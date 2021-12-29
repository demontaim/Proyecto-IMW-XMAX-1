<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use URL;


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

    
    public function boot()
    {
        //Forzar que nuestros datos se envien de forma segura
        URL::forceScheme('https');
    }
}
