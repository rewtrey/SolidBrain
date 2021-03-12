<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class MenuServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->TopMenu();
    }

    //Top menu for users
    public  function topMenu()
    {
        View::composer('layouts.header', function ($view){
           $view->with('categories', \App\Models\Category::where('parent_id', 0)
           ->where('published', 1)->get());
        });


        View::composer('layouts.footer', function ($view){
            $view->with('categories', \App\Models\Category::where('published', 1)->get());
        });

        View::composer('layouts.footer', function ($view){
            $view->with('footers', \App\Models\Footer::orderBy('created_at', 'desc')->get());
        });
    }

}
