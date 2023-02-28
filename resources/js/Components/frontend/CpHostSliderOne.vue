<template>


   <div class="lg:w-11/12 mx-auto w-full py-14">
    <Carousel :settings="settings" :breakpoints="breakpoints">
      <Slide v-for="slide in 10" :key="slide">
        <div class="carousel__item border border-slate-400 bg-indigo-100 shadow-xl rounded mx-4">
        
          
          <div class="single-price ease-out duration-300 p-4">
                 <div class="text-start m-3">
                  <h2 class="text-lg font-bold uppercase m-1 text-start">Standard Hosting</h2>
                  <p class="text-md text-justify m-1">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo rem ab ex quasi debitis ducimus!
                  </p>
                   <p class="text-start p-2 text-2xl lg:text-4xl font-black mt-6 m-1">&#36; 4.68</p>
                  <span class="bg-yellow-100 text-start px-5 py-2 text-black rounded-lg font-semibold m-2">Daily</span>
                 </div>
              <div class="px-5 py-2">
                <ul class="deal-item text-md mt-4 text-slate-800 leading-8 text-start">
                      <li>    <p class="my-1"><i class="fa-solid fa-check text-[#17494D]"></i> Intel Xeon E5-1650v2</p> </li>
                      <li>   <p class="my-1"><i class="fa-solid fa-check text-[#17494D]"></i> Lorem ipsum dolor quasi! </p> </li>
                      <li>  <p class="my-1"><i class="fa-solid fa-check text-[#17494D]"></i> Lorem ipsum dolor sit amet. </p> </li>
                      <li>  <p class="my-1"><i class="fa-solid fa-check text-[#17494D]"></i>  Lorem ipsum dolor sit amet. </p> </li>
                      <li>  <p class="my-1"><i class="fa-solid fa-check text-[#17494D]"></i> Lorem ipsum dolor sit amet, icing. </p> </li>
                      <li>  <p class="my-1"><i class="fa-solid fa-check text-[#17494D]"></i> Lorem ipsum dolor sit. </p> </li>
                      <li>  <p class="my-1"><i class="fa-solid fa-check text-[#17494D]"></i> Intel Xeon E5-1650v2</p> </li>
                      <li>  <p class="my-1"><i class="fa-solid fa-check text-[#17494D]"></i> 10 gb storage</p> </li>
                      
                </ul>
                <div class="mt-14 text-start">
                   <p class="my-3 py-3">Free Domain On Yearly Plan</p>
                  <a href="#" class="bg-gray-800 py-3 mt-7 text-white px-14">Sign Up</a>       
                </div>
              </div>
            </div>
         
  
        </div>
      </Slide>
  
      <template #addons>
        <Navigation />
      </template>
    </Carousel>
   </div>


</template>

<script>
import { defineComponent,ref } from 'vue'
import { Carousel, Navigation, Slide } from 'vue3-carousel'

import 'vue3-carousel/dist/carousel.css'
 const tab = ref('1');
export default defineComponent({
  name: 'Breakpoints',
  components: {
    Carousel,
    Slide,
    Navigation,
  },
 
  data: () => ({
    // carousel settings
    settings: {
      itemsToShow: 3,
      snapAlign: 'center',
    },
   
    // breakpoints are mobile first
    // any settings not specified will fallback to the carousel settings
    breakpoints: {

      // 250px and up
       250:{
        itemsToShow: 1,
        snapAlign: 'center',
       },

      // 700px and up
      700: {
        itemsToShow: 2,
        snapAlign: 'start',
      },
      // 1024 and up
      1024: {
        itemsToShow: 3,
        snapAlign: 'start',
      },
    },
  }),
})
</script>
