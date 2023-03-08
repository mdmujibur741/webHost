<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        
        <section class="min-h-[80vh] bg-blue-50 p-5">
              <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-4">
                     <div class="bg-indigo-200 h-28 rounded-lg drop-shadow-lg">
                         <p>
                            Lorem ipsum, dolor sit Iure, cum!
                         </p>
                     </div>
                     <div class="bg-indigo-200 h-28 rounded-lg drop-shadow-lg">
                        <p>
                           Lorem ipsum, dolor sit Iure, cum!
                        </p>
                    </div>
                    <div class="bg-indigo-200 h-28 rounded-lg drop-shadow-lg">
                        <p>
                           Lorem ipsum, dolor sit Iure, cum!
                        </p>
                    </div>
                    <div class="bg-indigo-200 h-28 rounded-lg drop-shadow-lg">
                        <p>
                           Lorem ipsum, dolor sit Iure, cum!
                        </p>
                    </div>
                   
              </div>
        </section>
    </AuthenticatedLayout>
</template>


