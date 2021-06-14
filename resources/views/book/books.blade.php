@extends('layouts.app')
@section('content')
 <div class="flex m-0">
     @foreach ($books as $book)
        <a href="{{route('book.read',$book->id)}}">
            <div class="flex-initial m-2 w-40">
                <img src="storage/covers/{{$book->cover}}" alt="">
                <p class="text-xl text-center">{{$book->title}}</p>
                <p class="text-xl text-center">{{$book->author}}</p>
            </div>
        </a>
     @endforeach
 </div>   
@endsection