@extends('layouts.app')
@section('content')
    <div>
        <p><a href="{{route('book.download',$book->id)}}"
            class="text-xl bg-yellow-600 text-white text-bold">Download</a></p>
        <input type="application/pdf" src="storage/books/{{$book->id}}">
        <p>{{$book->star->count}}</p>
    <div>
       <p class="text-2xl text-bold text-center">recommended books</p>
       @foreach ($recommendedbooks as $books)
           <a href="{{route('book.read',$book->id)}}">
            <img src="storage/covers/{{$book->cover}}" alt="" width="50px">
            <p>{{$book->title}}</p>
            <p>{{$book->author}}</p>
           </a>
       @endforeach
    </div>
        <form action="{{route('book.comment')}}">
          {{csrf_field()}}
          <textarea name="body" id="" cols="600" rows="10"></textarea>
          <input type="submit" value="comment" class="bg-green-700 text-xl text-white p-1 rounded">
        </form>
        <p class="text-2xl text-center text-bold">{{$book->comments->count()}}</p>
        @foreach ($book->comments as $comment)
            <div>
             <p><span>{{$comment->commentedby}}</span><span>{{$comment->updated_at}}</span></p>
             <p>{{$comment->body}}</p>
            </div>
        @endforeach
    </div>
@endsection