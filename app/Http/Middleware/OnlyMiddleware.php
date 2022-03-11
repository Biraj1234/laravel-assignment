<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class OnlyMiddleware
{

    public function handle(Request $request, Closure $next)
    {
        dd('OnlyMiddleware is running');
        return $next($request);
    }
}
