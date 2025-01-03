<?php

namespace App\Providers;

use App\Repositories\EloquentSeriesRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\SeriesRepositoryInterface;

class SeriesRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(SeriesRepositoryInterface::class, EloquentSeriesRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
