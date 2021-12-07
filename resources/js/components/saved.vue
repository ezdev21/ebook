<template>
  <div>
   <li v-for="saved in savedBooks" :key="saved.id">{{saved.photo}}</li>
   <li v-for="saved in savedMegazines" :key="saved.id">{{saved.photo}}</li>
   <li v-for="saved in savedNewspapers" :key="saved.id">{{saved.photo}}</li>
  </div>
</template>
<script>
export default {
 data(){
  return{
   savedBooks:[],
   savedMegazines:[],
   savedNewspapers:[]
  }
 },
 mounted(){

 },
 methods:{

 }
}
</script>