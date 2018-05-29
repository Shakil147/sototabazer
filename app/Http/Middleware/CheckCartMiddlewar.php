<?php

namespace App\Http\Middleware;

use Closure;
use Cart;
use Session;

class CheckCartMiddlewar
{
    /**
     * Handle an incoming request.
     *

        
        $customerName = Session::get('customerName');
        $customerId = Session::get('customerId');
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Cart::count() >= 1) {
            return $next($request);
        }
        elseif (Session::get('customerName')) {
         return redirect('/')->with('message','you have not any product in cart');
        }
        return redirect(route('account.register'));

        
    }
}
