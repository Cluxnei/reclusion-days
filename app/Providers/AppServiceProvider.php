<?php

namespace App\Providers;

use App\WorkOfArt;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
        Schema::defaultStringLength(191);
        Route::bind('WorkOfArt', static function ($slug) {
            return WorkOfArt::query()->firstWhere('slug', '=', $slug);
        });
    }
}
