<?php

namespace App\Http\Middleware;

use Closure;

class adminSess
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
        if (!$request->session()->get('loggedAdmin')) {
            return redirect()->route('login.loginPage');
        }
        return $next($request);
    }
}
