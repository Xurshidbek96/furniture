<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check())
            $name = auth()->user()->name;
        else
            $name = 'Guest';

        \Log::info(
                'Name : '.$name.
                ', IP : '.$request->ip().
                ' - path : '.$request->path().
                ' , userAgent : '. $request->header('User-Agent').
                ' , date : '. now()
                );
        return $next($request);
    }
}
