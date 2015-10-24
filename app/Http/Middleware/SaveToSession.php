<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SaveToSession
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
        //$request->session()->flush();
        $request->session()->put("goTo", $request->url());
        return $next($request);
    }
}
