<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domain\Staff\Repositories\StaffRepositoryInterface;
use App\Domain\Staff\Repositories\StaffRepository;

class DomainServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            StaffRepositoryInterface::class,
            StaffRepository::class
        );
    }

    public function boot()
    {
        //
    }
}
