<?php

use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Models\Book;
use App\Models\Category;
use App\Models\Megazine;
use App\Models\Newspaper;
use Illuminate\Http\Request;

Route::get('/',function(){
  $categories=Category::all();
  return view('welcome',compact('categories'));
});

Auth::routes();

Route::get('/home', [BookController::class, 'index'])->name('home');

// Route::get('/login/google',[LoginController::class,'redirectToGoogle'])->name('login.google');
// Route::get('/login/google/callback',LoginController::class,'handleGoogleCallback');
// Route::get('/login/facebook',[LoginController::class,'redirectToFacebook'])->name('login.facebook');
// Route::get('/login/facebook/callback',LoginController::class,'handleFacebookCallback');

Route::post('search',function(Request $request){
  $books=Book::where("title","LIKE","%{$request->query}%");
  $megazines=Megazine::where("title","LIKE","%{$request->query}%");
  $newspapers=Newspaper::where("title","LIKE","%{$request->query}%");
  return view('search',compact('books','megazines','newspapers'));
});

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

Route::prefix('event')->group(function(){
  Route::get('all',[EventController::class,'index']);
  Route::get('create',[EventController::class,'create']);
  Route::post('store',[EventController::class,'store']);
  Route::get('edit/{id}',[EventController::class,'edit']);
  Route::patch('update',[EventController::class,'update']);
  Route::delete('delete',[EventController::class,'destroy']);
});

Route::prefix('megazine')->group(function(){
  Route::get('all',[MegazineController::class,'index']);
  Route::get('create',[MegazineController::class,'create']);
  Route::post('store',[MegazineController::class,'store']);
  Route::get('edit/{id}',[MegazineController::class,'edit']);
  Route::patch('update',[MegazineController::class,'update']);
  Route::delete('delete',[MegazineController::class,'destroy']);
});

Route::prefix('newspaper')->group(function(){
  Route::get('all',[NewspaperController::class,'index']);
  Route::get('create',[NewspaperController::class,'create']);
  Route::post('store',[NewspaperController::class,'store']);
  Route::get('edit/{id}',[NewspaperController::class,'edit']);
  Route::patch('update',[NewspaperController::class,'update']);
  Route::delete('delete',[NewspaperController::class,'destroy']);
});

Route::prefix('press')->group(function(){
  Route::get('all',[PressController::class,'index']);
  Route::get('create',[PressController::class,'create']);
  Route::post('store',[PressController::class,'store']);
  Route::get('edit/{id}',[PressController::class,'edit']);
  Route::patch('update',[PressController::class,'update']);
  Route::delete('delete',[PressController::class,'destroy']);
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
