<?php namespace LaravelTabor\ServiceProviders;

use Illuminate\Support\ServiceProvider;
use LaravelTabor\Facades\Src\Cart;

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

        $this->app->bind(
            'LaravelTabor\Repositories\CartRepositoryInterface',
            'LaravelTabor\Repositories\Eloquent\CartRepository'
        );

        $this->app->bind(
            'LaravelTabor\Facades\CartInterface',
            'LaravelTabor\Facades\Src\Cart'
        );

        /*
        |
        | Facades
        |
        */
        $this->app['cart'] = $this->app->share(function($app)
        {
            return new Cart($app->make('LaravelTabor\Repositories\CartRepositoryInterface'));
        });

        $this->app->booting(function()
        {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('Cart', 'LaravelTabor\Facades\Facade\Cart');
        });
    }
}
