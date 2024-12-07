<?php

use Illuminate\Support\Facades\Route;
use Laravel\Nova\Http\Requests\NovaRequest;

/*
|--------------------------------------------------------------------------
| Tool Routes
|--------------------------------------------------------------------------
|
| Here is where you may register Inertia routes for your tool. These are
| loaded by the ServiceProvider of the tool. The routes are protected
| by your tool's "Authorize" middleware by default. Now - go build!
|
*/


// routes/inertia.php for NovaPulse Fixed to prevent conflict with nova-telescope-menu
Route::get('/', function (NovaRequest $request) {
    return inertia('NovaPulse');
});

Route::middleware(['nova'])
    ->get('/nova-pulse/frame', function () {
        return '<h1>Nova Pulse</h1>'; // Placeholder iframe content
    })
    ->name('nova-pulse.frame'); // This name is used in the `provideToScript` call