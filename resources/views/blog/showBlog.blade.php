@extends('layouts.app')
@section('content')
 <div>
   <h1>{{$blog->title}}</h1>
   <p>{{$blog->description}}</p>
 </div>  
@endsection