<script setup>

     import { ref } from 'vue';

     const tab = ref(100);

   function ActiveTabOne() {
      this.tab = 100;
    }
   function ActiveTab(index) {
      this.tab = index;

    }

   const props = defineProps({
      categories : Object,
     home_categories: Object
    })
    
 </script>


<template>
  <section class="min-h-[80vh] bg-white my-5">
    <div
      class="min-h-[80vh] grid  md:grid-cols-4  bg-white w-full lg:w-11/12 mx-auto drop-shadow-lg py-14 px-5 "
    >
      <div class="md:border-r-2">
        <div class="grid grid-cols-3 md:grid-cols-1 md:justify-start gap-x-14 lg:gap-x-4 lg:gap-y-2 gap-y-4 mx-2 mb-8">
          <li class="list-none lg:p-2 p-3 m-2 text-sm lg:text-lg ">
            <button @click="ActiveTabOne()">
              <i class="fa-solid fa-globe lg:h-[24px] pr-5"></i> Buy A Domain
            </button>
          </li>
          <li v-for="(category, index) in props.categories.slice(0,6)" :key="category.index" class="list-none lg:p-2 p-3 m-2 text-sm lg:text-lg">
            <button @click="ActiveTab(index+1)">
              <i class="fa-solid fa-list lg:h-[24px] pr-5"></i>  {{ category.name }}
            </button>
          </li>
      
        </div>
      </div>
      <div class="col-span-3">


        
        <!-- Domain Tab -->
        <div class="w-full overflow p-3" v-if="tab === 100">
          <div class="w-full border-2 border-gray-300 p-1 m-2 rounded-xl ">
            <div class="grid grid-cols-2 lg:grid-cols-6  justify-between items-center gap-2 mx-2 ">
              <span class="font-bold text-lg m-1 w-full">WWW.</span>
              <input
                type="text"
                class="border-0 hover:border-0 px-6 text-lg m-1 focus:outline-none focus:ring-0 col-span-3"
                placeholder="Enter Your Domain name Here"
              />
              <select name="" id="" class="bg-[#FFFFFF] m-1 text-lg w-full border-transparent focus:border-transparent focus:ring-0">
                <option value="">com</option>
                <option value="">net</option>
                <option value="">org</option>
              </select>
              <input
                type="submit"
                value="SEARCH"
                class="bg-green-600 text-white border-0 outline-0 md:px-6 md:py-2 px-2 py-1 inline-block rounded-md"
              />
            </div>
          </div>
          <!-- component -->
      
           
                 <div class="w-full bg-slate-200"> 
                  <table class="w-full">
                    <thead class="bg-white border-b">
                      <tr>
                        <th
                          scope="col"
                          class="text-sm font-medium text-gray-900 px-3 lg:px-6 py-4 text-left"
                        >
                          #
                        </th>
                        <th
                          scope="col"
                          class="text-sm font-medium text-gray-900 px-3 lg:px-6 py-4 text-left"
                        >
                          First
                        </th>
                        <th
                          scope="col"
                          class="text-sm font-medium text-gray-900 px-3 lg:px-6 py-4 text-left"
                        >
                          Last
                        </th>
                        <th
                          scope="col"
                          class="text-sm font-medium text-gray-900 px-3 lg:px-6 py-4 text-left"
                        >
                          Handle
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="bg-gray-100 border-b">
                        <td
                          class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"
                        >
                          1
                        </td>
                        <td
                          class="text-sm text-gray-900 font-light px-3 lg:px-6 py-4 whitespace-nowrap"
                        >
                          Mark
                        </td>
                        <td
                          class="text-sm text-gray-900 font-light px-3 lg:px-6 py-4 whitespace-nowrap"
                        >
                          Otto
                        </td>
                        <td
                          class="text-sm text-gray-900 font-light px-3 lg:px-6 py-4 whitespace-nowrap"
                        >
                          @mdo
                        </td>
                      </tr>
                      <tr class="bg-white border-b">
                        <td
                          class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"
                        >
                          2
                        </td>
                        <td
                          class="text-sm text-gray-900 font-light px-3 lg:px-6 py-4 whitespace-nowrap"
                        >
                          Jacob
                        </td>
                        <td
                          class="text-sm text-gray-900 font-light px-3 lg:px-6 py-4 whitespace-nowrap"
                        >
                          Dillan
                        </td>
                        <td
                          class="text-sm text-gray-900 font-light px-3 lg:px-6 py-4 whitespace-nowrap"
                        >
                          @fat
                        </td>
                      </tr>
                      <tr class="bg-gray-100 border-b">
                        <td
                          class="px-3 lg:px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"
                        >
                          3
                        </td>
                        <td
                          class="text-sm text-gray-900 font-light px-3 lg:px-6 py-4 whitespace-nowrap"
                        >
                          Mark
                        </td>
                        <td
                          class="text-sm text-gray-900 font-light px-3 lg:px-6 py-4 whitespace-nowrap"
                        >
                          Twen
                        </td>
                        <td
                          class="text-sm text-gray-900 font-light px-3 lg:px-6 py-4 whitespace-nowrap"
                        >
                          @twitter
                        </td>
                      </tr>
                      <tr class="bg-white border-b">
                        <td
                          class="px-3 lg:px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"
                        >
                          4
                        </td>
                        <td
                          class="text-sm text-gray-900 font-light px-3 lg:px-6 py-4 whitespace-nowrap"
                        >
                          Bob
                        </td>
                        <td
                          class="text-sm text-gray-900 font-light px-3 lg:px-6 py-4 whitespace-nowrap"
                        >
                          Dillan
                        </td>
                        <td
                          class="text-sm text-gray-900 font-light px-3 lg:px-6 py-4 whitespace-nowrap"
                        >
                          @fat
                        </td>
                      </tr>
                      <tr class="bg-gray-100 border-b">
                        <td
                          class="px-3 lg:px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"
                        >
                          5
                        </td>
                        <td
                          colspan="2"
                          class="text-sm text-gray-900 font-light px-3 lg:px-6 py-4 whitespace-nowrap text-center"
                        >
                          Larry the Bird
                        </td>
                        <td
                          class="text-sm text-gray-900 font-light px-3 lg:px-6 py-4 whitespace-nowrap"
                        >
                          @twitter
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div> 
               
               
               
               
             
    
     

          

        
  
          <div
            class="min-h-[8vh] grid grid-cols-1 lg:grid-cols-4 gap-4 justify-end items-center bg-green-500 rounded-lg lg:rounded-l-full text-white px-3 py-3 mt-6"
          >
            <span> 24/7 Customer Support</span>
            <span> db FREE DNS Hosting </span>
            <span> AttachmentFREE URL Forwarding </span>
            <span> mailFREE Email Forwarding </span>
          </div>
        </div>

        <!-- Dynamic Category tab  -->
        <div v-for="(category,index) in props.home_categories.slice(0,6)" :key="category.index"  >
        
          <div v-if="tab===index+1">
            <div class="grid md:grid-cols-2 gap-8 my-4">
              <div class="px-3 m-1">
                <h3 class="text-xl font-semibold"> {{ category.name }} </h3>
                <p class="text-lg font-medium">
                 
                  <div v-html="category.description.slice(0,100)">
                
                  </div>
                 
                </p>
              </div>
  
              <div class="text-md px-3 m-1">
                <p><i class="fa-solid fa-check text-[#17494D]"></i> 24/7 Support</p>
                <p>
                  <i class="fa-solid fa-check text-[#17494D]"></i>SAS SSD Enterprise Storage
                </p>
                <p>
                  <i class="fa-solid fa-check text-[#17494D]"></i> Acronis Hourly Backups
                </p>
                <p><i class="fa-solid fa-check text-[#17494D]"></i> MariaDB databases</p>
                <p>
                  <i class="fa-solid fa-check text-[#17494D]"></i> Fortinet Hardware
                  Firewalls
                </p>
              </div>
            </div>
             
            
  
            <div class="grid sm:grid-cols-1 lg:grid-cols-3 gap-5 border-t border-slate-300">
  
  
              <div v-for="pac in category.package.data" :key="pac" class="p-4 border-r border-slate-300 drop-shadow-md">
               
                <h3 class="text-lg lg:text-lg font-bold"> {{ pac.title }} </h3>
                <p class="text-lg font-bold my-4"><span class="lg:text-2xl text-xl">${{ pac.price }}.00</span> {{  pac.duration.slice(0,3) }}/ USD</p>
                   
                <p class="my-1 font-semibold"><i class="fa-solid fa-check text-[#17494D]"></i> {{ pac.opportunityOne }} </p>
                <p class="my-1 font-semibold"><i class="fa-solid fa-check text-[#17494D]"></i> {{ pac.opportunityTwo }}</p>
                <p class="my-1 font-semibold"><i class="fa-solid fa-check text-[#17494D]"></i> {{ pac.opportunityThree }} </p>
                <p class="my-1 font-semibold"><i class="fa-solid fa-check text-[#17494D]"></i> {{ pac.opportunityFour }} </p>
                <p class="my-1 font-semibold"><i class="fa-solid fa-check text-[#17494D]"></i> {{ pac.opportunityFive }} </p>
                <p class="my-1 font-semibold"><i class="fa-solid fa-check text-[#17494D]"></i> {{ pac.opportunitySix }} </p>
                <p class="my-1 font-semibold"><i class="fa-solid fa-check text-[#17494D]"></i> {{ pac.opportunitySeven }} </p>
                <p class="my-1 font-semibold">
                  <i class="fa-solid fa-check text-[#17494D]"></i> Powerful tools available
                </p>
                       <p class="mt-8">   <a href="" class="btn hover:bg-green-600 text-white bg-green-500">Order Now</a></p>
              </div>
  
            </div>
  
            <div class="w-full mt-5 hover:bg-green-600 text-white bg-green-500 drop-shadow-xl min-h-[8vh] flex justify-center items-center">
                 <h3 class="lg:text-xl"> <a href="">Check it Now  <i class="fa-solid fa-angle-right"></i></a> </h3>
            </div>
          </div>

        </div>

  
      </div>
      
    </div>
  </section>
</template>








