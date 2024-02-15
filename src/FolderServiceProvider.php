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
            __DIR__.'../Config/Label.php' => config_path('folder.php'),
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