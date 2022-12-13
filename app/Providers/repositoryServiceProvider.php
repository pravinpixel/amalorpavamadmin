<?php

namespace App\Providers;

use App\Interfaces\masterRepositoryInterface;
use App\Repositories\masterRepositories;
use App\Repositories\masterRepository;
use Illuminate\Support\ServiceProvider;

class repositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
       $this->app->bind(masterRepositoryInterface::class,masterRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
