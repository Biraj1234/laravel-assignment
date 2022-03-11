<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate
{

    public function handle(Request $request, Closure $next)
    {
        $isAutheticated = true;

        if ($isAutheticated === true) {

            return $next($request);
        } else {
            dd('Sorry you are not authenticated');
        }
    }
}
