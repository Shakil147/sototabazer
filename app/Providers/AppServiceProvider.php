<?php

namespace App\Providers;
use View;
use App\Cetagory;
use Cart;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('frontend.includs.haderBottom', function ($view) {
            $view->with('cart', Cart::content());
        });
        View::composer('frontend.includs.haderBottom', function ($view) {
            $view->with('catagoris', Cetagory::where('publication_status',1)->get());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
