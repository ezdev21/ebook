@extends('layouts.app')
@section('content')
 <div>
   @forelse ($blogs as $blog)
    <div>
     <h1>{{$blog->title}}</h1>
     <p>{{$blog->description}}</p>
     <comment-component /> 
    </div>   
   @empty
    <p>no blogs found in this website</p>   
   @endforelse
 </div>  
@endsection