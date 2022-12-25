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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('login', function () {
        return view('admin.layouts.auth.login');
    })->name('admin_login');
    Route::get('dashboard',function(){
        return view('admin.layouts.dashboard.dashboard');
    })->name('admin_dashboard');
});
