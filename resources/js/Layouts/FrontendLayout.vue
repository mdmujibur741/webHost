
<template>
        <Header/>
      
          <main>
              <slot />
          </main>
       <AFooter/>
</template>


<script setup>

import { Link } from '@inertiajs/vue3';
import Header from '@/Components/frontend/Header.vue';
 import AFooter from '@/Components/frontend/AFooter.vue';

</script>
