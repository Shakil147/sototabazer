<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class AdminMiddleware
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
        if(Auth::user()->post == 'admin'){ 
            return $next($request);        
           
        }
        else{
            return back()->with('message','You Have Not Permission To access');  
        }
    }
}
