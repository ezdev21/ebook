<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/book')->group(function (){
 Route::get('{id}/read',[BookController::class,'index']);
 Route::get('{id}/show',[BookController::class,'show']);
 Route::get('upload',[BookController::class,'create']);
 Route::post('upload',[BookController::class,'store']);
 Route::post('{id}/delete',[BookController::class,'delete']);
});