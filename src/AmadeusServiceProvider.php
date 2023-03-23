<?php

namespace Aldogtz\AmdeusSelfservice;

use Illuminate\Support\ServiceProvider;
use Amadeus\Amadeus;

class AmadeusServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('amadeus', function() {
            return Amadeus::builder()->build();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}