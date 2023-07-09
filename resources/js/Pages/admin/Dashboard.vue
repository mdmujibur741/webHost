<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        
        <section class="min-h-[80vh] bg-blue-50 p-5">
              <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-4">
                     <div class="bg-white h-32 rounded-lg drop-shadow-lg p-3">
                         <h3 class="text-xl font-bold m-1 text-indigo-800"> <i class="fa-regular fa-paper-plane text-lg"></i> Plans (4) </h3> 
                        
                        <p class="p-1">
                             There All Type Plane 
                         </p>
                     </div>
                     <div class="bg-white h-32 rounded-lg drop-shadow-lg p-3">
                        <h3 class="text-xl font-bold m-1 text-indigo-800">
                            <i class="fa-solid fa-timeline text-lg"></i>
                             Duration (4) </h3> 
                       
                       <p class="p-1">
                            Duration Package Timing
                        </p>
                    </div>
                    <div class="bg-white h-32 rounded-lg drop-shadow-lg p-3">
                        <h3 class="text-xl font-bold m-1 text-indigo-800">
                            <i class="fa-brands fa-slack text-lg"></i>
                             Hosting Category (12) </h3> 
                       
                       <p class="p-1">
                        Hosting Category All Type Category 
                        </p>
                    </div>

                    <div class="bg-white h-32 rounded-lg drop-shadow-lg p-3">
                        <h3 class="text-xl font-bold m-1 text-indigo-800">
                            <i class="fa-solid fa-boxes-packing text-lg"></i>
                             Hosting Package(99)  </h3> 
                       
                       <p class="p-1">
                        All Hosting Type Package 
                        </p>
                    </div>

                    <div class="bg-white h-32 rounded-lg drop-shadow-lg p-3">
                        <h3 class="text-xl font-bold m-1 text-indigo-800">
                            <i class="fa-brands fa-slack text-lg"></i>
                             Pages(1) </h3> 
                       
                       <p class="p-1">
                        All Hosting Type Package 
                        </p>
                    </div>

                    <div class="bg-white h-32 rounded-lg drop-shadow-lg p-3">
                        <h3 class="text-xl font-bold m-1 text-indigo-800">
                            <i class="fa-solid fa-money-bill-wheat text-lg"></i>
                             Feature(11) </h3> 
                       
                       <p class="p-1">
                        All Hosting Type Package 
                        </p>
                    </div>
                   
                   
              </div>
        </section>
    </AuthenticatedLayout>
</template>


