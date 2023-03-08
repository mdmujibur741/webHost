<template>
    <nav class="bg-white">
        <ul
            class="flex justify-center md:justify-end mt-1 text-sm font-medium  md:space-x-2 md:mt-0 md:w-11/12 relative"
          >
            <li>
              <a
                href="#"
                class="block py-2 px-3 text-[13px] font-semibold md:text-[15px] text-black border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-red-400 "
                aria-current="page"
                ><i class="fa-solid fa-phone-flip mr-2"></i>   
                 <span class="font-semibold" v-if="$page.props.Setting.setting" > {{ $page.props.Setting.setting.mobile }} </span>
                
            </a
              >
            </li>
            <li>
                <a
                  @click="dropDown = !dropDown"
                  class="block py-2 px-3 font-bold md:text-[15px] text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-red-400 "
                  aria-current="page"
                  > <div class="flex gap-x-2 my-auto"><img src="../../../../public/demo/usa.png" class="h-5 w-7 pt-1" alt=""> <span>English <i class="fa-solid fa-caret-down font-bold"></i></span></div></a
                >
              </li>
            <li>
              <button
               
                id="mega-menu-full-cta-dropdown-button"
                data-collapse-toggle="mega-menu-full-cta-dropdown"
                data-dropdown-placement="bottom"
                class="flex items-center justify-between w-full  py-2 pl-3 pr-4 font-bold md:text-[15px] text-gray-700 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-red-400"
              >
              <i class="fa-solid fa-dollar-sign"></i>  USD <i class="fa-solid fa-caret-down font-bold pl-1"></i>
              </button>
            </li>
            <li>
              <a
                href="#"
              
                class="block py-2 px-3 font-bold md:text-[15px] text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-red-600 md:border-0 md:hover:text-white"
                >
                <i class="fa-solid fa-user font-bold text-[16px]"></i>
            </a>
            </li>
         
            <li>
              <a
                href="#"
                class="block py-2 px-3 font-bold md:text-[15px] text-gray-700 border-b border-gray-100 hover:bg-red-600 hover:text-white  md:border-0  "
                > <i class="fa-solid fa-cart-shopping text-lg hover:text-white"></i> </a
              >
            </li>
          </ul>


       
       
       
          <div
          :class="{hidden: dropDown}"
          id=""
          class="bg-white  top-12 right-12 z-50 border-gray-200 drop-shadow-xl border-y dark:bg-gray-800 dark:border-gray-600 absolute"
        >
          <div
            class="grid px-4 py-5 mx-auto text-sm text-gray-500 dark:text-gray-400 md:grid-cols-3 md:px-6"
          >
            <ul
              class="space-y-4 sm:mb-4 md:mb-0 px-4"
              aria-labelledby="mega-menu-full-cta-button"
            >
              <li>
                <a
                  href="#"
                  class="hover:underline py-3 hover:text-blue-600 dark:hover:text-blue-500 px-3 m-1"
                >
                <div class="flex">  <img src="../../../../public/demo/china.png"  class="w-10 h-6 m-1" alt=""> <span>China</span> </div>
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="hover:underline py-3 hover:text-blue-600 dark:hover:text-blue-500 px-3 m-1"
                >
                <div class="flex">  <img src="../../../../public/demo/china.png"  class="w-10 h-6 m-1" alt=""> <span>China</span> </div>
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="hover:underline py-3 hover:text-blue-600 dark:hover:text-blue-500 px-3 m-1"
                >
                <div class="flex">  <img src="../../../../public/demo/china.png"  class="w-10 h-6 m-1" alt=""> <span>China</span> </div>
                </a>
              </li>
             
            </ul>
            <ul
            class="space-y-4 sm:mb-4 md:mb-0 px-4"
            aria-labelledby="mega-menu-full-cta-button"
          >
            <li>
              <a
                href="#"
                class="hover:underline py-3 hover:text-blue-600 dark:hover:text-blue-500 px-3 m-1"
              >
              <div class="flex">  <img src="../../../../public/demo/china.png"  class="w-10 h-6 m-1" alt=""> <span>China</span> </div>
              </a>
            </li>
            <li>
              <a
                href="#"
                class="hover:underline py-3 hover:text-blue-600 dark:hover:text-blue-500 px-3 m-1"
              >
              <div class="flex">  <img src="../../../../public/demo/china.png"  class="w-10 h-6 m-1" alt=""> <span>China</span> </div>
              </a>
            </li>
            <li>
              <a
                href="#"
                class="hover:underline py-3 hover:text-blue-600 dark:hover:text-blue-500 px-3 m-1"
              >
              <div class="flex">  <img src="../../../../public/demo/china.png"  class="w-10 h-6 m-1" alt=""> <span>China</span> </div>
              </a>
            </li>
           
          </ul>
            <ul class="hidden mb-4 space-y-4 md:mb-0 sm:block px-4">
              <li>
                <a
                  href="#"
                  class="hover:underline py-3 hover:text-blue-600 dark:hover:text-blue-500 px-3 m-1"
                >
                <div class="flex">  <img src="../../../../public/demo/china.png"  class="w-10 h-6 m-1" alt=""> <span>China</span> </div>
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="hover:underline py-3 hover:text-blue-600 dark:hover:text-blue-500 px-3 m-1"
                >
               <div class="flex">  <img src="../../../../public/demo/china.png"  class="w-10 h-6 m-1" alt=""> <span>China</span> </div>
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="hover:underline py-3 hover:text-blue-600 dark:hover:text-blue-500 px-3 m-1"
                >
                <div class="flex">  <img src="../../../../public/demo/china.png"  class="w-10 h-6 m-1" alt=""> <span>China</span> </div>
                </a>
              </li>
            </ul>
          </div>
        </div>

        </nav>
</template>



<script setup>

import { EMPTY_OBJ } from '@vue/shared';
import { ref } from 'vue';

const dropDown = ref('false');



</script>