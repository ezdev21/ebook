<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\ValidateBookFormRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books=Book::latest()->take(40)->inRandomOrder()->get();
        //$categories=Category::latest()->inRandomOrder()->take(5)->get();
        return view('book.books',['books'=>$books]);
    }
    public function read($id)
    {
        $book=Book::findOrFail($id);
        $recommendedBooks=Book::latest()->take(20)->get();
        return view('book.read',['book'=>$book,'recommendedBooks'=>$recommendedBooks]);
    }
    public function download($id){
        $book=Book::findOrFail($id);
        return Storage::download("/storage/books/1".$book->id.".pdf");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('book.create',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidateBookFormRequest $request)
    {
        $book=new Book;
        $book->title=$request->title;
        $book->author=$request->author;
        $book->category_id=$request->category;
        $book->uploaded_by=$request->uploaded_by;
        $book->save();
        $extension=$request->cover->extension();
        $book->cover=$book->id.'.'.$extension;
        $book->save();
        $request->cover->storeAs('covers',$book->cover,'public');
        $request->file->storeAs('books',$book->id.'.pdf','public');
        return redirect()->route('books');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book=Book::findOrFail($id);
        return view('book.show',['book'=>$book]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book=Book::findOrFail($id);
        $book->delete();
        Storage::delete('/storage/books/'.$book->id);
    }
    public function search(Request $request)
    {
        $category=$request->category;
        $searchBy=$request->searchBy;
        $searchQuery=$request->searchQuery;
        if($category=='all'){
            $books=Book::where([$searchBy,$searchQuery]);
        }
        else{
           $books=Book::where([['category',$category],[[$searchBy,$searchQuery]]]); 
        }
        return view('book.search',['books'=>$books,'searchQuery'=>$searchQuery]);
    }
    public function getStar(Request $request)
    {
      if(DB::table('book_user')->where([['book_id',$request->bookId],['user_id',$request->userId]])->exists())
      {
        $starred=true;  
      }
      else{
        $starred=false;  
      }
      $totalStars=DB::table('book_user')->where(['book_id',$request->bookId])->count();
      return response()->json(['starred'=>$starred,'totalStars'=>$totalStars]);
    }
    public function postStar(Request $request)
    {
       if(DB::table('book_user')->where([['book_id',$request->bookId],['user_id',$request->userId]])->exists())
       {
          
       }
       else{
         DB::table('book_user')->insert(['user_id'=>$request->userId,'book_id'=>$request->bookId]);  
       }
    }
}
