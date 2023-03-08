<template>
  <Footer class="min-h-[70vh] bg-[#09176A]">
    <div class="w-11/12 lg:w-10/12 mx-auto grid lg:grid-cols-3 gap-6">
      <div class="py-4 lg:py-14">
        <h2 class="text-lg font-bold text-white">ABOUT US</h2>
        <hr class="border border-white w-3/12" />
        <p class="m-1 py-4 text-gray-300">
          <span v-if="$page.props.Setting.setting!==null" v-html="$page.props.Setting.setting.about">

          </span>
           <span v-else> No Data Found </span>
        </p>
        <a href="" class="px-6 py-3 bg-red-600 text-white font-bold text-lg my-6"
          >Live Sell Support</a
        >
      </div>

      <div class="text-gray-200 py-4 lg:py-14">
        <h2 class=" text-lg font-bold text-white">Contact information</h2>
        <hr class="border border-white w-6/12" />
        <h4 class="text-white">Address :</h4>
        <hr class="border-b border-dashed border-white" />
        <p class="py-3" v-if="$page.props.Setting.setting!==null"> {{ $page.props.Setting.setting.address }} </p>
        <hr class="border-b border-dashed border-white" />
        <p class="py-1">24/7 Support</p>
        <p class="py-1 text-xl font-bold" v-if="$page.props.Setting.setting!==null"> {{ $page.props.Setting.setting.phone }} </p>
        <p class="py-1">E-mail</p>
        <p class="py-1" v-if="$page.props.Setting.setting!==null"> {{ $page.props.Setting.setting.email }} </p>
        <p class="py-1">Follow Us</p>
        <div class="flex gap-x-3">
         <Link v-if="$page.props.Setting.setting!==null" :href="$page.props.Setting.setting.twitter" class="bg-blue-600 w-8 h-8 rounded-full p-1 text-center">  <i class="fa-brands fa-twitter "></i></Link>
         <Link v-if="$page.props.Setting.setting!==null" :href="$page.props.Setting.setting.facebook" class="bg-blue-600 w-8 h-8 rounded-full p-1 text-center"> <i class="fa-brands fa-facebook"></i></Link>
         <Link v-if="$page.props.Setting.setting!==null" :href="$page.props.Setting.setting.instagram" class="bg-blue-600 w-8 h-8 rounded-full p-1 text-center"> <i class="fa-brands fa-square-instagram"></i></Link>
        </div>
      </div>

      <div class="text-gray-200 py-4 lg:py-14">
        <h2 class="text-xl font-bold">Useful Links</h2>
            <hr class="border border-white w-4/12">
             <div class="m-1 p-2" v-if="$page.props.Setting.setting!==null" v-html="$page.props.Setting.setting.use_link">

             </div>
          <div class="flex gap-x-1">
                <img v-if="$page.props.Setting.setting!==null" :src="'/storage/'+ $page.props.Setting.setting.footer_img_one" class="w-24 h-16" alt="">
                <img v-if="$page.props.Setting.setting!==null" :src="'/storage/'+ $page.props.Setting.setting.footer_img_two" class="w-24 h-16" alt="">
                <img v-if="$page.props.Setting.setting!==null" :src="'/storage/'+ $page.props.Setting.setting.footer_img_three" class="w-24 h-16" alt="">
                <img v-if="$page.props.Setting.setting!==null" :src="'/storage/'+ $page.props.Setting.setting.footer_img_four" class="w-24 h-16" alt="">
          </div> 
      </div>
    </div>
     <h3 class="text-center text-lg text-semibold text-white" v-if="$page.props.Setting.setting!==null">Powered by <strong>{{$page.props.Setting.setting.powered}}</strong></h3>
  </Footer>
</template>
<script setup>
import { Link } from '@inertiajs/vue3';

     
</script>