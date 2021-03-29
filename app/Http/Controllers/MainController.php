<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\View\Composers\ProfileComposer;

class MainController extends Controller
{
    public function mainMethod()
    {
        return view('main/main',['datas'=>array('data','print')]);
    }
}
