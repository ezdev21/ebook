<template>
 <div class="rounded-lt-4xl rounded-rb-4xl p-5">
   <h1 class="text-2xl text-center mb-2">Search</h1>
   <form @submit.prevent="search" method="POST" class="flex">
     <select class="text-gray-700 px-2 text-xl border-r-2 border-first">
       <option value="">Catalog</option>
       <option v-for="catalog in catalogs" :key="catalog.id" value="">{{catalog.name}}</option>
     </select>
     <input type="text" v-model="query" required class="text-second w-96 py-2.5 px-3 text-lg lg:text-xl outline-none focus:border-b-2 border-second" placeholder="search catalog">
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
   catalog:''
  }
 },
 mounted(){
  this.getCatalogs();
 },
 methods:{
  getCatalogs(){
    axios.get('/catalog/all')
    .then(res=>{
      this.catalogs=res.data.catalogs;
    });
  },
  search(){
    document.getElementById('catalog').value=this.catalog;
    document.getElementById('searchQuery').value=this.query;
    document.getElementById('search-form').submit();
  }
 }
}
</script>