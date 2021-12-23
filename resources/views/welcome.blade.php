<script src="{{ asset('js/app.js') }}" defer></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div id="app" class="bg-liberary bg-fixed w-full h-full bg-cover">
  <div class="w-full lg:w-5/6 mx-auto p-3">
    <navigation-component/>
  </div>
  <div class="fixed bottom-20 right-10 p-5 bg-first  w-max rounded-3xl">
    <form id="search-form" action="{{route('search')}}" class="hidden">
      @csrf
      <select name="catalog" id="catalog"></select>
      <input type="text" name="searchQuery" id="searchQuery">
    </form>
    <search-component/>
  </div> 
  <div>
    @foreach ($categories as $category)
     <div>
     <h1>{{$category->name}}</h1>
     <div>
     @foreach ($category->books as $book)
      <div>
       <img src="/storage/books/{{$book->photo}}" class="w-48">
       <p>{{$book->title}}</p>
       <p>{{$book->author->name}}</p>  
      </div>         
     @endforeach  
     </div>  
     </div>   
    @endforeach
  </div>  
 </div>   