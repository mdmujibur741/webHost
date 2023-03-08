<template>

    <section class="min-h-[95vh] bg-indigo-500  pt-10 pb-10">
           <div class="w-10/12 md:w-11/12 py-18 mx-auto">
            <h2 class="text-center font-bold text-xl lg:text-[36px] m-1 pt-6 text-white" v-if="$page.props.Setting.setting" > {{ $page.props.Setting.setting.home_package_title }} </h2>

          <p class="text-center text-[15px] py-6 mb-8 text-white" v-if="$page.props.Setting.setting" v-html="$page.props.Setting.setting.home_package_description">  </p>
           
           <div class="grid md:grid-cols-2 lg:grid-cols-4 m-1 gap-8">
  


            <!-- First Package -->
               <div v-for="pac in fourPackage.data" :key="pac" class="border border-slate-400 bg-white">
                  <h2 class="text-[20px] font-bold text-center m-1 py-2 uppercase"> {{ pac.category }} </h2>
                <div class="single-price bg-white text-center ease-out duration-300 ">
                    <div class="deal-top bg-slate-200 hover:bg-red-600 relative py-8 text-black">
                      <h4 class="text-[14px]">Starting From </h4>
                       <h1 class="text-[35px] font-bold"> ${{pac.price}}</h1>
                      
                    </div>
                    <div class="deal-bottom py-14">
                      <ul class="deal-item text-md mt-12 text-slate-600 leading-8">
                            <li class="capitalize font-semibold"> {{ pac.opportunityOne }} </li>
                            <li class="capitalize font-semibold">  {{ pac.opportunityTwo }} </li>
                            <li class="capitalize font-semibold"> {{pac.opportunityThree }} </li>
                            <li class="capitalize font-semibold"> {{ pac.opportunityFour }}  </li>
                            <li class="capitalize font-semibold">{{ pac.opportunityFive }} </li>
                            <li class="capitalize font-semibold"> {{ pac.opportunitySix }} </li>
                            <li class="capitalize font-semibold"> {{ pac.opportunitySeven }} </li>
                            <li class="capitalize font-semibold"> {{ pac.opportunityEight }} </li>
                            <h3 class="text-sm text-center">Get 1 months free with annual prepay+.com domain free</h3>
                      </ul>
                      <div class="mt-20">
                        <a href="#" class="bg-green-600 rounded py-3 mt-7 text-white px-14">Sign Up</a>       
                      </div>
                    </div>
                  </div>
               </div>

        
           </div>
        
        </div>


    </section>

</template>

<script setup>
 defineProps({
  fourPackage:Object
 })
</script>


<style scoped>


@media only screen and (min-width: 1354px) {
    .deal-top::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: -50px;
        width: 0;
        height: 0;
        border-top: 50px solid #efecf2;
        border-left: 125px solid transparent;
        border-right: 158px solid transparent;
        
      }
  }
 

 
  
  .single-price:hover {
    background: #eaf1f0;
  }
  .single-price:hover .deal-top {
    background: green;
    color: #eaf1f0;
  }
  .single-price:hover .deal-top:after {
    border-top: 50px solid green;
    color: #eaf1f0;
    
  }
  .single-price:hover .btn-area a {
    background: green;
  }
  
  
  
  
  

</style>