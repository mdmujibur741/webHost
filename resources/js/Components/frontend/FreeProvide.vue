<script setup>
        const props = defineProps({
                 features : Object
        })
</script>


<template>
<section class="min-h-[60vh] bg-[#09176A] p-8 flex justify-center items-center">
        <div class="m-2">
                <div class="w-11/12 lg:w-10/12 mx-auto grid grid-cols-1 lg:grid-cols-3  gap-6 text-white">
                      
                 
                 <!-- Card  -->
                 <div v-for="feature in props.features.data.slice(0,3)" :key="feature" class="mx-auto text-center hover:bg-gray-200 hover:text-green-500 hover:drop-shadow-md px-6 py-2"> 
                         <img :src="feature.image" alt="Feature image" class="w-24 h-20 rounded-full p-1 bg-green-500 mx-auto">
                    
                        <h2 class=" p-1 font-extrabold text-[18px]">
                           {{ feature.title }}
                        </h2>
                        <p class="p-1 ">
                          <span v-html="feature.description"></span>
                        </p>
                 </div>
         
             
         
         
                
                </div>
         </div>
</section>

</template>

