<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class CheckIsAdmin
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
        if (!Auth::user()->is_admin) {
            return redirect(route('home'))->with('error', 'Доступ разрешен только администраторам!');
        }
        return $next($request);
    }
}
