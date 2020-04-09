<?php

namespace MySang\LaravelAdmin;

use Illuminate\Support\ServiceProvider;
use MySang\LaravelAdmin\Roles;

class LaravelAdminServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/config.php', 'laraveladmin'
        );

        $this->app->singleton('roles', function () {
            return new Roles;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['roles'];
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishVendor();
        $this->loadServices();
    }

    /**
     * Publish vendor
     * 
     * @return void
     */
    private function publishVendor()
    {
        if ($this->app->runningInConsole()) {
            $this->publishConfig();
        }
    }

    /**
     * Publish config
     * 
     * @return void
     */
    private function publishConfig()
    {
        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('laraveladmin.php')
        ], 'config');
    }

    /**
     * Load services
     * 
     * @return void
     */
    private function loadServices()
    {
        $this->loadRoutes();
    }

    /**
     * Load routes service
     * 
     * @return void
     */
    private function loadRoutes()
    {
        $this->loadRoutesFrom(__DIR__.'/Routes/routes.php');
    }
}
