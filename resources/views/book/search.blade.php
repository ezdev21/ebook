@extends('layouts.app')
@section('content')
<div>
 @forelse ($books as $book)
  <div>
    <a href="{{route('book.read',$book->id)}}">
     <img src="/storage/bookCover/{{$book->cover}}" alt="" width="100px">
     <p class="text-xl">{{$book->name}}</p>
     <p class="text-xl">{{$book->author}}</p>
    </a>  
  </div>  
 @empty
  <p class="text-2xl text-red-700 mx-5">no books found like {{$searchQuery}}</p>
 @endforelse   
</div>   
@endsection