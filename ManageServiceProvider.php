<?php

namespace DevNoisy\Manage;

use Illuminate\Support\ServiceProvider;

class ManageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/src/views', 'manage');//src o resources

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/src/views' => $this->app->resourcePath('views/vendor/pagination'),
            ], 'DevNoisy');
        }
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {   
        //
    }
}
