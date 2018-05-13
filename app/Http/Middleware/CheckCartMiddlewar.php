<?php

namespace App\Http\Middleware;

use Closure;
use Cart;

class CheckCartMiddlewar
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
        if (Cart::count() == 0) {
            return redirect('/checkout-login');
        }

        return $next($request);
    }
}
