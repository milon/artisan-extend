<?php

namespace Milon\Artisan;

use Illuminate\Support\ServiceProvider;

class ServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public function boot()
    {
        //
    }

    public function register()
    {
        if ($this->app->runningInConsole()) {
            // $this->commands([
            //     TailCommand::class,
            // ]);
        }
    }

    public function provides()
    {
        //return ['command.tail'];
    }
}
