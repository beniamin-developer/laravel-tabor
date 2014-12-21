<?php namespace LaravelTabor\ServiceProviders;

use Illuminate\Support\ServiceProvider;
//use LaravelTabor\Repositories\Eloquent\VehicleRepository;

class LaravelTaborServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->app->bind(
            'LaravelTabor\Repositories\VehicleRepositoryInterface',
            'LaravelTabor\Repositories\Eloquent\VehicleRepository'
        );
    }

}