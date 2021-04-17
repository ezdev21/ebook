@extends('layouts.app')
@section('content')
    <div>
        <p><a href="{{route('book.download',$book->id)}}">Download</a></p>
        <input type="application/pdf" src="{{$book->id}}">
    <div>
       <h2>recommended books</h2>
       @forelse ($recommendedbooks as $books)
           <ul>
               <li><a href="{{route('book.read',$book->id)}}">{{$book->title}}</a></li>
           </ul>
       @empty
           <p>no recommended books yet</p>
       @endforelse
    </div>
        <commentComponent/>
    </div>
    <div>
        add
    </div>
@endsection