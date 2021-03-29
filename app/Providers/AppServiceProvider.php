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
        $first_list = array(
            "first"=>"첫번째 메뉴"
            ,"seconde"=>"두번째 메뉴"
            ,"third"=>"세번째 메뉴"
        );

        $seconde_list = array(
            "third"=>array(
                "one"=>"세번째에 첫번째"
                ,"two"=>"세번째에 두번째"
            )
        );

        View::composer('common.header', function($view) {
            $view
                ->with('title', 'Buchet Homepage')
                ->with('description', '부쳇의 홈페이지이입니다.')
                // ->with('seconde_list',$seconde_list)
            ;
        });
    }
}
