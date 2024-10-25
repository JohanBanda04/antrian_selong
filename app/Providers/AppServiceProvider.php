<?php

namespace App\Providers;

use App\Models\Salaman;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;

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
        Paginator::useBootstrap();
        Gate::define('admin', function (Salaman $salaman) {
            return $salaman->roles == 'superadmin';
        });
        Gate::define('rumahtangga', function (Salaman $salaman) {
            return $salaman->roles == 'rumahtangga';
        });
    }
}
