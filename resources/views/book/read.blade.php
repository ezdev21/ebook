@extends('layouts.app')
@section('content')
    <div class="flex">
        <div class="flex-auto w-3/4">
            <p><a href="{{route('book.download',$book->id)}}"
                class="text-xl bg-green-700 text-white text-bold rounded m-1 p-1 hover:no-underline">
                Download</a></p>
            <iframe type="application/pdf" src="/storage/books/{{$book->id}}.pdf" 
                width="500" class=""></iframe>
            <p>
             <span class="text-xl">{{$book->star->count()}}</span>
            @auth
              <star-component bookid="{{$book->id}}" userid="{{Auth::user()->id}}"/>
            @endauth
            </p>
            <div>
                <p class="text-xl">comment here</p>
                @auth
                <form method="POST" action="{{route('comment')}}">
                    {{csrf_field()}}
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <input type="hidden" name="book_id" value="{{$book->id}}">
                    <textarea name="body" id="" cols="60" rows="10" class="block border-2 rounded-lg border-gray-300"></textarea>
                    <input type="submit" value="comment" class="bg-green-700 text-xl text-white p-1 rounded">
                </form>
                @else
                <p class="text-xl">sign in to comment
                    <a href="{{route('login')}}" class="text-xl text-white bg-green-600 rounded px-2">sign in</a></p>    
                @endauth
                  <p class="text-2xl text-bold">{{$book->comments->count()}} comments</p>
                  @foreach ($book->comments as $comment)
                      <div class="bg-blue-200 m-1 p-1 w-2/3">
                       <p><span class="text-xl m-1">{{$comment->user->name}}</span>
                          <span class="m-1">{{$comment->updated_at->toDateString()}}</span>
                        </p>
                       <p>{{$comment->body}}</p>
                      </div>
                  @endforeach  
            </div>
        </div>
        <div class="flex-auto w-1/4 flow-row justify-center">
            <p class="text-2xl text-bold text-center">recommended books</p>
            <div class="flex justify-center flow-col">
                @foreach ($recommendedBooks as $books)
                <a href="{{route('book.read',$book->id)}}">
                 <div>
                    <img src="/storage/covers/{{$book->cover}}" alt="" width="200px">
                    <p>{{$book->title}}</p>
                    <p>{{$book->author}}</p>
                 </div>
                </a>
            @endforeach
            </div>
         </div>
    </div>
@endsection