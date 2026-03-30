<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // One disk check per request; logo is included from navbar, footer, and preloader.
        View::share(
            'titanLogoSrc',
            file_exists(public_path('images/logo.webp'))
                ? asset('images/logo.webp')
                : asset('images/logo.svg')
        );
    }
}
