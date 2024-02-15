<?php

namespace Sagnikd\FolderAspire;

use Illuminate\Support\ServiceProvider;

class  FolderServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'../config/app.php' => config_path('app.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //
    }
}