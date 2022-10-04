<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;

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

Route::get('/',[ContactController::class,'index']);

Route::get('/create',[ContactController::class,'create'])->middleware('auth');

Route::post('/store',[ContactController::class,'store'])->middleware('auth');

Route::get('/show/{contact}',[ContactController::class,'show'])->middleware('auth');

Route::get('/edit/{contact}',[ContactController::class,'edit'])->middleware('auth');

Route::put('/update/{contact}',[ContactController::class,'update'])->middleware('auth');

Route::delete('/delete/{contact}',[ContactController::class,'delete'])->middleware('auth');

Route::get('/logout',[UserController::class,'logout'])->middleware('auth');

Route::get('/register',[UserController::class,'create'])->middleware('guest');

Route::post('/user/store',[UserController::class,'store']);

Route::get('/login',[UserController::class,'login'])->name('login')->middleware('guest');

Route::post('/authenticate',[UserController::class,'authenticate']);



