<?php

namespace App\Providers;

use App\Repositories\Appointment\AppointmentRepository;
use App\Repositories\Appointment\AppointmentRepositoryImpl;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(AppointmentRepository::class, AppointmentRepositoryImpl::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
