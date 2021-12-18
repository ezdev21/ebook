@extends('layouts.app')
@section('content')
  <div class="flex flex-initial">
    <div>
     <h1>Books</h1>
     @forelse ($books as $book)
     <div>
      <img src="/storage/books/{{$book->photo}}" class="w-48">
      <p classs="text-xl">{{$book->title}}</p>
      <p>{{$book->author->name}}</p>
     </div>       
     @empty
      <p class="text-2xl text-red-500">sorry! no book found</p>   
     @endforelse
    </div>
    <div>
     <h1>Newspapers</h1>
     @forelse ($newspapers as $newspaper)
    <div>
     <img src="/storage/newspapers/{{$newspaper->photo}}" class="w-48">
     <p classs="text-xl">{{$newspaper->title}}</p>
     <p>{{$newspaper->author->name}}</p>
    </div>       
   @empty
    <p class="text-2xl text-red-500">sorry! no newspaper found</p>   
   @endforelse
    </div>
    <div>
      <h1>Megazines</h1>
      @forelse ($megazines as $megazine)
    <div>
     <img src="/storage/megazines/{{$megazine->photo}}" class="w-48">
     <p classs="text-xl">{{$megazine->title}}</p>
     <p>{{$megazine->author->name}}</p>
    </div>       
   @empty
    <p class="text-2xl text-red-500">sorry! no megazine found</p>   
   @endforelse
    </div> 
  </div>  
@endsection