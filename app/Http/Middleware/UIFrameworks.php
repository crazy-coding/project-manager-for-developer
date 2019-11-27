<?php

namespace App\Http\Middleware;

use Closure;

class UIFrameworks
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
        if (session()->has('ui_fm')) {
            config(['app.ui_fm' => session()->get('ui_fm')]);
        }
        return $next($request);
    }
}
