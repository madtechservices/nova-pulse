<?php
namespace Madtechservices\NovaPulse;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Nova;
use Madtechservices\NovaPulse\Http\Middleware\Authorize;
use Madtechservices\NovaPulse\Http\Middleware\Authenticate;

class ToolServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->booted(function () {
            $this->routes();
        });

         // Register the tool with a unique key
         Nova::tools([
            new NovaPulse(), // Ensure this class exists and is autoloaded
        ]);

        // Provide configuration to Nova frontend
        Nova::provideToScript([
            'nova-pulse' => [
                'pulse' => route('nova-pulse.frame'), // Use the named route for the iframe
            ],
        ]);
    }

    /**
     * Register the tool's routes.
     *
     * @return void
     */
    protected function routes()
    {
        if ($this->app->routesAreCached()) {
            return;
        }

        Nova::router(['nova', Authenticate::class, Authorize::class], 'nova-pulse')
            ->group(__DIR__.'/../routes/inertia.php');

        // Route::middleware(['nova', Authenticate::class, Authorize::class])
        //     ->prefix('nova-vendor/nova-pulse')
        //     ->group(__DIR__.'/../routes/inertia.php');

        Route::middleware(['nova', Authorize::class])
            ->prefix('nova-vendor/nova-pulse')
            ->group(__DIR__.'/../routes/api.php');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
