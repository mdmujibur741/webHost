<template>
 
    <section class="bg-indigo-300 p-6 mx-auto">
     <h3 class="m-2 py-4 text-4xl font-extrabold text-center capitalize "> {{ props.category.name  }} Prices </h3>

    <p class="text-center pb-4 mb-6 text-gray-900">  <div class="m-1" v-html="props.category.description"></div>  </p>
         <div class="bg-blue-100 w-full lg:w-6/12 mx-auto grid grid-cols-4 gap-4 p-3 rounded-2xl">
                <Button v-for="(duration, index) in duration_package" :key="index" @click="ActiveTab(index+1)" 
                class="bg-white px-3 py-1 rounded-2xl font-semibold border border-white uppercase">
                        {{ duration.slug }}
                </Button>
         </div>
      


         <!-- 1st slider -->
 <div class="my-5">
  <div class="" v-for="(pac, index) in props.duration_package" :key="pac.index">
   
     
    
    <Carousel  :breakpoints="data.breakpoints">
      <Slide v-for="slid in pac.package.data" :key="slid" v-if="tab===index+1">
        <div class="carousel__item border border-green-400 bg-blue-100 shadow-xl rounded-lg mx-4">
           
          <div class="single-price ease-out duration-300 p-4">
                 <div class="text-start m-3">
                  <h2 class="text-lg font-bold uppercase m-1 text-start"> {{ slid.category }} </h2>
                  <h2 class="text-lg font-bold uppercase m-1 text-start">  {{ slid.duration }} </h2>
                  <p class="text-md text-justify m-1">
                      {{ props.category.description }}
                  </p>
                   <p class="text-start p-2 text-2xl lg:text-4xl font-black mt-6 m-1">&#36; {{ slid.price }} </p>
                  <span class="bg-blue-600 text-start px-5 py-2 text-white rounded-lg font-semibold m-2"> {{ slid.duration }} </span>
                 </div>
              <div class="px-5 py-2">
                <ul class="deal-item text-md mt-4 text-slate-800 leading-8 text-start">
                      <li>    <p class="my-1"><i class="fa-solid fa-check text-[#17494D]"></i>  {{ slid.opportunityOne }} </p> </li>
                      <li>   <p class="my-1"><i class="fa-solid fa-check text-[#17494D]"></i>  {{ slid.opportunityTwo }} </p> </li>
                      <li>  <p class="my-1"><i class="fa-solid fa-check text-[#17494D]"></i>  {{ slid.opportunityThree }} </p> </li>
                      <li>  <p class="my-1"><i class="fa-solid fa-check text-[#17494D]"></i>   {{ slid.opportunityFour }} </p> </li>
                      <li>  <p class="my-1"><i class="fa-solid fa-check text-[#17494D]"></i>  {{ slid.opportunityFive }} </p> </li>
                      <li>  <p class="my-1"><i class="fa-solid fa-check text-[#17494D]"></i>  {{ slid.opportunitySix }} </p> </li>
                      <li>  <p class="my-1"><i class="fa-solid fa-check text-[#17494D]"></i>  {{ slid.opportunitySeven }}</p> </li>
                      <li>  <p class="my-1"><i class="fa-solid fa-check text-[#17494D]"></i>  {{ slid.opportunityEight }} </p> </li>
                      
                </ul>
                <div class="mt-14 text-start">
                   <p class="my-3 py-3">Free Domain On Yearly Plan  </p>
                  <a href="#" class="bg-green-500 py-3 mt-7 my-4 text-white px-14 rounded-md font-bold">Sign Up</a>       
                </div>
              </div>
            </div>
         
  
        </div>
       
      </Slide>
       <template #addons="{ slidesCount }">
    <Navigation v-if="slidesCount > 1" />
  </template>
    
    </Carousel>
    
  </div>

 </div>


      
          
           

        <h3 class="text-center m-2 p-3 ">  .com Domain name free <a href="" class="text-lg font-bold">  WELCOME</a></h3>
    </section>

</template>





<script setup>

import { ref } from 'vue';
import { Carousel, Navigation, Slide } from 'vue3-carousel'

import 'vue3-carousel/dist/carousel.css';


const props = defineProps({
     category: Array,
     duration_package :Object
})


    const data = ref({
    breakpoints: {
      // 700px and up
      700: {
        itemsToShow: 2,
        snapAlign: 'center',
      },
      // 1024 and up
      1024: {
        itemsToShow: 3,
        snapAlign: 'start',
      },
    }
  })
 

const tab = ref(1);


function ActiveTab($data){
  this.tab = $data;
}


</script>