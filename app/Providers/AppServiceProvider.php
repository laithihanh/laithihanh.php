<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Category;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Blog;
use App\Models\Banner;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*',function($view){
            $view->with([
                'cart'=> new Cart(),
                'order_count'=>Order::count(),
                'category_acount'=>Category::count(),
                'product_acount'=>Product::count(),
                'cus_acount'=>Customer::count(),
                'blog_acount'=>Blog::count(),
                'banner_acount'=>Banner::count(),
            ]);
        });
    }
}
