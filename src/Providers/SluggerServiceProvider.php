<?php

namespace Ispooya\Slugger\Providers;

use Illuminate\Support\ServiceProvider;
use Ispooya\Slugger\Services\Slugger;

class SluggerServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton('slugger', function ($app) {
            return new Slugger();
        });
    }
}
