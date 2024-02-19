<?php

namespace Sagnikd\FolderAspire\Providers;

use Illuminate\Support\ServiceProvider;
use Sagnikd\FolderAspire\Classes\Folder;

class  FolderServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'../Config/Label.php' => config_path('Label.php'),
        ], 'Lebel');
    }

    /**
     * Register the application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'../Config/Label.php', 'Label');
        $this->app->bind(Folder::class);
    }
}