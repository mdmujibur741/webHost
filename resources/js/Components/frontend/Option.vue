
<script setup>
           const props = defineProps({
            features : Object  
           })
</script>


<template>
  <section class="min-h-[85vh] bg-[#09176A] p-5">
    <div class="w-11/12 md:w-11/12 mx-auto my-14">
      <h3 class="text-[36px] font-bold text-white text-center m-1" v-if="$page.props.Setting.setting"> {{$page.props.Setting.setting.home_feature_title}} </h3>
      <p class="text-center mb-1 text-white" v-if="$page.props.Setting.setting" v-html="$page.props.Setting.setting.home_feature_description">
       
      </p>

      <div
        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 justify-center my-6 lg:my-14 text-white"
      >
        <div v-for="feature in props.features.data.slice(0,4)" :key="feature" class="p-5 mx-auto">
          <img :src="feature.image" alt="" class="w-24 h-24 mx-auto rounded-full p-1 bg-green-500" />
          <h2 class="font-bold text-[18px] text-center"> {{ feature.title }} </h2>
          <p class="text-center">
             <span v-html="feature.description"></span>
          </p>
        </div>

        
      </div>
    </div>
  </section>
</template>

