<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter; // Correctly import RateLimiter
use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request; // Correctly import Request

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
        RateLimiter::for('reviews', function (Request $request) {
            return Limit::perHour(3)->by(
                $request->user()?->id ?: $request->ip() // Check user ID or fallback to IP
            );
        });
    }
}
