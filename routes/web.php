<?php

use App\Http\Controllers\GeneralController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutController;
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



Route::get('/',function (){
   return view('welcome');
});

Route::get('test/live',function(){
   return view('test.farah');
});

Route::get('para/{id}',[GeneralController::class,'para']);

//Route::get('para','GeneralController@para');


Route::get('welcome' ,function () {
    return 'farah' ;
});

Route::get('page', function (){

    return view ('grade');
});

Route::get('page2',function (){
    return view ('test.name');
});

Route::get('page3',function () {
    return('hello world');
});

Route::get( 'para2' , [
    MainController::class,
    'para2'
        ]);

Route::get('about/{$id}',[AboutController::class,
    'arra2'
    ]);




