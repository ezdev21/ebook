<template>
 <div class="flex justify-evenly items-center bg-first rounded-b-2 rounded-xl">
  <div class="">
    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-book-half w-32 text-white" viewBox="0 0 16 16">
      <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
    </svg>
  </div>
  <div class="py-1 pr-5 mx-2 mx-5">
    <div class="flex justify-between items-center py-1 border-b-2 border-second">
    <div class="rounded-4xl mr-5">
      <ul class="flex text-xl font-semibold">
        <li class="mx-4"><a href="/">Home</a></li>
        <li class="mx-4"><a href="/about">About</a></li>
        <li class="mx-4"><a href="/events">Events</a></li>
        <li class="mx-4"><a href="/news">News</a></li>
        <li class="mx-4"><a href="/discussion">Discussion</a></li>
      </ul>
    </div>
    <div class="hidden">
      <button @click="userDropdownMenu=true">
      <svg xmlns="http://www.w3.org/2000/svg" class="text-white h-10 w-14" fill="none" viewBox="0 0 24 24" stroke="currentColor">
       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>
    </div>
    <div class="my-auto ml-5"> 
     <div v-if="user" class="my-auto inline">
       <button @click="userDropdownMenu=true" class="my-auto flex">
        <span class="text-xl capitalize">{{user.name}}</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
       </button>   
     </div>
     <div v-else class="flex text-2xl w-full items-center">
     <a href="/login" class="mx-2 rounded px-2 py-1 my-auto">LogIn</a>
     <button class="bg-second flex items-center mx-2 rounded-3xl px-5 py-1.5 text-white">
       <a href="/register">Register</a>  
     </button>
     </div> 
     <div v-if="userDropdownMenu" class="fixed z-20 text-xl bg-gray-100 top-2 right-2">
      <ul>
       <li class="hover:bg-blue-200 px-5 py-1"><a href="/" class="text-white">home</a></li>
       <li class="hover:bg-blue-200 px-5 py-1"><a href="/profile/edit">my profile</a></li>
       <li class="hover:bg-blue-200 px-5 py-1"><a href="/user/products">my products</a></li>
       <li class="hover:bg-blue-200 px-5 py-1"><a href="/product/create">add product</a></li>
       <li class="hover:bg-blue-200 px-5 py-1"><a href="/book/rent">rent</a></li>
       <li class="hover:bg-blue-200 px-5 py-1"><a href="/about">contact us</a></li>
       <li class="hover:bg-blue-200 px-5 py-1">
        <button @click="logout">logout</button>  
       </li>  
      </ul>
     </div>
     <div v-if="userDropdownMenu" @click="userDropdownMenu=false" class="absolute z-10 -inset-y-0 -inset-x-0 bg-black opacity-50"></div>
    </div> 
   </div>
   <div class="py-1 flex justify-between items-center">
    <div class="font-semibold text-xl">
      <ul class="flex items-center">
       <li class="mx-4"><a class="mx-auto no-underline" href="/">Entertainment</a></li>
       <li class="mx-4"><a class="mx-auto no-underline" href="/">Research</a></li>
       <li class="mx-4"><a class="mx-auto no-underline" href="/">Kids</a></li>
       <li class="mx-4 "><a class="mx-auto no-underline" href="/">Teens</a></li>
       <li class="mx-4 "><a class="mx-auto no-underline" href="/">Adults</a></li>
      </ul>
    </div>
   </div>
  </div>
 </div>
</template>
<script>
export default {
   props:{
     user:{
       type:Object,
       required:false
     }
   },
   data(){
    return{
      categoryId:'all',
      searchQuery:'',
      categories:[],
      totalBooks:0,
      userDropdownMenu:false,
    }
   },
   mounted(){
    axios.get('/category/all')
    .then(res=>{
      this.categories=res.data.categories;
    })
   },
   methods:{
    search(){
      if(this.searchQuery){
      document.getElementById('searchQuery').value=this.searchQuery;
      document.getElementById('category').value=this.categoryId;
      document.getElementById('search-form').submit();
      }
    },
    logout(){
      document.getElementById('logout-form').submit(); 
    }
   }
}
</script>