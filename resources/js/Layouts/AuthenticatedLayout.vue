<template>

     
               <!-- Top nav -->
   <div class="relative">
  
    <!-- <TopBar/> -->
  
    <DashNav/>
      
      
      <div class="p-4 sm:ml-64 ">
         <div class=" rounded-lg dark:border-gray-700 mt-14">
           <slot/>
         </div>
      </div>
      
   </div>

</template>


<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';
import TopBar from '@/Components/TopBar.vue';
import DashNav from '@/Components/DashNavs.vue';
// import { ref } from 'vue';

const dropDown = ref('false');

</script>

