<?php

namespace BScan;

use Illuminate\Support\ServiceProvider;

/**
 * Class HelloServiceProvider
 */
class HelloServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('bscan', Hello::class);
    }
}