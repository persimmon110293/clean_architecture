<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Packages\UseCases\User\Create\ICreateUserUseCase;
use App\Packages\UseCases\User\Create\CreateUserInteractor;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ICreateUserUseCase::class, CreateUserInteractor::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
