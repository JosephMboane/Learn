<?php

namespace Laravel_Learn\Http\Middleware;

use Closure;

class IsAdmin
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
        if(auth()->check()&&$request->user()->admin ==0){
            return redirect()->guest('pessoa_perdida.index');
        }
        if(auth()->check()&&$request->user()->admin ==1){
            return redirect()->guest('admin.front-office');
        }
        return $next($request);
    }
}
