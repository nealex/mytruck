<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//use Illuminate\Database\Schema as Schema;

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
    //

    public function boot()
    {
//Illuminate\Support\Facades\Schema
        \Illuminate\Support\Facades\Schema::defaultStringLength(191);
       // Schema::defaultStringLength(191);
    }
}
