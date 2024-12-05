<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class IdentifyUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
{
    $is_logged_in = Auth::check();
    $user = null;
    $role = null;

    if ($is_logged_in) {
        $user = Auth::user();
        $role = $user->role; // Assuming 'role' is a column in your `users` table
    }

    $request->merge([
        'is_logged_in' => $is_logged_in,
        'role' => $role,
    ]);

    View::share('user', $user);
    View::share('is_logged_in', $is_logged_in);
    View::share('role', $role);

    return $next($request);
}

}
