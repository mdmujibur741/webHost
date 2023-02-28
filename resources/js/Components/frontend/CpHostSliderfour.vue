<template>


   <div class="lg:w-11/12 mx-auto w-full py-14">
    <Carousel :settings="settings" :breakpoints="breakpoints">
      <Slide v-for="slide in 10" :key="slide">
        <div class="carousel__item">
          <div class="border border-slate-400 ">
          
          <div class="single-price bg-white text-center ease-out duration-300">
              <div class="deal-top bg-slate-200  py-8 text-black">
                <h4 class="text-[14px]">Tab Four </h4>
                 <h1 class="text-[35px] font-bold">  tab Four </h1>
                
              </div>
              <div class="deal-bottom py-14">
                <ul class="deal-item text-md mt-12 text-slate-600 leading-8">
                      <li>  10 <strong>Domain</strong> Hosting</li>
                      <li>  <strong>Unlimited</strong> Disk Space</li>
                      <li> <strong>Unlimited</strong> Bandwidth</li>
                      <li> <strong>JETBACKUP</strong> Included</li>
                      <li> <strong>DDoS Protection</strong> Included</li>
                      <li> <strong>Instantly</strong> Activated</li>
                      <li> <strong>SSL</strong> Certificate included</li>
                      <li>Cloudlinux Optimized available <br> <strong>Risk-free</strong> . </li>
                      <h3 class="text-sm text-center">Get 1 months free with annual prepay+.com domain free</h3>
                </ul>
                <div class="mt-14">
                  <a href="#" class="bg-red-600 py-3 mt-7 text-white px-14">Sign Up</a>       
                </div>
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
  // props: {
  //   settings : Array,
  //   breakpoints : Object
  // },
  data: () => ({
    // carousel settings
    settings: {
      itemsToShow: 4,
      snapAlign: 'center',
    },
   
    // breakpoints are mobile first
    // any settings not specified will fallback to the carousel settings
    breakpoints: {

      // 250px and up
      250:{
        itemsToShow: 1,
        snapAlign: 'start',
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
