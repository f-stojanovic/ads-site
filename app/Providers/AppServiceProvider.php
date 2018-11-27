<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any Application services.
     *
     * @return void
     */
    public function boot()
    {
        \App\Area::creating(function ($area) {

            $prefix = $area->parent ? $area->parent->name . ' ' : '';
            $area->slug = str_slug($prefix . $area->name);
        });
    }

    /**
     * Register any Application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
