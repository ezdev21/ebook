@extends('layouts.app')
@section('content')
  <div>
      <img src="/storage/books/{{$book->cover}}" alt="book avatar not found" width="100px">
      <p class="text-xl">name {{$book->name}}</p>
      <p class="text-xl">author {{$book->author}}</p>
      <p class="text-xl">uploaded at {{$book->created_at}}</p>
      <p class="text-xl">uploaded by {{$book->uploaded_by}}</p>
      <form method="post" action="{{route('book.delete',$book->id)}}">
        @delete
        @csrf
        <input type="submit" value="delete" class="text-xl p-1 px-2 text-white bg-red-600 rounded">
      </form>
  </div>  
@endsection