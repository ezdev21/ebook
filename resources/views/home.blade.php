@extends('layouts.app')

@section('content')
<div>
    <searchComponent/>
    <div>
      @forelse ($categories as $category)
       <h2>{{$category->name}}</h2>
        @foreach ($category->books->take(5) as $book)
            <div>
                <img src="'books'.{{$book->avatar}}" alt="no image" width="50px">
                <p>{{$book->title}}</p>
                <p>{{$book->author}}</p>
            </div>
        @endforeach
      @empty
        <h2>no recommende books yet</h2>
      @endforelse
    </div>
</div>
@endsection
