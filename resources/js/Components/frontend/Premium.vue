<template>
<section class="min-h-[70vh] bg-blue-100 flex justify-center items-center">
   <div class="w-11/12 lg:w-10/12  grid lg:grid-cols-3 justify-center mx-auto">
         <div class="mx-auto">
              <img v-if="$page.props.Setting.setting" :src="$page.props.Setting.setting.home_premium_image" alt="Premium Image" class="w-3xl rounded-md">
         </div>
         <div class="lg:col-span-2 mx-auto">
            
            <div class="m-4 p-4" v-if="$page.props.Setting.setting" v-html="$page.props.Setting.setting.home_premium_description"></div>

                   
             <Link :href="route('web.contact')" class="bg-blue-700 m-4 px-8 py-4 text-white font-semibold"> Any Support </Link>
         </div>
   </div>

</section>
</template>

<script setup>
  import { Link } from '@inertiajs/vue3';
 </script>