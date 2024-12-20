<?php

namespace Prathyeshm\Accounts\Providers;

use Illuminate\Support\ServiceProvider;

class AccountServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register bindings or services here
    }

    public function boot()
    {
        // Perform boot actions like routes, views, migrations
        $this->loadRoutesFrom(__DIR__.'/../Routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../../src/Views', 'accounts');
    }
}
