<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        View::composer('common.header', function($view) {
            $view
                ->with('title', 'Buchet Homepage')
                ->with('description', '부쳇의 홈페이지이입니다.');
            ;
        });
    }
}
