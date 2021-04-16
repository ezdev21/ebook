@extends('layouts.app')
@section('content')
    <div>
        <form method="post" action="{{route('book.upload')}}" enctype="multipart/form-data">
         @csrf
         <label for="name">book name</label>
         <input type="text" name="name">
         <label for="name">author</label>
         <input type="text" name="author">
         <input type="file" name="avatar" accept="image/*">
         <input type="submit" value="add new book">
        </form>
    </div>
@endsection