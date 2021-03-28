<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\View\Composers\ProfileComposer;

class MainController extends Controller
{
    //

    public function headerMethod()
    {
        return view('common/header',['datas'=>array('header1','header2')]);
    }

    public function footerMethod()
    {
        return view('common/footer',['datas'=>array('footer1','footer2')]);
    }

    public function mainMethod()
    {
        return view('main/main',['datas'=>array('data','print')]);
    }
}
