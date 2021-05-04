@extends('layouts.app')
@section('content')
 <div>
     @forelse ($books as $book)
         <div>
             <img src="storage/covers/{{$book->cover}}" alt="">
             <p class="text-xl text-center">{{$book->name}}</p>
             <p class="text-xl text-center">{{$book->author}}</p>
         </div>
     @empty
         <p class="text-3xl text-center text-red-700 text-bold">no books found</p>
     @endforelse 
 </div>   
@endsection