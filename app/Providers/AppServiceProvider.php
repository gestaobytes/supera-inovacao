<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use App\Models\Vehiclemodel;
use App\Observers\VehiclemodelObserver;
use App\Models\User;
use App\Observers\UserObserver;
use App\Models\Vehicle;
use App\Observers\VehicleObserver;
use App\Models\Maintenance;
use App\Observers\MaintenanceObserver;


class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            'App\Interfaces\v1\VehiclemodelInterface',
            'App\Repositories\v1\VehiclemodelRepository'
        );
        $this->app->bind(
            'App\Interfaces\v1\UserInterface',
            'App\Repositories\v1\UserRepository'
        );

        $this->app->bind(
            'App\Interfaces\v1\VehicleInterface',
            'App\Repositories\v1\VehicleRepository'
        );
        $this->app->bind(
            'App\Interfaces\v1\PermissionRoleInterface',
            'App\Repositories\v1\PermissionRoleRepository'
        );

        $this->app->bind(
            'App\Interfaces\v1\MaintenanceInterface',
            'App\Repositories\v1\MaintenanceRepository'
        );
    }

    public function boot()
    {
        Schema::defaultStringLength(191);

        Vehiclemodel::observe(VehiclemodelObserver::class);
        User::observe(UserObserver::class);
        Vehicle::observe(VehicleObserver::class);
        Maintenance::observe(MaintenanceObserver::class);
    }
}
