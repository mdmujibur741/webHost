<template>
   <FrontendLayout>
    
         <Home/>
         <TabNav :categories="props.categories" :home_categories="props.home_categories"/>
         <Services :categories="props.categories"/>
         <Option :features="props.features"/>
         <Package :fourPackage="props.fourPackage"  />
         <FreeProvide :features="props.features"/>
         <Vps/>
         <Premium/>
  
    </FrontendLayout>

</template>


<script setup>
   import FrontendLayout from '@/Layouts/FrontendLayout.vue';
   import Home from '@/Components/frontend/Home.vue';
   import TabNav from '@/Components/frontend/TabNav.vue';
   import Services from '@/Components/frontend/Services.vue';
   import Option from '@/Components/frontend/Option.vue';
   import Package from '@/Components/frontend/Package.vue';
   import FreeProvide from '@/Components/frontend/FreeProvide.vue';
   import Vps from '@/Components/frontend/Vps.vue';
   import Premium from '@/Components/frontend/Premium.vue';

 const props =  defineProps({
      categories : Object,
      fourPackage : Object,
       home_categories : Object,
        features : Object
   })

</script>