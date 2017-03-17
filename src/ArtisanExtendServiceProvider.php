<?php

namespace Milon\Artisan;

use Milon\Artisan\Console\MakeClass;
use Illuminate\Support\ServiceProvider;

class ArtisanExtendServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public function boot()
    {
        //
    }

    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeClass::class,
            ]);
        }
    }

    public function provides()
    {
        return [];
    }
}
