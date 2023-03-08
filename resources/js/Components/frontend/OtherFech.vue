<script setup>
      defineProps({
            allCatFeatures : Object,
            category : Object
      })
</script>

<template>
      <section class="bg-[#C4B5FD] min-h-[85vh] p-5">
                      <h3 class="text-center text-4xl font-bold text-white p-2 m-1 mt-6"> {{ category.name }}  </h3>

                 <p class="text-center text-md  text-white  p-2 m-1" v-html="category.description">  </p>
           <div class="lg:w-10/12 w-full mx-auto m-2 p-1 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 my-14">
                  
                 <div v-for="feature in allCatFeatures.data" class="p-4 hover:bg-slate-100 text-black">
                         <div class="grid grid-cols-1 lg:grid-cols-4 justify-start gap-3">
                               <div>
                                   <img :src="'/storage/'+ feature.image" class="" alt="feature Image">
                               </div>
                               <div class="lg:col-span-3">
                              <h3 class="text-lg font-semibold   py-3 m-1"> {{ feature.title }}  </h3>

                               <p class="text-md font-normal   p-1 m-1" v-html="feature.description">   </p>
                               </div>
                         </div>
                    </div>
                  
                    

                    <!-- <div class="p-4 hover:bg-slate-100 text-black">
                        <div class="grid grid-cols-1 lg:grid-cols-4 justify-start gap-3">
                              <div>
                                  <img src="../../../../public/demo/hx_blueicon1.svg" class="" alt="">
                              </div>
                              <div class="lg:col-span-3">
                             <h3 class="text-lg font-semibold   py-3 m-1">  Free Domain Name</h3>

                              <p class="text-md font-normal   p-1 m-1"> All our plans include at least one free .co.uk domain(for annual payment), so you get everything you need to take your new business website online, already included in the price of your hosting package.</p>
                              </div>
                        </div>
                   </div>

                   <div class="p-4 hover:bg-slate-100 text-black">
                        <div class="grid grid-cols-1 lg:grid-cols-4 justify-start gap-3">
                              <div>
                                  <img src="../../../../public/demo/hx_blueicon1.svg" class="" alt="">
                              </div>
                              <div class="lg:col-span-3">
                             <h3 class="text-lg font-semibold   py-3 m-1">  Free Domain Name</h3>

                              <p class="text-md font-normal   p-1 m-1"> All our plans include at least one free .co.uk domain(for annual payment), so you get everything you need to take your new business website online, already included in the price of your hosting package.</p>
                              </div>
                        </div>
                   </div>
                   <div class="p-4 hover:bg-slate-100 text-black">
                        <div class="grid grid-cols-1 lg:grid-cols-4 justify-start gap-3">
                              <div>
                                  <img src="../../../../public/demo/hx_blueicon1.svg" class="" alt="">
                              </div>
                              <div class="lg:col-span-3">
                             <h3 class="text-lg font-semibold   py-3 m-1">  Free Domain Name</h3>

                              <p class="text-md font-normal   p-1 m-1"> All our plans include at least one free .co.uk domain(for annual payment), so you get everything you need to take your new business website online, already included in the price of your hosting package.</p>
                              </div>
                        </div>
                   </div>
                   <div class="p-4 hover:bg-slate-100 text-black">
                        <div class="grid grid-cols-1 lg:grid-cols-4 justify-start gap-3">
                              <div>
                                  <img src="../../../../public/demo/hx_blueicon1.svg" class="" alt="">
                              </div>
                              <div class="lg:col-span-3">
                             <h3 class="text-lg font-semibold   py-3 m-1">  Free Domain Name</h3>

                              <p class="text-md font-normal   p-1 m-1"> All our plans include at least one free .co.uk domain(for annual payment), so you get everything you need to take your new business website online, already included in the price of your hosting package.</p>
                              </div>
                        </div>
                   </div>
                   <div class="p-4 hover:bg-slate-100 text-black">
                        <div class="grid grid-cols-1 lg:grid-cols-4 justify-start gap-3">
                              <div>
                                  <img src="../../../../public/demo/hx_blueicon1.svg" class="" alt="">
                              </div>
                              <div class="lg:col-span-3">
                             <h3 class="text-lg font-semibold   py-3 m-1">  Free Domain Name</h3>

                              <p class="text-md font-normal   p-1 m-1"> All our plans include at least one free .co.uk domain(for annual payment), so you get everything you need to take your new business website online, already included in the price of your hosting package.</p>
                              </div>
                        </div>
                   </div> -->

                 
           </div>
      </section>
</template>


