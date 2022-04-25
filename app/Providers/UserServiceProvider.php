<?php

namespace App\Providers;

use App\Services\Interfaces\IUserServiceInterface;
use App\Services\UserService;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(IUserServiceInterface::class, function ($app) {
            return new UserService();
        });
    }
}
