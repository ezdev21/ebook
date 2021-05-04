@extends('layouts.app')
@section('content')
 <div class="flex m-0">
     @forelse ($books as $book)
        <a href="{{route('book.read',$book->id)}}">
            <div class="flex-initial m-2">
                <img src="storage/covers/{{$book->cover}}" alt="">
                <p class="text-xl text-center">{{$book->title}}</p>
                <p class="text-xl text-center">{{$book->author}}</p>
            </div>
        </a>
     @empty
         <p class="text-3xl text-center text-red-700 text-bold">no books found</p>
     @endforelse 
 </div>   
@endsection