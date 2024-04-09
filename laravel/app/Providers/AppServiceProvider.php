<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Providers\ApplicationServiceProvider;
use App\Providers\DomainServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->register(ApplicationServiceProvider::class);
        $this->app->register(DomainServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
