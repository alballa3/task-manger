<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class checkUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $accountId = $request->route('id'); // assuming the route parameter is `account_id`

        if (Auth::check() && Auth::user()->id != $accountId) {
            return redirect('/'); // Redirect to the main page or any other page
        }

        return $next($request);
    }
}
