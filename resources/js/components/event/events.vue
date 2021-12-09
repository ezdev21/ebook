<template>
 <div>
   <div v-for="event in events" :key="event.id" class=""> 
     <div>
      <h1>{{event.title}}</h1>
      <p>{{event.description}}</p>
      <p>date:{{event.created_at}}</p>
     </div>
   </div>
 </div>
</template>
<script>
export default {
 data(){
  return{

  }
 },
 mounted(){
  this.getEvents();
 },
 methods:{
  getEvents(){

  }
 }
}
</script>