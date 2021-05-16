<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CommentController;

Route::get('/',[BookController::class,'index'])->name('books');

Auth::routes();

Route::get('/home', [BookController::class, 'index'])->name('home');

Route::prefix('book')->group(function (){
 Route::get('read/{id}',[BookController::class,'read'])->name('book.read');
 Route::get('show/{id}',[BookController::class,'show'])->name('book.show');
 Route::get('upload',[BookController::class,'create'])->name('book.create');
 Route::post('upload',[BookController::class,'store'])->name('book.upload');
 Route::get('download/{id}',[BookController::class,'download'])->name('book.download');
 Route::post('delete/{id}',[BookController::class,'delete'])->name('book.delete');
 Route::post('search',[BookController::class,'search'])->name('book.search');
 Route::get('/star',[BookController::class,'getStar']);
 Route::post('star',[BookController::class,'postStar']);
});
Route::post('comment',[CommentController::class,'store'])->name('comment');
