@extends('layouts.app')
@section('content')
  <div class="flex flex-initial">
   @forelse ($books as $book)
    <div>
     <img src="/storage/books/{{$bok->photo}}" class="w-48">
     <p classs="text-xl">{{$book->title}}</p>
     <p>{{$book->author->name}}</p>
    </div>       
   @empty
    <p class="text-2xl text-red-500">sorry! no book found</p>   
   @endforelse 
  </div>  
@endsection