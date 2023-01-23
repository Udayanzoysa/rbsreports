<?php

namespace RBS\Rbsreports;

use Illuminate\Support\ServiceProvider;

class RbsreportsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Rbs\Rbsreports\RbsreportsController');
        $this->loadViewsFrom(__DIR__ . '/views', 'rbsreports');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . '/routes.php';
    }
}