<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Providers\ApplicationServiceProvider;
use App\Providers\DomainServiceProvider;

/**
 * アプリケーションサービスプロバイダー
 *
 * ApplicationServiceProviderとDomainServiceProviderを登録する
 */
class AppServiceProvider extends ServiceProvider
{
    /**
     * アプリケーションサービスの登録
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->register(ApplicationServiceProvider::class);
        $this->app->register(DomainServiceProvider::class);
    }

    /**
     * アプリケーションサービスの起動
     *
     * @return void
     */
    public function boot(): void
    {
        //
    }
}
