<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

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
        setlocale(LC_ALL, "es_CL.utf8");

        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }

        $path = resource_path('resources-manifest.json');
        if (file_exists($path)) {
            $resources = json_decode(file_get_contents($path), true);
            config(compact('resources'));
        }
    }
}
