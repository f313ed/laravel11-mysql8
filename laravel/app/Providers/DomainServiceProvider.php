<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domain\Staff\Repositories\StaffRepositoryInterface;
use App\Domain\Staff\Repositories\StaffRepository;

/**
 * ドメイン層のサービスプロバイダー
 *
 * StaffRepositoryInterfaceとStaffRepositoryの依存関係を解決する
 */
class DomainServiceProvider extends ServiceProvider
{
    /**
     * ドメイン層のサービスの登録
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            StaffRepositoryInterface::class,
            StaffRepository::class
        );
    }

    /**
     * ドメイン層のサービスの起動
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
