<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


class SavePreviousRoute
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->method() === 'GET' && !in_array(Route::currentRouteName(), ['storeSignup'])) {
            session(['previous_route' => Route::currentRouteName()]);
        }

        return $next($request);
    }
}
