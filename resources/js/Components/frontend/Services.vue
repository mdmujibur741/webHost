<script setup>
        
        import { Link } from '@inertiajs/vue3';

      const props = defineProps({
        categories: Object
      })
      
</script>


<template>
  <section class="bg-indigo-200 min-h-[70vh] py-6">
    <div class="grid md:grid-cols-2 lg:grid-cols-3 w-11/12 lg:w-10/12 gap-6 mx-auto">


      <!-- card  -->
      <div v-for="category in props.categories.slice(5,11)" class="relative pt-8 transform hover:scale-105 transition duration-150 ease-out hover:ease-in">
        <div class="bg-white border border-gray-200 rounded-lg shadow-md">
          <span
            class="absolute w-[80px] h-[80px] bg-[#09176A] rounded-full top-0 right-[42%] flex justify-center items-center"
          >
             <img :src="'/storage/'+ category.image" alt="image" class="w-[70px] h-[70px] rounded-full">
          </span>
          <div class="mt-12 px-5 min-h-[20vh] flex justify-center items-center">
            <div>
              <h3 class="text-lg font-bold text-center"> {{ category.name }} </h3>

              <p class="mb-3 text-gray-700 text-[13px] text-justify">
                {{ category.description.slice(0,100) }}
              </p>
            </div>
          </div>
          <div class="bg-[#09176A] min-h-[15vh] text-white text-center">
                        <h3 class="py-2 m-1 text-lg font-extrabold ">Starting at $19.33</h3>
                        <div class="my-3">  <Link :href="route('web.host.category',category.slug)" class="btn ">OverView</Link></div>
          </div>
        </div>
      </div>

   
    </div>
  </section>
</template>


