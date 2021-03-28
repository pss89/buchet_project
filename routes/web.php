<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// 메인
// Route::get('/','App\Http\Controllers\MainController@index');
// or 
use App\Http\Controllers\MainController;
// Route::get('/','MainController@index')->name('index');
Route::get('/',[MainController::class, 'mainMethod']);