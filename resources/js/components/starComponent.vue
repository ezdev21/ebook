<template>
  <div> 
   <span class="text-xl">{{totalStars}}</span>
  <button @click="star" class="rounded p-1 text-xl text-white bg-green-900">star</button>  
  </div>   
</template>
<script>
export default {
  props:['userId','bookId'],
  data(){
   return{
    stars:0
   }  
  },
  mounted(){
   axios.get('/book/star',{params:{bookId:this.bookId,userId:this.userId}})
   .then(res=>{
     this.starred=res.data.starred;
     this.totalStars=res.data.totalStars;
   })
   .catch(err=>{

   });   
  },
  methods:{
     star(){
       axios.post('/book/star',{bookId:this.bookId,userId:this.userId})
       .then(res=>{
        this.starred=true;
        this.totalStars+=1;
       })
       .catch(res=>{

       });  
     } 
  }     
}
</script>