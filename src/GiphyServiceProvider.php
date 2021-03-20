<?php

namespace Nahorr\Giphy;

use Illuminate\Support\ServiceProvider;

class GiphyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // register our controller
        $this->app->make('Nahorr\Giphy\GiphyController');
        $this->loadViewsFrom(__DIR__.'/views', 'giphy');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
       //Register Routes
       include __DIR__.'/routes.php';
    }
}
