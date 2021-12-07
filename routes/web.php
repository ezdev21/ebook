<?php

use App\Http\Controllers\AuthorController;
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

Route::prefix('author')->group(function(){
  Route::get('all',[AuthorController::class,'index']);
  Route::get('create',[AuthorController::class,'create']);
  Route::post('store',[AuthorController::class,'store']);
  Route::get('edit/{id}',[AuthorController::class,'edit']);
  Route::patch('update',[AuthorController::class,'update']);
  Route::delete('delete',[AuthorController::class,'destroy']);
});

Route::prefix('category')->group(function(){
 Route::get('all',[CategoryController::class,'index']);
 Route::get('create',[CategoryController::class,'create']);
 Route::post('store',[CategoryController::class,'store']);
 Route::get('edit/{id}',[CategoryController::class,'edit']);
 Route::patch('update',[CategoryController::class,'update']);
 Route::delete('delete',[CategoryController::class,'destroy']);
});

Route::prefix('comment')->group(function(){
 Route::get('all',[CommentController::class,'index']);
 Route::get('create',[CommentController::class,'create']);
 Route::post('store',[CommentController::class,'store']);
 Route::get('edit/{id}',[CommentController::class,'edit']);
 Route::patch('update',[CommentController::class,'update']);
 Route::delete('delete',[CommentController::class,'destroy']);
});
