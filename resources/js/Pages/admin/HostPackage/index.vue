<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Link,Head, useForm} from '@inertiajs/vue3';
import TextInput from '@/Components/TextInput.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import InputError from '@/Components/InputError.vue';
import { ref,watch } from 'vue';
import {useToastr} from '../../../toastr.js';
import Pagination from '@/Components/Pagination.vue';
import { router } from '@inertiajs/vue3';
 

const toastr = useToastr();

const count = ref(9);






const fields = ref([
       'opportunityOne',
       'opportunityTwo',
       'opportunityThree',
       'opportunityFour',
       'opportunityFive',
       'opportunitySix',
       'opportunitySeven',
       'opportunityEight',
       'opportunityNine',
       'opportunityTen',
       'opportunityEleven',
       'opportunityTwelve',
])

const form =useForm({
      title : '',
      price : '',
      priority : '',
      icon_class : '',
      hostCategory_id : '',
      plan_id : '',
      duration_id : '',
      description : '',
      opportunityOne: fields.opportunityOne,
      opportunityTwo: fields.opportunityTwo,
      opportunityThree: fields.opportunityThree,
      opportunityFour: fields.opportunityFour,
      opportunityFive: fields.opportunityFive,
      opportunitySix: fields.opportunitySix,
      opportunitySeven: fields.opportunitySeven,
      opportunityEight: fields.opportunityEight,
      opportunityNine: fields.opportunityNine,
      opportunityTen: fields.opportunityTen,
      opportunityEleven: fields.opportunityEleven,
      opportunityTwelve: fields.opportunityTwelve,

})

const submit = ()=> {
    form.post(route("admin.HostPackage.store"),{
          onSuccess: ()=> cleanForm ()
    });
}

function cleanForm(){
    form.reset();
    toastr.success("Host Package Add Successfully");
}

function add(){
   if(this.count <= 11){
       this.count+=1;
   }
 
}

function remove(){
  if(this.count >= 1){
   this.count-=1;
  }
}

const props =defineProps({
       plans  : Object,
       hostCategory : Object,
       durations : Object,
       hostPackages : Object,
       filters: Object
})
  
const search = ref(props.filters.search);
const perPage = ref(props.filters.perPage);


watch(search, value => {
       router.get('/admin/HostPackage', {search: value, perPage: perPage.value},{
          preserveState : true,
          replace :true,
          preserveScroll: true
       });
})

function getPage(){
  router.get('/admin/HostPackage', {search: search.value, perPage: perPage.value},{
          preserveState : true,
          replace :true,
          preserveScroll: true
       });
}

</script>




<template>
    <AuthenticatedLayout>
     <section class="min-h-[95vh] bg-slate-50 p-2 rounded-2xl">
         <!--  -->
         <h4 class="text-3xl font-bold my-4  mx-8"> Host Package </h4>
         <form  @submit.prevent="submit">
         <div class="grid grid-cols-1 md:grid-cols-2 bg-gray-100 p-5 my-8 rounded-xl gap-6">
          <div>          
              <div   class="w-full mx-auto ">

                <div class="mt-4">
                  <InputLabel class="text-slate-900 font-bold" for="title" value="Title" />
                  <TextInput id="title" v-model="form.title"  type="text"  class="mt-1 block w-full" placeholder="Enter Package Title"/>
                  <InputError class="mt-2" :message="form.errors.title" />
              </div>


                  <div class="mt-4">
                      <InputLabel class="text-slate-900 font-bold" for="hostCategory" value="Hosting Category" />
                    <select id="hostCategory" v-model="form.hostCategory_id" class="w-full rounded-lg p-1 form-control">
                               <option value="" selected >Choose Host category</option>
                               <option v-for="category in props.hostCategory" :key="category" :value="category.id"> {{ category.name }} </option>
                    </select>
                     <InputError class="mt-2" :message="form.errors.hostCategory_id" />
                  </div>

             
                  <div class="mt-4">
                    <InputLabel class="text-slate-900 font-bold" for="plan" value="Plan" />
                  <select id="plan" v-model="form.plan_id" class="w-full rounded-lg p-1 form-control">
                             <option value="" selected >Choose Plan</option>
                             <option v-for="plan in props.plans" :key="plan" :value="plan.id"> {{ plan.name }} </option>
                        
                  </select>
                       <InputError class="mt-2" :message="form.errors.plan_id" />
                </div>

                <div class="mt-4">
                  <InputLabel class="text-slate-900 font-bold" for="duration" value="Duration" />
                <select id="duration" v-model="form.duration_id" class="w-full rounded-lg p-1 form-control">
                           <option value="" selected >Choose Duration </option>
                           <option v-for="duration in durations" :key="duration" :value="duration.id"> {{ duration.name }} </option>
                      
                </select>
                   <InputError class="mt-2" :message="form.errors.duration_id" />
              </div>


                  <div class="mt-4">
                      <InputLabel class="text-slate-900 font-bold" for="Price" value="Price" />
                      <TextInput id="Price" v-model="form.price" type="text"  class="mt-1 block w-full" placeholder="Enter Price"/>
                      <InputError class="mt-2" :message="form.errors.price" />
                  </div>
      
    
                  <div class="mt-4">
                    <InputLabel class="text-slate-900 font-bold" for="priority" value="Priority" />
                    <TextInput id="priority" v-model="form.priority"  type="text"  class="mt-1 block w-full" placeholder="Enter Priority"/>
                    <InputError class="mt-2" :message="form.errors.priority" />
                </div>
      
              
                <div class="mt-4">
                  <InputLabel class="text-slate-900 font-bold" for="icon_class" value="Icon Class" /> 
                  <TextInput id="icon_class" v-model="form.icon_class"  type="text"  class="mt-1 block w-full" placeholder="Enter Icon Class"/>
                  <InputError class="mt-2" :message="form.errors.icon_class" />
                  <small class="text-red-600 text-end"> *must be fontawesome 6 class</small>
              </div>
      
              <div class="mt-4">
                <InputLabel class="text-slate-900 font-bold" for="description" value="Description" /> 
                 <textarea id="description" v-model="form.description" rows="3" class="w-full rounded-xl mt-1 form-control"></textarea>
                <InputError class="mt-2" :message="form.errors.description" />
              
            </div>
                            
              </div>
          </div>

          <div>
              <!-- Dynamic Input start -->


        <div v-for="(fieldName, index) in fields.slice(0,count)" :key="index" class="mt-4">
            <InputLabel class="text-slate-900 font-bold" :for="fieldName" :value="fieldName" />
            <TextInput :id="fieldName" v-model="form[fieldName]" type="text"  class="mt-1 block w-full" :placeholder="'Enter ' +fieldName"/>
            <InputError class="mt-2" :message="form.errors.fieldName" />
               
        </div>
                  <!-- control filed -->
            <div class="flex justify-end my-5 gap-3">
                <span @click="add()" class="btn-add"><i class="fa-solid fa-plus text-lg"></i> </span>
                <span @click="remove()" class="btn-remove"><i class="fa-solid fa-minus text-lg"></i></span>
           </div>
           <!-- Dynamic end -->

           <div class="mt-4 text-center">             
            <PrimaryButton class="btn-indigo hover:bg-indigo-800 " :class="{ 'opacity-80': form.processing }" :disabled="form.processing">
               Submit
            </PrimaryButton>

        </div>
          </div>
         </div>
        </form>
 
       </section>

       <section class="bg-slate-100 p-3 min-h-[80vh]">
                      

                        <div class="w-full overflow-x-auto drop-shadow-xl rounded-xl ">
                          
                          <div class="flex justify-between my-1  gap-5  p-3">

                            <!-- Search Input And Pagination Input -->

                            <div class="relative text-gray-600 focus-within:text-gray-400">
                              <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                                  <i class="fa-solid fa-magnifying-glass py-2 px-3"></i>
                              </span>
                              <TextInput  type="search" v-model="search" name="q" class="py-2 px-8 text-sm text-gray-800 bg-blue-50 rounded-lg pl-10 focus:outline-none focus:bg-white focus:text-gray-900 " placeholder="Search..." autocomplete="off"/>
                            </div>

                             <select @change="getPage()"  v-model="perPage" class="mt-1 block w-24 px-3 py-1 rounded-lg" >
                                    <option value="5" > <b>Per 5</b> </option>
                                    <option value="10" > <b>Per 10</b> </option>
                                    <option value="20"> <b>Per 20</b> </option>
                                    <option value="50"> <b>Per 50</b> </option>
                                    <option value="100"> <b>Per 100</b> </option>
                             </select>
                          </div>

                            <table class="w-full" >
                              <thead >
                                <tr  class="text-sm font-semibold tracking-wide text-left text-gray-900 bg-gray-100 capitalize border-b border-gray-600">
                                  <th scope="col" class="px-4 py-2"> Id </th>
                                  <th scope="col" class="px-4 py-2"> Title </th>
                                  <th scope="col" class="px-4 py-2">Category </th>
                                  <!-- <th scope="col" class="px-6 py-2 border border-slate-500">Parent Category</th> -->
                                  <th scope="col" class="px-4 py-2">Price</th>
                                  <th scope="col" class="px-4 py-2">Plan</th>
                                  <th scope="col" class="px-4 py-2">Duration</th>
                                  <th scope="col" class="px-4 py-2">Action</th>
                                </tr>
                              </thead>
                              <tbody class="bg-white" v-if="props.hostPackages.data.length > 0">
                                <tr v-for="(pac, index) in props.hostPackages.data" :key="pac" class="text-gray-700">
                                  <td class="px-4 py-2 border"> {{index+1}}</td>
                                  <td class="px-4 py-2 border"> {{ pac.title }} </td>
                                  <td class="px-4 py-2 border"> {{ pac.category }} </td>
                                  <td class="px-4 py-2 border"> {{ pac.price }} </td>
                                  <td class="px-4 py-2 border"> {{ pac.plan }} </td>
                                  <td class="px-4 py-2 border"> {{ pac.duration }} </td>
                                  <td class="px-4 py-2 border ">
                                    <div class="flex justify-start items-center gap-3 lg:gap-1">
                                   <div>  <Link :href="route('admin.HostPackage.show',pac.slug)" class="btn-show"> <i class="fa-solid fa-eye"></i></Link></div>
                                   <div>  <Link :href="route('admin.HostPackage.edit',pac.slug)" class="btn-edit"> <i class="fa-solid fa-pen-to-square"></i></Link></div>
                                    <Link :href="route('admin.HostPackage.destroy',pac.slug)" onclick="return confirm('Are you sure you want to delete this item?');" as="button" type="button" method="delete" class="btn-delete"> <i class="fa-solid fa-trash"></i></Link>
                                    </div>
                                </td>
                                </tr>
                              </tbody>
                             
                            </table>
                           <Pagination :links="props.hostPackages.meta.links"/>
                       
                          </div>



       </section>
     </AuthenticatedLayout>
 </template>
 
 
