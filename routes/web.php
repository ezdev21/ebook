<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [BookController::class, 'index'])->name('home');
Route::prefix('/book')->group(function (){
 Route::get('read/{id}',[BookController::class,'read'])->name('book.reade');
 Route::get('show/{id}',[BookController::class,'show'])->name('book.show');
 Route::get('upload',[BookController::class,'create'])->name('book.create');
 Route::post('upload',[BookController::class,'store'])->name('book.upload');
 Route::post('download/{id}',[BookController::class,'download'])->name('book.download');
 Route::post('delete/{id}',[BookController::class,'delete'])->name('book.delete');
});