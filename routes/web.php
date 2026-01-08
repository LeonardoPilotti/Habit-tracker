<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

//Site
Route::get('/',[SiteController::class, 'index']);

//Login
Route::get('/login',[LoginController::class,'index']);
route::post('/login', [LoginController::class,'authenticate']);