<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;


//Site
Route::get('/inicio',[SiteController::class, 'index'])->name('site.index');

//Login
Route::get('/login',[LoginController::class,'index'])->name('site.login');
route::post('/login', [LoginController::class,'authenticate'])->name('auth.login');

// AUTH
Route::middleware('auth')->group(function (){
    //Dashboard
    Route::get('/dashboard', [SiteController::class, 'dashboard'])->name('site.dashboard');
    Route::post('/logout',[LoginController::class,'logout'])->name('auth.logout');

});