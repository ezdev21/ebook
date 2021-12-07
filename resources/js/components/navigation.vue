<template>
 <div class="flex justify-evenly items-center bg-first">
  <div class="">
    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-book-half w-32 text-white" viewBox="0 0 16 16">
      <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
    </svg>
  </div>
  <div class="py-1 pr-5 mx-2 mx-5">
    <div class="flex justify-between items-center py-1 border-b-2 border-second">
    <div class="rounded-4xl mr-5">
      <form @submit.prevent="search" class="flex">
        <select class="text-gray-700 px-2 text-xl border-r-2 border-first">
          <option value="">Category</option>
          <option v-for="category in categories" :key="category.id" value="">{{category.name}}</option>
        </select>
       <input type="text" v-model="searchQuery" required class="text-first w-96 py-2.5 px-3 text-lg lg:text-xl xl:text-xl 2xl:text-xl outline-none focus:border-b-2 border-tiruhakim" :placeholder="`search ${totalBooks} books`">
       <button type="submit" class="bg-second capitalize rounded-r-3xl lg:rounded-r-3xl xl:rounded-r-3xl 2xl:rounded-r-3xl text-xl lg:text-3xl xl:text-2xl 2xl:text-2xl py-2.5 px-5 my-auto">
         <svg xmlns="http://www.w3.org/2000/svg" class="text-white h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
       </button>   
      </form>
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
     <div v-else class="flex text-white text-2xl w-full items-center">
     <a href="/login" class="mx-2 rounded px-2 py-1 my-auto">LogIn</a>
     <button class="text-white bg-second flex items-center mx-2 rounded-3xl px-5 py-1.5">
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
    <div class="flex rounded-sm">
      <svg xmlns="http://www.w3.org/2000/svg" class="text-white w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
      <select class="text-xl bg-first text-white">
        <option value="" class="my-auto">read by Category</option>
        <option v-for="category in categories" :key="category.id" :value="category.id">{{category.name}}</option>
      </select>
    </div>
    <div class="text-white text-lg">
      <ul class="flex items-center">
       <li class="mx-4"><a class="mx-auto no-underline" href="/">Home</a></li>
       <li class="mx-4"><a class="mx-auto no-underline" href="/">Kids</a></li>
       <li class="mx-4"><a class="mx-auto no-underline" href="/">Event</a></li>
       <li class="mx-4 "><a class="mx-auto no-underline" href="/">New</a></li>
      </ul>
    </div>
    <div class="text-white text-lg">
     <ul class="flex items-center">
       <li class="mx-3">
         <button>
           Become a Seller
         </button>
       </li>
       <li>
        <button class="flex">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
          </svg>
          <span>Contact Us</span>
        </button>
      </li>
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
      user:{},
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