<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ExceptMiddleware
{

    public function handle(Request $request, Closure $next)
    {
        dd('ExceptMiddleware is running');
        return $next($request);
    }
}
