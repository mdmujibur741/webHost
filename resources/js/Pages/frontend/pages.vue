
<script setup>
 import FrontendLayout from '@/Layouts/FrontendLayout.vue';
       defineProps({
           page : Object
       })
</script>

<template>
    <FrontendLayout>
        <section class="bg-blue-50 min-h-[95vh] p-4">
                  <h2 class="text-center text-indigo-900 font-extrabold text-3xl">{{page.title}}</h2>
                    <div v-html="page.content" class="m-2 p-2">

                    </div>
        </section>
    </FrontendLayout>
            
</template>

