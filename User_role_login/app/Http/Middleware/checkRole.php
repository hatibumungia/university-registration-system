<?php

namespace App\Http\Middleware;

use Closure;

class checkRole
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
        if($request->user()==null){
            return response("insufient permission",401);
        }else{
    $actions=$request->route()->getAction();
    $roles=isset($actions['roles']) ? $actions['roles']:null;
        if($request->user()->hasAnyRole($roles)||!$roles){
                return $next($request);    
        } 
         return response("insufient permission",401); 
        }
         return $next($request); 
    }
}
