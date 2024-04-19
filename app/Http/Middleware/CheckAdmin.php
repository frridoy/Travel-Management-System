<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle(Request $request, Closure $next)
    {
        // dd(auth()->user()->role);
        if (auth()->user()->role=='Admin')
        {
            return $next ($request);
        }
        // notify()->error('You are not admin');
        return redirect()->route('home');
    }
}
