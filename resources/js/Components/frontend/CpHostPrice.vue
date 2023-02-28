<template>
 
    <section class="bg-indigo-100 p-6 ">
     <h3 class="m-2 py-4 text-4xl font-extrabold text-center"> Chowdhury Web Host pricing</h3>

    <p class="text-center pb-4 mb-6 text-gray-600">  From early to enterprise, we've got you covered. Start with cheap hosting. Annual
      payment earns you two months free!</p>
         <div class="bg-blue-300 w-10/12 lg:w-6/12 mx-auto grid grid-cols-4 gap-4 p-3 rounded-2xl">
                <Button @click="ActiveTabOne()" class="bg-gray-300 px-3 py-1 rounded-2xl font-semibold">Daily</Button>
                <Button @click="ActiveTabTwo()" class="bg-gray-300 px-3 py-1 rounded-2xl font-semibold">Monthly</Button>
                <Button @click="ActiveTabThree()" class="bg-gray-300 px-3 py-1 rounded-2xl font-semibold">Yearly</Button>
                <Button @click="ActiveTabFour()" class="bg-gray-300 px-3 py-1 rounded-2xl font-semibold">Lifetime</Button>
         </div>
      
         <div v-if="tab ===1">
            <CpHostSliderOne/>
        </div>

         <div v-if="tab ===2">
            <CpHostSliderTwo/>
         </div>

         <div v-if="tab===3">
            <CpHostSliderThree/>
         </div>

          <div v-if="tab===4">
            <CpHostSliderFour/>
          </div>

        <h3 class="text-center m-2 p-3 ">  .com Domain name free <a href="" class="text-lg font-bold">  WELCOME</a></h3>
    </section>

</template>


<script >

import CpHostSliderOne from './CpHostSliderOne.vue';
import CpHostSliderTwo from './CpHostSliderTwo.vue';
import CpHostSliderThree from './CpHostSliderThree.vue';
import CpHostSliderFour from './CpHostSliderFour.vue';
// import { ref } from 'vue';
       

  export default {
          data(){
               return{
                   tab :1
               } 
          }, 
          components:{
            CpHostSliderOne : CpHostSliderOne, 
            CpHostSliderTwo : CpHostSliderTwo,
            CpHostSliderThree : CpHostSliderThree,
            CpHostSliderFour : CpHostSliderFour
          },

          methods:{
             ActiveTabOne(){
           this.tab = 1;
           },

            ActiveTabTwo(){
             this.tab = 2;
            },
           ActiveTabThree(){
           this.tab = 3;
         },

          ActiveTabFour(){
           this.tab = 4;
         }
          }
  }
     
      
    

 </script>