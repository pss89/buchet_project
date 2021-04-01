<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\View\Composers\ProfileComposer;

use App\Models\Common;
class MainController extends Controller
{
    public function mainMethod()
    {
        

        // $flights = Common::where('history_id', 1)
        //        ->orderBy('user_id')
        //     //    ->take(10)
        //        ->get();

        // echo "<pre>";
        // print_r($flights);
        // exit;

        return view('main/main',['datas'=>array('data','print')]);
    }
}
