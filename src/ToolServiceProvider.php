<?php

namespace Madtechservices\NovaPulse;

use Illuminate\Support\Facades\Route;
use Laravel\Nova\Nova;
use Illuminate\Support\ServiceProvider;

class ToolServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->app->booted(function () {
            $this->routes();
        });

        // Register the view namespace for this tool
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'nova-pulse');
    }


    /**
     * Register the tool's routes.
     */
    protected function routes()
    {
        if ($this->app->routesAreCached()) {
            return;
        }

        // Register the nova-pulse route under /nova
        Route::middleware(['nova'])
            ->prefix('nova/nova-pulse')
            ->group(function () {
                Route::get('/', function () {
                    return view('nova-pulse::iframe', [
                        'pulseUrl' => url('/pulse'), // Laravel Pulse URL
                    ]);
                })->name('nova-pulse.frame');
            });
    }



}
