<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\ValidateBookFormRequest;
use Illuminate\Support\Facades\Storage;
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
        Storage::download('storage/books/'.$book->id.'.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.create');
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
        return view('book.show',$book);
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
        Storage::delete('/books/'.$book->id);
    }
}
