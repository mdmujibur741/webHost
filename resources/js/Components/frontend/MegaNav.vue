 <template>
    <nav class="bg-white border-gray-200 dark:border-gray-600 dark:bg-gray-900 relative">
        <div
          class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5"
        >
          <Link href="/" class="flex items-center">
              <img v-if="$page.props.Setting.setting !== null" :src="$page.props.Setting.setting.logo" class="w-16 h-16 rounded-full" alt="logo">
             
          </Link>
          <button @click="mobileMenu = !mobileMenu"
            id="mega-menu-full-cta-button"
            data-collapse-toggle="mega-menu-full-cta"
            type="button"
            class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
            aria-controls="mega-menu-full-cta"
            aria-expanded="false"
          >
            <span class="sr-only">Open main menu</span>
            <i class="fa-solid fa-bars text-lg">nav</i>
          </button>




          <div
            id="mega-menu-full-cta w-7/12 md:block md:w-auto" :class="{hidden :mobileMenu}"
            class="items-center justify-between w-full md:flex md:w-auto md:order-1"
          >
            <ul
              class="flex flex-col mt-4 text-sm font-medium md:flex-row md:space-x-8 md:mt-0"
            >
              <li>
                <Link 
                    :href="route('web.home')"
                  class="block py-2 pl-3 pr-4 font-bold md:text-[15px] text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-red-400 md:p-0  "
                  aria-current="page"
                  >Home</Link 
                >
              </li>
              <li>
                <button
                  @mouseover="activeMenu(1)"  @click="itemOne= !itemOne"
                  id="mega-menu-full-cta-dropdown-button"
                  data-collapse-toggle="mega-menu-full-cta-dropdown"
                  data-dropdown-placement="bottom"
                  class="flex items-center justify-start w-full  py-2 pl-3 pr-4 font-bold md:text-[15px] text-gray-700 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-red-400 md:p-0 "
                >
                  Domain <i class="fa-solid fa-caret-down font-bold px-2"></i>
                </button>    
              </li>
              <li  >
                <button @mouseover="activeMenu(2)"  @click="itemTwo = !itemTwo"
                  id="mega-menu-full-cta-dropdownTwo"
                data-collapse-toggle="mega-menu-full-cta-dropdownTwo"
                data-dropdown-placement="bottom"
                 
                 
                  class="flex items-center justify-start w-full  py-2 pl-3 pr-4 font-bold md:text-[15px] text-gray-700 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-red-400 md:p-0 "
                  >Hosting <i class="fa-solid fa-caret-down font-bold px-2"></i>
                </button>
        

              
                  

              </li>

              <li v-for="pag in $page.props.Pages.page" :key="pag">
                <Link
                  :href="route('web.page', pag.slug)"
                  class="block py-2 pl-3 pr-4 font-bold md:text-[15px] text-gray-800 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-red-400 md:p-0 "
                  > {{ pag.slug }} </Link
                >
              </li>
            
             
              <li>
                <Link
                  :href="route('web.contact')"
                  class="block py-2 pl-3 pr-4 font-bold md:text-[15px] text-gray-800 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-red-400 md:p-0 "
                  >Contact</Link
                >
              </li>



              <!-- lg screen Dropdown start -->
  
              <div
              v-if="menu===1" @mouseout="deActiveMenu(0)"   @mouseover="activeMenu(1)"
              id="mega-menu-full-cta-dropdown"
              class="bg-white absolute right-0 top-13 md:top-20 lg:w-full w-64  sm:mx-auto  z-50 border-gray-200 shadow-xl border-y drop-shadow-lg"
            >
              <div
                class="flex flex-col lg:flex-row justify-start  px-4 py-5 mx-auto text-sm text-gray-500  md:px-6"
              >
                <ul
                  class="space-y-4 sm:mb-4 md:mb-0 w-full"
                  aria-labelledby="mega-menu-full-cta-button"
                >
                  <li>
                    <a href=""
                      class="hover:underline hover:text-blue-600 dark:hover:text-blue-500" >               
                    route test
                  </a>
                    
                  </li>
                  <li>
                    <Link
                      :href="route('web.register.domain')"
                      class="hover:underline hover:text-blue-600 dark:hover:text-blue-500"
                    >
                      Register Domain
                    </Link>
                  </li>
                  <li>
                    <Link
                       :href="route('web.ssl.certificate')"
                      class="hover:underline hover:text-blue-600 dark:hover:text-blue-500"
                    >
                      SSL Certificate
                    </Link>
                  </li>
                  <li>
                    <a
                      href="#"
                      class="hover:underline hover:text-blue-600 dark:hover:text-blue-500"
                    >
                      Online Stores
                    </a>
                  </li>
                </ul>
                <ul class="mb-4 space-y-4 md:mb-0 w-6/12">
                  <li>
                    <a
                      href="#"
                      class="hover:underline hover:text-blue-600 dark:hover:text-blue-500"
                    >
                      Our Blog
                    </a>
                  </li>
                  <li>
                    <a
                      href="#"
                      class="hover:underline hover:text-blue-600 dark:hover:text-blue-500"
                    >
                      Terms & Conditionfedec
                    </a>
                  </li>
                
                </ul>
              </div>
            </div>
            

            <div
            v-if="menu===2"  @mouseout="deActiveMenu(0)"   @mouseover="activeMenu(2)"    
            id="mega-menu-full-cta-dropdownTwo"
            class="bg-white absolute right-0 top-13 md:top-20 lg:w-full w-64  sm:mx-auto  z-50 border-gray-200 border-y drop-shadow-lg"
          >
            <div
              class="flex flex-col lg:flex-row justify-start  px-4 py-5 mx-auto text-sm text-gray-500  md:px-6"
            >
              <ul
                class="space-y-4 sm:mb-4 md:mb-0 w-full"
                aria-labelledby="mega-menu-full-cta-button"
              >
                <li v-for="cat in $page.props.Category.category.slice(0,4)" :key="cat">
                  <Link
                    :href="route('web.host.category',cat.slug)"
                    class="hover:underline hover:text-blue-600 dark:hover:text-blue-500 flex gap-3"
                  >
                   <!-- <img :src="'/storage/'+ cat.Image" alt="image" class="w-16">   -->
                   <span class="capitalize font-bold">{{ cat.slug }}</span>
                  </Link>
                </li>
             
              </ul>
              <ul class="mb-4 space-y-4 md:mb-0 w-6/12">
                <li v-for="cat in $page.props.Category.category.slice(4,8)" :key="cat">
                  <Link
                  :href="route('web.host.category',cat.slug)"
                    class="hover:underline hover:text-blue-600 dark:hover:text-blue-500 flex gap-3" >
                    <!-- <img :src="'/storage/'+ cat.Image" alt="image" class="w-16">   -->
                    <span class="capitalize font-bold">{{ cat.slug }}</span> 
                  </Link>
                </li>
             
              
              </ul>
              <ul class="mb-4 space-y-4 md:mb-0 w-6/12">
                <li v-for="cat in $page.props.Category.category.slice(9,12)" :key="cat">
                  <Link
                  :href="route('web.host.category',cat.slug)"
                    class="hover:underline hover:text-blue-600 dark:hover:text-blue-500 flex gap-3" >
                    <!-- <img :src="'/storage/'+ cat.Image" alt="image" class="w-16">   -->
                     <span class="capitalize font-bold">{{ cat.slug }}</span>
                  </Link>
                </li>
             
              
              </ul>
            </div>
          </div> 
 
           
            
            </ul>
          </div>

        </div>
  

      </nav>
 </template>










<script setup>
         import { ref } from 'vue';
          import { Link } from '@inertiajs/vue3';

        const menu = ref(0);
        const mobileMenu = ref('false');
        const itemOne = ref('false');
        const itemTwo = ref('false');


        function activeMenu(data){
          this.menu = data;

                   
        }
        function deActiveMenu(data){
          this.menu = data;
         
                 
        }

       
</script>