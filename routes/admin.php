<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\GeneralController;
use Illuminate\Support\Facades\Route;



Route::get('admin',function(){
   return 'this is route admin';
});


Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        return 'users';
    });

    Route::get('/students', function () {
        return 'students';
    });

    Route::get('/grades', function () {
        return 'grades';
    });

});


