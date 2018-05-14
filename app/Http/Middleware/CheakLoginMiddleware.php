<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class CheakLoginMiddleware
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
        $customerName = Session::get('customerName');
        $customerId = Session::get('customerId');
        if($customerName){  
            if ($customerId) {
                return back()->with('message',' Yor are allredy loged in');
             }
        }
            return $next($request);
    }
}
