 <template>
    <nav class="bg-white border-gray-200 dark:border-gray-600 dark:bg-gray-900 relative">
        <div
          class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5"
        >
          <a href="#" class="flex items-center">
              <img src="../../../../public/demo/logo.png" alt="logo">
          </a>
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
                <a 
                    href="/"
                  class="block py-2 pl-3 pr-4 font-bold md:text-[15px] text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-red-400 md:p-0  "
                  aria-current="page"
                  >Home</a 
                >
              </li>
              <li>
                <button
                  @mouseover="activeMenuOne()"  @click="itemOne= !itemOne"
                  id="mega-menu-full-cta-dropdown-button"
                  data-collapse-toggle="mega-menu-full-cta-dropdown"
                  data-dropdown-placement="bottom"
                  class="flex items-center justify-start w-full  py-2 pl-3 pr-4 font-bold md:text-[15px] text-gray-700 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-red-400 md:p-0 "
                >
                  Domain <i class="fa-solid fa-caret-down font-bold px-2"></i>
                </button>    
              </li>
              <li>
                <a
                  href="#"
                  @mouseover="activeMenuTwo()"   @click="itemTwo = !itemTwo"
                  class="block py-2 pl-3 pr-4 font-bold md:text-[15px] text-gray-800 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-red-400 md:p-0 "
                  >Hosting <i class="fa-solid fa-caret-down font-bold px-2"></i></a>
        
              </li>
              <li>
                <a
                  href="#"
                  class="block py-2 pl-3 pr-4 font-bold md:text-[15px] text-gray-800 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-red-400 md:p-0 "
                  >Server</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="block py-2 pl-3 pr-4 font-bold md:text-[15px] text-gray-800 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-red-400 md:p-0 "
                  >Voice</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="block py-2 pl-3 pr-4 font-bold md:text-[15px] text-gray-800 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-red-400 md:p-0 "
                  >Server</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="block py-2 pl-3 pr-4 font-bold md:text-[15px] text-gray-800 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-red-400 md:p-0 "
                  >Support</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="block py-2 pl-3 pr-4 font-bold md:text-[15px] text-gray-800 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-red-400 md:p-0 "
                  >Contact</a
                >
              </li>



              <!-- lg screen Dropdown start -->
  
              <div
              v-if="menu===1"  
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
                    <a href="/chowdhuryhost/cpanel/host"
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
              v-if="menu===2"  
              id="mega-menu-full-cta-dropdown"
              class="bg-white absolute right-0 top-13 md:top-20 lg:w-full w-64  sm:mx-auto  z-50 border-gray-200 border-y drop-shadow-lg"
            >
              <div
                class="flex flex-col lg:flex-row justify-start  px-4 py-5 mx-auto text-sm text-gray-500  md:px-6"
              >
                <ul
                  class="space-y-4 sm:mb-4 md:mb-0 w-full"
                  aria-labelledby="mega-menu-full-cta-button"
                >
                  <li>
                    <Link
                      :href="route('web.cpanel.hosting')"
                      class="hover:underline hover:text-blue-600 dark:hover:text-blue-500"
                    >
                      Cpanel Hosting
                    </Link>
                  </li>
                  <li>
                    <a
                      href="#"
                      class="hover:underline hover:text-blue-600 dark:hover:text-blue-500"
                    >
                      Segmentation
                    </a>
                  </li>
                  <li>
                    <a
                      href="#"
                      class="hover:underline hover:text-blue-600 dark:hover:text-blue-500"
                    >
                      Marketing CRM
                    </a>
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


        function activeMenuOne(){
          this.menu =1;
                      setTimeout(() => this.menu = 100, 3000);
        }

        function activeMenuTwo(){
          this.menu =2;
                        setTimeout(() => this.menu = 100, 3000);
        }
</script>