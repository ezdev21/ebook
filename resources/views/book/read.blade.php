@extends('layouts.app')
@section('content')
    <div class="flex">
        <div class="flex-1">
            <p><a href="{{route('book.download',$book->id)}}"
                class="text-xl bg-yellow-700 text-white text-bold rounded m-1 p-1 hover:no-underline">
                Download</a></p>
            <embed type="application/pdf" src="storage/books/{{$book->id}}.pdf" 
                class="w-75 h-75"/>
            <p><star-component bookid="{{$book->id}}" userid="{{Auth::user()->id}}"/>
                <span>{{$book->star->count()}}</span>
            </p>
            <form method="POST" action="{{route('comment')}}">
              {{csrf_field()}}
              <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
              <input type="hidden" name="book_id" value="{{$book->id}}">
              <textarea name="body" id="" cols="600" rows="10"></textarea>
              <input type="submit" value="comment" class="bg-green-700 text-xl text-white p-1 rounded">
            </form>
            {{--<p class="text-2xl text-center text-bold">{{$book->comments->count()}}</p>
            @foreach ($book->comments as $comment)
                <div>
                 <p><span>{{$comment->commentedby}}</span><span>{{$comment->updated_at}}</span></p>
                 <p>{{$comment->body}}</p>
                </div>
            @endforeach--}}
        </div>
        <div class="flex-1">
            <p class="text-2xl text-bold text-center">recommended books</p>
            @foreach ($recommendedBooks as $books)
                <a href="{{route('book.read',$book->id)}}">
                 <img src="storage/covers/{{$book->cover}}" alt="">
                 <p>{{$book->title}}</p>
                 <p>{{$book->author}}</p>
                </a>
            @endforeach
         </div>
    </div>
@endsection