@extends('layouts.app')
@section('content')
<div>
 <h1>books for kids</h1>
 @forelse ($books as $book)
  <div>
   <a href="/book/show/{{$book->id}}">
    <img src="/storage/books/{{$book->photo}}" class="w-48">
   <h1>{{$book->title}}</h1>
   <p>{{$book->author->name}}</p>
   </a>
  </div>   
 @empty
  <p>no books found for kids</p>   
 @endforelse 
</div>    
@endsection