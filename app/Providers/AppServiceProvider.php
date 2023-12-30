<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Wishlist;
use Illuminate\Support\ServiceProvider;
use View;
use Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view){
            $view->with('categories', Category::where('status', 1)->get());
        });
        View::composer('*', function ($view){
            $view->with('wishlists', Wishlist::where('customer_id', Session::get('customer_id'))->get());
        });
    }
}
