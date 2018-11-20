<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; //Import Schema

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191); //Solved by increasing StringLengt



    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if(config('app.env') == 'cloud' || config('app.env') == 'production'){
            $this->app['url']->forceScheme('https');
        }
    }
}
