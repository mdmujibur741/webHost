<template>
   <FrontendLayout>
    
         <Home/>
         <TabNav :categories="props.categories" :tabPackageOne="props.tabPackageOne" :tabPackageTwo="props.tabPackageTwo" :tabPackageThree="props.tabPackageThree" :tabPackageFour="props.tabPackageFour" :tabPackageFive="props.tabPackageFive" :tabPackageSix="props.tabPackageSix"/>
         <Services/>
         <Option/>
         <Package :fourPackage="props.fourPackage"  />
         <FreeProvide/>
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
      tabPackageOne : Object,
      tabPackageTwo : Object,
       tabPackageThree : Object, 
       tabPackageFour : Object,
        tabPackageFive : Object,
        tabPackageSix : Object
   })

</script>