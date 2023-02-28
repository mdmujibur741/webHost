<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    defineProps({
           hostPackage : Object
    })
</script>

<template>
   <AuthenticatedLayout>

    <section class="min-h-[95vh] bg-slate-50 p-2 rounded-2xl drop-shadow-lg">
          <div v-for="pac in hostPackage.data" :key="pac">
            <h2 class="text-center font-extrabold uppercase text-2xl m-1"> {{ pac.title }} </h2>

           
                
             <div class="relative overflow-x-auto bg-slate-50 p-3  rounded-lg m-2 mt-5">
                  <table class="w-full text-sm text-left text-gray-500">
                         <thead>
                              <th width="20%" class="px-6 py-2 border border-slate-500 rounded-md uppercase">
                                  Slug
                              </th> 
                              <td scope="col" class="px-6 py-2 border border-slate-500 rounded-md capitalize">
                                  {{ pac.slug }}
                              </td>
                         </thead>
                         <thead>
                            <th width="20%" class="px-6 py-2 border border-slate-500 rounded-md uppercase">
                              Price
                            </th> 
                            <td scope="col" class="px-6 py-2 border border-slate-500 rounded-md capitalize">
                                {{ pac.price }}
                            </td>
                       </thead>
                       <thead>
                        <th width="20%" class="px-6 py-2 border border-slate-500 rounded-md uppercase">
                            Description
                        </th> 
                        <td scope="col" class="px-6 py-2 border border-slate-500 rounded-md capitalize">
                            {{ pac.description }}
                        </td>
                   </thead>
                   <thead>
                    <th width="20%" class="px-6 py-2 border border-slate-500 rounded-md uppercase">
                         Host category
                    </th> 
                    <td scope="col" class="px-6 py-2 border border-slate-500 rounded-md capitalize">
                        {{ pac.category }}
                    </td>
               </thead>
             
                <thead>
                    <th width="20%" class="px-6 py-2 border border-slate-500 rounded-md uppercase">
                        Plan
                    </th> 
                    <td scope="col" class="px-6 py-2 border border-slate-500 rounded-md capitalize">
                        {{ pac.plan }}
                    </td>
               </thead>

               <thead>
                <th width="20%" class="px-6 py-2 border border-slate-500 rounded-md uppercase">
                   Duration
                </th> 
                <td scope="col" class="px-6 py-2 border border-slate-500 rounded-md capitalize">
                    {{ pac.duration }}
                </td>
              </thead>

              <thead>
                <th width="20%" class="px-6 py-2 border border-slate-500 rounded-md uppercase">
                   Auth
                </th> 
                <td scope="col" class="px-6 py-2 border border-slate-500 rounded-md capitalize">
                    {{ pac.user }}
                </td>
              </thead>

              <thead>
                <th width="20%" class="px-6 py-2 border border-slate-500 rounded-md uppercase">
                  Icon Class
                </th> 
                <td scope="col" class="px-6 py-2 border border-slate-500 rounded-md capitalize">
                    {{ pac.icon_class }}
                </td>
              </thead>

              
              <thead v-if="pac.opportunityOne !== null">
                <th width="20%" class="px-6 py-2 border border-slate-500 rounded-md uppercase">
                  Opportunity One
                </th> 
                <td scope="col" class="px-6 py-2 border border-slate-500 rounded-md capitalize">
                    {{ pac.opportunityOne }}
                </td>
              </thead>

                
              <thead v-if="pac.opportunityTwo !== null">
                <th width="20%" class="px-6 py-2 border border-slate-500 rounded-md uppercase">
                  Opportunity Two
                </th> 
                <td scope="col" class="px-6 py-2 border border-slate-500 rounded-md capitalize">
                    {{ pac.opportunityTwo }}
                </td>
              </thead>

              <thead v-if="pac.opportunityThree !==null">
                <th width="20%" class="px-6 py-2 border border-slate-500 rounded-md uppercase">
                  Opportunity Three
                </th> 
                <td scope="col" class="px-6 py-2 border border-slate-500 rounded-md capitalize">
                    {{ pac.opportunityThree }}
                </td>
              </thead>

              <thead v-if="pac.opportunityFour !==null">
                <th width="20%" class="px-6 py-2 border border-slate-500 rounded-md uppercase">
                  Opportunity Four
                </th> 
                <td scope="col" class="px-6 py-2 border border-slate-500 rounded-md capitalize">
                    {{ pac.opportunityFour }}
                </td>
              </thead>

              <thead v-if="pac.opportunityFive !==null">
                <th width="20%" class="px-6 py-2 border border-slate-500 rounded-md uppercase">
                  Opportunity Five
                </th> 
                <td scope="col" class="px-6 py-2 border border-slate-500 rounded-md capitalize">
                    {{ pac.opportunityFive }}
                </td>
              </thead>

              <thead v-if="pac.opportunitySix !==null">
                <th width="20%" class="px-6 py-2 border border-slate-500 rounded-md uppercase">
                  Opportunity Six
                </th> 
                <td scope="col" class="px-6 py-2 border border-slate-500 rounded-md capitalize">
                    {{ pac.opportunitySix }}
                </td>
              </thead>

              <thead v-if="pac.opportunitySeven !==null">
                <th width="20%" class="px-6 py-2 border border-slate-500 rounded-md uppercase">
                  Opportunity Seven
                </th> 
                <td scope="col" class="px-6 py-2 border border-slate-500 rounded-md capitalize">
                    {{ pac.opportunitySeven }}
                </td>
              </thead>

              <thead v-if="pac.opportunityEight !==null">
                <th width="20%" class="px-6 py-2 border border-slate-500 rounded-md uppercase">
                  Opportunity Eight
                </th> 
                <td scope="col" class="px-6 py-2 border border-slate-500 rounded-md capitalize">
                    {{ pac.opportunityEight }}
                </td>
              </thead>

              <thead v-if="pac.opportunityNine !==null">
                <th width="20%" class="px-6 py-2 border border-slate-500 rounded-md uppercase">
                  Opportunity Nine
                </th> 
                <td scope="col" class="px-6 py-2 border border-slate-500 rounded-md capitalize">
                    {{ pac.opportunityNine }}
                </td>
              </thead>

              <thead v-if="pac.opportunityTen !==null">
                <th width="20%" class="px-6 py-2 border border-slate-500 rounded-md uppercase">
                  Opportunity Ten
                </th> 
                <td scope="col" class="px-6 py-2 border border-slate-500 rounded-md capitalize">
                    {{ pac.opportunityTen }}
                </td>
              </thead>

                  </table>
             </div>

          </div>
      </section>

   </AuthenticatedLayout>
</template>