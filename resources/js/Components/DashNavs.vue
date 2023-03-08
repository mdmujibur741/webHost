<template>

             <!-- Top nav -->
             <nav class="fixed top-0 z-50 w-full bg-indigo-800 drop-shadow-sm border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
               <div class="px-3 py-3 lg:px-5 lg:pl-3">
                 <div class="flex items-center justify-between">
                   <div class="flex items-center justify-start">
                     <button @click="dashMobile = !dashMobile" data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                         <span class="sr-only">Open sidebar</span>
                         <i class="fa-solid fa-bars"></i>
                       
                      </button>
                     <Link href="/" class="p-2 m-1"> <img v-if="$page.props.Setting.setting" :src="'/storage/'+ $page.props.Setting.setting.logo" alt="Logo" class="w-8 h-8 rounded-full bg-green-500 p-2"> </Link>
                   </div>
                   <div class="flex items-center">
                       <div class="flex items-center ml-3">
                         <div>
                           <button @click="dropDown=!dropDown" type="button" class="flex text-sm bg-green-600 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                             <span class="sr-only">Open user menu</span>
                             <i class="fa-solid fa-user-tie text-lg text-white p-2"></i>
                           </button>
                         </div>
                         <div :class="{hidden:dropDown}" class="z-50 absolute top-10 right-2  my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                           <div class="px-4 py-3" role="none">
                             <p v-if="$page.props.auth.user" class="text-sm text-gray-900 dark:text-white" role="none">
                               {{ $page.props.auth.user.name }}
                             </p>
                             <p v-if="$page.props.auth.user" class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                              {{ $page.props.auth.user.email }}
                             </p>
                           </div>
                           <ul class="py-1" role="none">
                             <li>
                              <Link :href="route('profile.edit')" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem"> Profile </Link>
                            </li>
                             <li>
                               <Link :href="route('logout')" as="button" type="button" method="post" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem"> Logout </Link>
                             </li>
                           </ul>
                         </div>
                       </div>
                     </div>
                 </div>
               </div>
             </nav>




     <!-- SideNav -->
     <aside id="logo-sidebar"  class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-indigo-100 drop-shadow-xl border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700 " aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-drop-shadow-100 dark:bg-gray-800">
           <ul class="space-y-2" >
              <li>
                 <Link :href="route('dashboard')" class="dash-nav">
                   <i class="fa-solid fa-gauge text-lg"></i>
                    <span class="ml-3">Dashboard</span>
                 </Link>
              </li>
              <li>
                 <Link :href="route('admin.plan.index')" class="dash-nav">
                   <i class="fa-regular fa-paper-plane text-lg"></i>
                    <span class="flex-1 ml-3 whitespace-nowrap">Plan </span>
                   
                 </Link>
              </li>
 
              <li>
                <Link :href="route('admin.duration.index')" class="dash-nav">
                  <i class="fa-solid fa-timeline text-lg"></i>
                   <span class="flex-1 ml-3 whitespace-nowrap"> Duration </span>
                  
                </Link>
             </li>


       
              <li>
               <Link :href="route('admin.HostCategory.index')" class="dash-nav">
                <i class="fa-brands fa-slack text-lg"></i>
                  <span class="flex-1 ml-3 whitespace-nowrap"> Host Category </span>
                 
               </Link>
            </li>
            
            
      

            <li>
              <span @click="dropDownItem=!dropDownItem" type="button" class="dash-nav">
                <i class="fa-solid fa-anchor text-lg"></i>
                  <span class="flex-1 ml-3 whitespace-nowrap"> Host Package </span>
                 
          </span>
          <ul id="dropdown-example" :class="{hidden:dropDownItem}" class=" py-2 space-y-2">
              <hr>
                <li>
                   <Link :href="route('admin.HostPackage.index')" class="dash-nav"> 
                    <i class="fa-regular fa-circle text-lg mr-3"></i> Package List </Link>
                </li>
                <li>
                  <Link :href="route('admin.trash.list')" class="dash-nav"> 
                   <i class="fa-regular fa-circle text-lg mr-3"></i> Package Trash </Link>
               </li>
                
          </ul>
           </li>

            <li>
              <Link :href="route('admin.feature.index')" class="dash-nav">
                <i class="fa-solid fa-money-bill-wheat text-lg"></i>
                 <span class="flex-1 ml-3 whitespace-nowrap"> Feature </span>
                
              </Link>
           </li>

           <li>
            <Link :href="route('admin.page.index')" class="dash-nav">
              <i class="fa-regular fa-file-lines text-lg"></i>
               <span class="flex-1 ml-3 whitespace-nowrap"> Page </span>
              
            </Link>
         </li>
             
              

            <li>
              <Link :href="route('admin.setting.index')" class="flex items-center p-2 text-base font-bold text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <i class="fa-solid fa-gears text-lg"></i>
                 <span class="flex-1 ml-3 whitespace-nowrap"> Setting </span>
                
              </Link>
           </li>
             
           </ul>
        </div>
     </aside>
</template>


<script setup>
      import { Link } from '@inertiajs/vue3';
      import { ref } from 'vue';
      const dropDown = ref('false');
      const dropDownItem = ref('false');
      const dashMobile = ref('false');
</script>