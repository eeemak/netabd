<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        app('view')->composer('layouts.master', function ($view) {
            $action = app('request')->route()->getAction();
    
            $controller = class_basename($action['controller']);
    
            list($controller, $action) = explode('@', $controller);
    
            $view->with(compact('controller', 'action'));
        });
        Schema::defaultStringLength(191);
    }
}
