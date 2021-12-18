@extends('layouts.app')
@section('content')
 <div class="bg-liberary bg-fixed w-full h-full bg-cover">
  <div class="absolute top-1/3 right-1/4 p-5 bg-red-800 opacity-75 w-1/3 rounded-3xl">
    <form id="search-form" action="{{route('search')}}" class="hidden">
      @csrf
      <input type="text" id="query">
    </form>
    <search-component/>
  </div> 
  <div>
    @foreach ($categories as $category)
     <div>
     <h1>{{$category->name}}</h1>
     <div>
     @foreach ($category->books as $book)
      <div>
       <img src="/storage/books/{{$book->photo}}" class="w-48">
       <p>{{$book->title}}</p>
       <p>{{$book->author->name}}</p>  
      </div>         
     @endforeach  
     </div>  
     </div>   
    @endforeach
  </div>  
 </div>   
@endsection