@extends('layouts.app')
@section('content')
 <div>
  <form action="">
    <h1>create discussion</h1>
    <input type="text" class="">
    <textarea name="" id="" cols="30" rows="10"></textarea>
  </form>
  <h1>upcomping book descussions</h1>
  @forelse ($discussions as $discussion)
   <div>
    <h1>{{$disscussion->title}}</h1>
    <p>{{$discussion->description}}</p>
    <p>{{$discussion->date}}</p> 
   </div>   
  @empty
   <p>no upcoming discussions</p>   
  @endforelse
 </div>   
@endsection