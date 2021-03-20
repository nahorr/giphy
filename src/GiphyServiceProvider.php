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
       $this->loadViewsFrom(__DIR__.'/views', 'giphy');
       $this->publishes([

            // Views
            __DIR__.'/../resources/views/search.blade.php' => resource_path('views/vendor/nnamdi/search.blade.php'),

        ]);


    // Translations
    }
}
