<template>
 <div class="rounded-lt-4xl rounded-rb-4xl p-3">
   <h1 class="text-2xl text-center mb-2">Search</h1>
   <form @submit.prevent="search" method="POST" class="flex items-center">
     <p class="mx-2 text-2xl">search the</p>
     <select v-model="searchType" class="text-gray-700 px-2 text-xl border-r-2 border-first">
       <option value="catalog" selected>Catalog</option>
       <option value="book">Books</option>
       <option value="megazine">Megazines</option>
       <option value="newspaper">Newspapers</option>
       <option value="event">Events</option>
     </select>
     <p class="mx-2 text-2xl">by</p>
     <select v-model="searchBy" class="text-gray-700 px-2 text-xl border-r-2 border-first">
       <option value="keyword" selected>keyword</option>
       <option value="author">Author</option>
       <option value="title">Title</option>
       <option value="subject">Subject</option>
       <option value="tag">Tag</option>
       <option value="list">List</option>
       <option value="user">User</option>
     </select>
     <input type="text" v-model="query" required class="text-second w-96 py-2.5 px-3 text-lg lg:text-xl outline-none focus:border-b-2 border-second" placeholder="search...">
     <button type="submit" class="bg-second capitalize rounded-r-3xl lg:rounded-r-3xl xl:rounded-r-3xl 2xl:rounded-r-3xl text-xl lg:text-3xl xl:text-2xl 2xl:text-2xl py-2.5 px-5 my-auto">
      <svg xmlns="http://www.w3.org/2000/svg" class="text-white h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
      </svg>
     </button>   
   </form>
 </div>
</template>
<script>
export default {
 data(){
  return{
   catalogs:[], 
   query:'',
   searchType:'catalog',
   searchBy:'keyword'
  }
 },
 mounted(){
  
 },
 methods:{
  search(){
    document.getElementById('searchType').value=this.searchType;
    document.getElementById('searchBy').value=this.searchBy;
    document.getElementById('searchQuery').value=this.query;
    document.getElementById('search-form').submit();
  }
 }
}
</script>