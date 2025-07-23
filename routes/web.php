<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('Admin')->group(function (){
    Route:: get ('/Dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

  
});  


