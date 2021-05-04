@extends('layouts.app')
@section('content')
    <div class="bg-gray-300 p-3 -mt-6">
        <form method="post" action="{{route('book.upload')}}" enctype="multipart/form-data">
         @csrf
         <input type="hidden" value="{{Auth::user()->id}}">
         <label for="title" class="text-xl">book title</label>
         <input type="text" name="title" class="w-50 h-10 block text-xl m-2" placeholder="book title" required>
          @if ($errors->has('title'))
             <p class="text-red-600 text-xl text-bold">{{$errors->first('name')}}</p>
          @endif
         <label for="author" class="text-xl">author</label>
         <input type="text" name="author" class="w-50 h-10 block text-xl m-2" placeholder="author name" required>
         @if ($errors->has('author'))
             <p class="text-red-600 text-xl text-bold">{{$errors->first('author')}}</p>
          @endif
         <label for="cover" class="text-xl">upload book cover</label>
         <input type="file" name="cover" accept="image/*" class="text-xl block m-2" required>
         @if ($errors->has('cover'))
             <p class="text-red-600 text-xl text-bold">{{$errors->first('cover')}}</p>
          @endif
         <label for="file" class="text-xl">upload pdf file</label>
         <input type="file" name="file" accept="pdf/*" class="text-xl block m-2" required>
         @if ($errors->has('file'))
             <p class="text-red-600 text-xl text-bold">{{$errors->first('file')}}</p>
          @endif
         <input type="submit" value="add new book" class="m-3 p-2 bg-green-900 text-xl rounded text-white">
        </form>
    </div>
@endsection