<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::User();
            if ($user->role_id == 1) {
                return $next($request);
            } else {
                return redirect()->route('home.index');
            }
        } else {
            return redirect()->route('login');
        }
    }
}
