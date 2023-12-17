<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
{
    if (Auth::check()) {
        if (Auth::user()->role == "1") {
            return $next($request);
        } else {
            // Redirect with a query parameter for the error message
            return redirect('/home?message=Access Denied as you are not Admin!');
        }
    } else {
        // Redirect with a query parameter for the info message
        return redirect('/home?message=Login to access the website info');
    }
}
}
