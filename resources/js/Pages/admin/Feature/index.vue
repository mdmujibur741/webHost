<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Link,Head, useForm } from '@inertiajs/vue3';
import TextInput from '@/Components/TextInput.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import InputError from '@/Components/InputError.vue';
import Pagination from "@/Components/Pagination.vue";
import {useToastr} from '../../../toastr.js'
import { QuillEditor } from '@vueup/vue-quill'
import '@vueup/vue-quill/dist/vue-quill.snow.css';
import { ref } from 'vue';
import { router } from '@inertiajs/vue3';

const toastr = useToastr();
const description = ref('')

defineProps({
 features : Object,
 hostCategory : Object
})

const form =useForm({
     title : '',
     priority : '',
     description :description,
     image : '',
     hostCategory_id : ''
})

const submit = ()=> {
   form.post(route("admin.feature.store"),{
         onSuccess: ()=> cleanForm ()
   });
}

function cleanForm(){
   form.reset();
   toastr.success("Feature Add Successfully");
}



</script>


<template>
  <AuthenticatedLayout>
   <section class="min-h-[95vh] bg-slate-50 drop-shadow-2xl p-5 rounded-2xl">
       <!--  -->
       <h4 class="text-2xl font-bold my-4 mx-8"> Feature  </h4>
     <div class="grid grid-cols-1 lg:grid-cols-5 items-start justify-start gap-4">
       
           <div class="lg:col-span-2">
   
                 <!-- form -->
                 <form @submit.prevent="submit"  class="w-full mx-auto bg-gray-100 p-8 mt-8 rounded-xl ">
                  
                     <div>
                         <InputLabel class="font-bold text-slate-900" for="name" value="Feature Title" />
                         <TextInput id="name" v-model="form.title" type="text" class="form-control"  placeholder="Enter Feature Title"/>
                         <InputError class="mt-2" :message="form.errors.title" />
                     </div>         
         
                  

                     <div class="mt-4">
                      <InputLabel class="font-bold text-slate-900" for="priority" value="Priority" />
                      <TextInput id="priority" v-model="form.priority" type="text"  class="mt-1 block w-full" placeholder="Enter Priority"/>
                      <InputError class="mt-2" :message="form.errors.priority" />
                  </div>

                     <div class="mt-4">
                      <InputLabel class="font-bold text-slate-900" for="description" value="Description" />
                      <QuillEditor v-model:content="description" id="description" contentType="html"  theme="snow"  />
                      <InputError class="mt-2" :message="form.errors.description" />
                       
                  </div>

                  <div class="mt-4">
                    <InputLabel for="hostCategory" class="font-bold" value="Host Category" />
                      <select  id="hostCategory" v-model="form.hostCategory_id" class="form-control"> 
                                  <option value="0" selected>All Category</option> <!-- 0 Menes all Category -->
                                  <option  v-for="category in hostCategory" :key="category" :value="category.id"> {{ category.slug }} </option>
                      </select>
                    <InputError :message="form.errors.image" />
                  </div>

      
                     <div class="mt-4">
                      <InputLabel for="image" class="font-bold" value="Image" />
                      <input type="file"   @input="form.image = $event.target.files[0]" class="form-file "/>
                      <InputError :message="form.errors.image" />
                    </div>

                  
         
         
                     <div class="mt-4 text-center">             
                         <PrimaryButton class="btn-indigo font-bold hover:bg-indigo-800" :class="{ 'opacity-80': form.processing }" :disabled="form.processing">
                             Add Feature
                         </PrimaryButton>
         
                     </div>
         
                               
                 </form>
         
           </div>
           <div class="lg:col-span-3">
               <div class="w-full overflow-x-auto drop-shadow-xl rounded-xl">
                   <table class="w-full text-sm text-left text-gray-900 dark:text-gray-400 bg-slate-200" >
                     <thead >
                       <tr class="text-sm font-semibold tracking-wide text-left text-gray-900 bg-gray-100 capitalize border-b border-gray-600">
                         <th scope="col" class="px-4 py-2"> Id </th>
                         <th scope="col" class="px-4 py-2">Feature </th>
                         <th scope="col" class="px-4 py-2">Image</th>
                         <th scope="col" class="px-4 py-2">Description</th>                      
                         <th scope="col" class="px-4 py-2">Priority</th>
                         <th scope="col" class="px-4 py-2">Category</th>
                         <th scope="col" class="px-4 py-2">Author</th>
                         <th scope="col" class="px-4 py-2">Action</th>
                       </tr>
                     </thead>
                     <tbody v-if="features.data.length > 0" class="bg-white">
                       <tr v-for="(feature, index) in features.data" :key="feature.index" class="dark:bg-gray-800 dark:border-gray-700">
                         <td class="px-4 py-2 border"> {{index+1}}</td>
                         <td class="px-4 py-2 border capitalize"> {{ feature.title }} </td>
                         <td class="px-4 py-2 border capitalize"> 
                            <img :src="feature.image" alt="image" class="w-10 h-8">
                        </td>
                         <td class="px-4 py-2 border"> <span v-html="feature.description.slice(0,15)"></span> </td>
                         <td class="px-4 py-2 border"> {{ feature.priority }} </td>
                         <td class="px-4 py-2 border"> {{ feature.category }} </td>
                         <td class="px-4 py-2 border"> 
                                       {{ feature.user }}
                         </td>
                         <td class="px-4 py-2 border ">
                             <div class="flex justify-start items-center gap-4">
                            <div>  <Link :href="route('admin.feature.edit',feature.slug)" class="btn-edit"> <i class="fa-solid fa-pen-to-square"></i></Link></div>
                             <Link :href="route('admin.feature.destroy',feature.id)" onclick="return confirm('Are you sure you want to delete this item?');" as="button" type="button" method="delete" class="btn-delete"> <i class="fa-solid fa-trash"></i></Link>
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
               <Pagination :links="features.meta.links"/>  
           </div>
     </div>

     </section>
   </AuthenticatedLayout>
</template>


