<?php

namespace enormous\form_major;

use Illuminate\Support\ServiceProvider;

class FormMajorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function register()
    {
        $this->app->make('enormous\form_major\FormMajorController');
        $this->loadViewsFrom(__DIR__.'/views', 'form_major');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }
}
