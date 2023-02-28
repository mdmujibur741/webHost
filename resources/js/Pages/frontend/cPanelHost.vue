<template>
         <FrontendLayout>
             <CpHostHome/>
             <CpHostPrice/>
             <FreeProvide/>
             <UnlimitedBandwidth/>
             <OtherFech/>
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
</script>