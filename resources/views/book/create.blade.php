@extends('layouts.app')
@section('content')
    <div class="bg-gray-300 p-3 mt-0">
        <form method="post" action="{{route('book.upload')}}" enctype="multipart/form-data">
         @csrf
         <label for="name">book name</label>
         <input type="text" name="name"><br>
         <label for="name">author</label>
         <input type="text" name="author"><br>
         <input type="file" name="avatar" accept="image/*"><br>
         <input type="submit" value="add new book" class="m-3 p-2 bg-blue-900 text-xl rounded text-white">
        </form>
    </div>
@endsection