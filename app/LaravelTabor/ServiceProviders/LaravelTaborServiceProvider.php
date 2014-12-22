<?php namespace LaravelTabor\ServiceProviders;

use Illuminate\Support\ServiceProvider;

class LaravelTaborServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->app->bind(
            'LaravelTabor\Repositories\VehicleRepositoryInterface',
            'LaravelTabor\Repositories\Eloquent\VehicleRepository'
        );

        $this->app->bind(
            'LaravelTabor\Repositories\VersioningVehicleRepositoryInterface',
            'LaravelTabor\Repositories\Eloquent\VersioningVehicleRepository'
        );
    }
}
