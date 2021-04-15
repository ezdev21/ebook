@extends('layouts.app')
@section('content')
  <div>
      <img src="'books/'.{{$book->avatar}}" alt="book avatar not found" width="100px">
      <p>name {{$book->name}}</p>
      <p>author {{$book->author}}</p>
      <p>uploaded at {{$book->created_at}}</p>
      <form method="post" action="{{route('book.delete',[$book->id]])}}">
      @csrf
      <input type="submit" value="delete">
      </form>
  </div>  
@endsection