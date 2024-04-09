<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ApplicationServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            \App\Application\StaffList\GetStaffListUseCase::class,
            function ($app) {
                return new \App\Application\StaffList\GetStaffListUseCase(
                    $app->make(\App\Domain\Staff\StaffFacade::class)
                );
            }
        );
    }

    public function boot()
    {
        //
    }
}
