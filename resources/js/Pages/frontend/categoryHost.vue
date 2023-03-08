<template>
         <FrontendLayout>
             <CpHostHome :category="props.category"/>
             <CpHostPrice :duration_package="props.duration_package" :category="props.category"/>
             <FreeProvide :features="props.features" :category="props.category"/>
             <!-- <UnlimitedBandwidth/> -->
             <OtherFech :allCatFeatures="props.allCatFeatures" :category="props.category"/>
             <ChooseUs/> 
            
         </FrontendLayout>
</template>


<script setup>
         import FrontendLayout from '@/Layouts/FrontendLayout.vue';
         import CpHostHome from '@/Components/frontend/CpHostHome.vue';
         import CpHostPrice from '@/Components/frontend/CpHostPrice.vue';
         import FreeProvide from '@/Components/frontend/FreeProvide.vue';
         import UnlimitedBandwidth from '@/Components/frontend/UnlimitedBandwidth.vue';
         import OtherFech from '@/Components/frontend/OtherFech.vue';
         import ChooseUs from '@/Components/frontend/ChooseUs.vue';

         const props = defineProps({
            features : Object,    
            category: Object,
            duration_package : Object,
            allCatFeatures : Object

         })
</script>