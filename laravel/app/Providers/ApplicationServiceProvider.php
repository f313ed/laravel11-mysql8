<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * アプリケーション層のサービスプロバイダー
 *
 * GetStaffListUseCaseの依存関係を解決する
 */
class ApplicationServiceProvider extends ServiceProvider
{
    /**
     * アプリケーション層のサービスの登録
     *
     * @return void
     */
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

    /**
     * アプリケーション層のサービスの起動
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
