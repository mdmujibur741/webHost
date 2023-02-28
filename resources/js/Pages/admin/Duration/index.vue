
<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Link,useForm } from "@inertiajs/vue3";
 import Pagination from "@/Components/Pagination.vue";
import TextInput from '@/Components/TextInput.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import InputError from '@/Components/InputError.vue';
import {useToastr} from '../../../toastr.js'


const toastr = useToastr();


const form =useForm({
      name : '',
      priority : ''
})

const submit = ()=> {
    form.post(route("admin.duration.store"),{
          onSuccess: ()=> cleanForm ()
       
       
    });
}

function cleanForm(){
  
    form.reset();
    toastr.success("Duration Add Successfully");
}


defineProps({
      durations : Object
})
</script>



<template>
  <AuthenticatedLayout>
    <section class="min-h-[95vh] bg-slate-50 drop-shadow-2xl p-5 rounded-lg">
      <!--  -->
      <h4 class="text-3xl font-bold m-1 py-4"> Duration  </h4>

  <div class="grid grid-cols-1 lg:grid-cols-5 gap-4">
         <div class="lg:col-span-2">
              <!-- form -->
        <form @submit.prevent="submit"  class="w-full mx-auto bg-gray-100 p-4 rounded-xl">
         
          <div>
              <InputLabel for="name" value="Name" />
              <TextInput id="name" v-model="form.name" type="text" class="mt-1 block w-full" autofocus autocomplete="name" placeholder="Enter Plan Name"/>
              <InputError class="mt-2" :message="form.errors.name" />
          </div>

       

   

          <div class="mt-4 text-center">             
              <PrimaryButton class="btn-indigo hover:bg-indigo-800" :class="{ 'opacity-80': form.processing }" :disabled="form.processing">
                 Submit
              </PrimaryButton>

          </div>

          
      </form>
         </div>
         <div class="lg:col-span-3">
              <!--Plan table  -->
      <div class="relative overflow-x-auto bg-slate-50 p-3 drop-shadow-md rounded-lg m-2">
        <table
          class="w-full text-sm text-left text-slate-900 dark:text-gray-400 bg-slate-200"
        >
          <thead
            class="text-xs text-gray-700 uppercase dark:bg-gray-700 dark:text-gray-400"
          >
            <tr>
              <th scope="col" class="px-3 py-2 border border-slate-500"> ID </th>
              <th scope="col" class="px-3 py-2 border border-slate-500">Name</th>
              <th scope="col" class="px-3 py-2 border border-slate-500">Slug</th>
             
              <th scope="col" class="px-3 py-2 border border-slate-500">Action</th>
            </tr>
          </thead>
          <tbody v-if="durations.data.length > 0">
            <tr v-for="(duration, index) in durations.data" :key="duration.index" class="dark:bg-gray-800 dark:border-gray-700">
              <td class="px-3 py-2 border border-slate-500"> {{index+1}}</td>
              <td class="px-3 py-2 border border-slate-500 capitalize"> {{ duration.name }} </td>
              <td class="px-3 py-2 border border-slate-500 capitalize"> {{ duration.slug }} </td>
 
              <td class="px-3 py-2 border border-slate-500 ">
                 <div class="flex justify-start items-center gap-4">
                    <div>  <Link :href="route('admin.duration.edit',duration.slug)" class="btn-edit "> <i class="fa-solid fa-pen-to-square"></i></Link></div>
                  
                  <div>  <Link :href="route('admin.duration.destroy',duration.slug)" onclick="return confirm('Are you sure you want to delete this item?');"  as="button" type="button" method="delete" class="btn-delete"> <i class="fa-solid fa-trash"></i> </Link></div>
                 </div>
              </td>
            </tr>
          </tbody>
            <tbody v-else>
                <tr>
                    <td class="px-6 py-4  text-center">
                       <h3 class="text-lg font-bold">No data Found</h3>
                    </td>
                </tr>
            </tbody>
        </table>
      </div>
      <!-- pagination -->
      <Pagination :links="durations.meta.links"/>  
         </div>
  </div>  


    </section>
  </AuthenticatedLayout>
</template>
