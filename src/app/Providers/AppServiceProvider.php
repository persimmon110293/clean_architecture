<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Packages\UseCases\User\Create\ICreateUserUseCase;
use App\Packages\UseCases\User\Create\CreateUserInteractor;
use App\Packages\Domain\User\Repositories\IUserRepository;
USE App\Packages\Infrastructure\Repositories\UserRepository;

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

        $this->app->bind(IUserRepository::class, UserRepository::class);
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
