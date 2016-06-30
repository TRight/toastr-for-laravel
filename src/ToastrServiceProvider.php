<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Yuansir\Toastr\Toastr;

class ToastrServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewFrom(__DIR__.'/views','Toastr');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/vendor/toastr'),
            __DIR__.'/config/toastr.php'=>config_path('toastr.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('toastr',function($app){
            return new Toastr($app['session'],$app['config']);
        });
    }
}
