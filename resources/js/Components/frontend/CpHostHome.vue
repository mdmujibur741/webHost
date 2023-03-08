<script setup>
     defineProps({
         category : Object
     })
</script>

<template>
    
       <section class="bg-[#09176A] min-h-[80vh] p-5">
              <div class="grid grid-cols-1 lg:grid-cols-2 min-h-[75vh] lg:w-9/12 w-full mx-auto lg:justify-between justify-center items-center m-2 gap-4 text-white">
                       <div class="">
                        <h2 class="text-[37px] font-extrabold m-2 py-2">  {{ category.name }} </h2>
                        <p class="text-justify m-2 py-2 text-lg font-bold">  
                            <div v-html="category.description" class="p-3 m-1"></div>
                        </p>
                               
                                <a href="" class="bg-red-600 px-6 py-2 lg:px-14 lg:py-4 text-md rounded text-white uppercase my-5">Order Now</a>
                       </div>

                           
                       <div>
                             <img :src="'/storage/'+category.image" class="m-3  p-1 " alt="category Image">
                       </div>
              </div>
       </section>
         

</template>