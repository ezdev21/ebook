@extends('layouts.app')
@section('content')
 <div>
  <div class="flex">
   <img src="" alt="">
   <div>
    <p>name {{$author->name}}</p>
    <p>total books {{$author->books->count()}}</p>    
   </div>   
  </div>
  <div class="flex">
   @foreach ($author->books as $book)
   <a href="{{route('book.read',$book->id)}}">
    <div class="flex-initial m-2 w-40">
        <img src="storage/covers/{{$book->cover}}" alt="">
        <p class="text-xl text-center">{{$book->title}}</p>
        <p class="text-xl text-center">{{$book->author}}</p>
    </div>
   </a> 
   @endforeach    
  </div>     
 </div>  
@endsection