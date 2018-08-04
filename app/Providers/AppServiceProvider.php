<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Category;
use App\Size;
use App\Color;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        view()->share('name' , 'ZentGroup');
        if(Schema::hasTable('categories')){
            View::share('categories', Category::where('parent_id', '==', 0)->get());
        }

        if(Schema::hasTable('sizes')){
            View::share('sizes', Size::all());
        }

        if(Schema::hasTable('colors')){
            View::share('colors', Color::all());
        }
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
