<?php

namespace App\Http\Controllers;

use App\Models\Search;
use App\Http\Requests\StoreSearchRequest;
use App\Http\Requests\UpdateSearchRequest;
use App\Models\Book;
use App\Models\Megazine;
use App\Models\Newspaper;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchAll(Request $request)
    {
      $searchQuery=$request->searchQuery;  
      $books=Book::where('title','LIKE',"%${searchQuery}%")->get();
      $megazines=Megazine::where('title','LIKE',"%${searchQuery}%")->get();
      $newspapers=Newspaper::where('title','LIKE',"%${searchQuery}%")->get();
      return view('search',compact('books','megazines','newspapers'));
    }
}
