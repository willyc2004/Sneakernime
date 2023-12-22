<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
{
    if (Auth::check()) {
        if (Auth::user()->role == "0") {
            return $next($request);
        } else {
            // Redirect with a query parameter for the error message
            return redirect('/home?message=Akses ditolak, anda bukan User!');
        }
    } else {
        // Redirect with a query parameter for the info message
        return redirect('/home?message=Login untuk mengakses situs web');
    }
}
}
