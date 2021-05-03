@extends('layouts.app')
@section('content')
    <div class="bg-gray-300 p-3 -mt-6">
        <form method="post" action="{{route('book.upload')}}" enctype="multipart/form-data">
         @csrf
         <label for="name" class="text-xl">book name</label>
         <input type="text" name="name" class="w-50 h-10 block text-xl m-2" placeholder="book name">
         <label for="name" class="text-xl">author</label>
         <input type="text" name="author" class="w-50 h-10 block text-xl m-2" placeholder="author name">
         <label for="name" class="text-xl">upload book cover</label>
         <input type="file" name="avatar" accept="image/*" class="text-xl block m-2">
         <label for="name" class="text-xl">upload pdf file</label>
         <input type="file" name="avatar" accept="pdf/*" class="text-xl block m-2">
         <input type="submit" value="add new book" class="m-3 p-2 bg-green-900 text-xl rounded text-white">
        </form>
    </div>
@endsection