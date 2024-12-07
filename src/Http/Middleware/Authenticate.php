<?php

namespace Madtechservices\NovaPulse\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Authenticate
{
    public function handle(Request $request, Closure $next)
    {
        // Your authentication logic here
        return $next($request);
    }
}
