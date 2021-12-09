@extends('layouts.app')
@section('content')
 <div>
   @forelse ($news as $blog)
    <div>
     <h1>{{$new->title}}</h1>
     <p>{{$new->description}}</p>
     <comment-component /> 
    </div>   
   @empty
    <p>no blogs found in this website</p>   
   @endforelse
 </div>  
@endsection