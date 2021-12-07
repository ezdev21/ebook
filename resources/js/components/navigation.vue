<template>
 <div class="flex justify-between items-center bg-first w-full shadow-xl py-2">
  <div class="flex items-center"> 
    <div class="rounded-4xl mx-3">
      <form @submit.prevent="search" class="flex">
       <select class="">
         <option value="">categoryy</option>
         <option v-for="category in categories" :key="category.id" value="category.id">{{category}}</option>
       </select>
       <input type="text" v-model="searchQuery" required class="w-96 py-2.5 px-3 text-lg lg:text-xl xl:text-xl 2xl:text-xl outline-none focus:border-b-2 border-tiruhakim rounded-l-3xl" placeholder="search...">
       <button type="submit" class="capitalize bg-second rounded-r-3xl lg:rounded-r-3xl xl:rounded-r-3xl 2xl:rounded-r-3xl text-xl lg:text-3xl xl:text-2xl 2xl:text-2xl py-2.5 px-4 my-auto" >
         <svg xmlns="http://www.w3.org/2000/svg" class="text-white h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
       </button>
      </form>
    </div>
    <div class="block right-0 lg:hidden xl:hidden 2xl:hidden">
      <button @click="userDropdownMenu=true">
       <svg xmlns="http://www.w3.org/2000/svg" class="text-white h-10 w-14" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
       </svg>
      </button>
    </div>
   </div>
   <div class="flex items-center"> 
     <div v-if="user" class="items-center hidden lg:flex">
       <button class="flex items-center mx-2">
        <img src="https://www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png" class="w-12 h-12 rounded-full mr-2">
        <span class="text-xl font-semibold capitalize text-white text-semibold">{{user.name}}</span>
       </button>   
       <button class="mx-3">
         <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-list w-12 text-white" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
         </svg>
       </button>
       <button @click="userDropdownMenu=true">
         <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-caret-down-fill w-12 text-white" viewBox="0 0 16 16">
          <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
        </svg>
       </button>
     </div>
     <div v-else class="my-auto flex text-white text-xl text-xl">
      <a href="/login" class="text-2xl text-white mx-2 my-auto px-4 py-2">sign in</a>
      <a href="/register" class="my-auto text-2xl my-auto text-white bg-second mx-2 my-2 rounded-3xl px-4 py-2">sign up</a>  
     </div>
     <div v-if="userDropdownMenu" class="rounded-lg fixed z-20 text-xl bg-gray-100 top-0 right-0">
      <ul>
       <li class="hover:bg-blue-200 px-5 py-1"><a href="/">Home</a></li>
       <li class="hover:bg-blue-200 px-5 py-1"><a href="/channel/creat">create channel</a></li>
       <li class="hover:bg-blue-200 px-5 py-1"><a href="/book/create">upload</a></li>
       <li class="hover:bg-blue-200 px-5 py-1"><a href="/profile">my profile</a></li>
       <li class="hover:bg-blue-200 px-5 py-1"><a href="/chat">chat</a></li>
       <li class="hover:bg-blue-200 px-5 py-1"><a href="/about">contact us</a></li>
       <li class="hover:bg-blue-200 px-5 py-1">
        <button @click="logout">logout</button>  
       </li>  
      </ul>
     </div>
     <div v-if="userDropdownMenu" @click="userDropdownMenu=false" class="absolute z-10 -inset-y-0 -inset-x-0 bg-black opacity-50"></div>
    </div> 
 </div>
</template>
<script>
import notification from'./notification.vue';
export default {
   props:{
    user:{
     type:Object,
     required:true
    }
   },
   components:{
    notification
   },
   data(){
    return{
      searchQuery:'',
      userDropdownMenu:false,
    }
   },
   mounted(){
    
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