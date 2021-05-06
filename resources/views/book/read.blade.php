@extends('layouts.app')
@section('content')
    <div class="flex">
        <div class="flex-auto w-3/4">
            <p><a href="{{route('book.download',$book->id)}}"
                class="text-xl bg-yellow-700 text-white text-bold rounded m-1 p-1 hover:no-underline">
                Download</a></p>
            <iframe type="application/pdf" src="{{asset('storage/books/1.pdf')}}" 
                width="500" class=""></iframe>
            <p><star-component bookid="{{$book->id}}" userid="{{Auth::user()->id}}"/>
                <span>{{$book->star->count()}}</span>
            </p>
            <form method="POST" action="{{route('comment')}}">
              {{csrf_field()}}
              <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
              <input type="hidden" name="book_id" value="{{$book->id}}">
              <textarea name="body" id="" cols="60" rows="10"></textarea>
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
        <div class="flex-auto w-1/4 flow-row justify-center">
            <p class="text-2xl text-bold text-center">recommended books</p>
            <div class="flex justify-center flow-col">
                @foreach ($recommendedBooks as $books)
                <a href="{{route('book.read',$book->id)}}">
                 <div>
                    <img src="storage/covers/{{$book->cover}}" alt="">
                    <p>{{$book->title}}</p>
                    <p>{{$book->author}}</p>
                 </div>
                </a>
            @endforeach
            </div>
         </div>
    </div>
@endsection