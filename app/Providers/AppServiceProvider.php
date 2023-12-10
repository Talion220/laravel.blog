<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


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

        Schema::defaultStringLength(191);
        view()->composer('layouts.sidebar',function ($view){

            if (Cache::has('cats')){
                $cats = Cache::get('cats');
            }else{
                $cats = Category::withCount('posts')->orderBy('posts_count','desc')->get();
                Cache::put('cats',$cats,30);
            }

            $view->with('popular_posts',Post::orderBy('views','desc')->limit(3)->get());

            $view->with('cats',$cats );
        });

        view()->composer('layouts.navbar',function ($view){

            if (Cache::has('cats_menu')){
                $cats_menu = Cache::get('cats_menu');
            }else{
                $cats_menu = Category::withCount('posts')->orderBy('posts_count','desc')->get();
                Cache::put('cats_menu',$cats_menu,5);
            }

//            $view->with('popular_posts',Post::orderBy('views','desc')->limit(3)->get());

            $view->with('cats_menu',$cats_menu );
        });
    }
}
