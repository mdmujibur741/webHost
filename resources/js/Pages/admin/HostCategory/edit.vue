<script setup>


import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Link,Head, useForm } from '@inertiajs/vue3';
import TextInput from '@/Components/TextInput.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import InputError from '@/Components/InputError.vue';
import { ref } from 'vue';
import Pagination from "@/Components/Pagination.vue";
import {useToastr} from '../../../toastr.js'
import { router } from '@inertiajs/vue3';



const toastr = useToastr();

const props = defineProps({
 hostCategory : Object,
 allHostCategory: Object
})

const form =useForm({
     name : props.hostCategory?.name ,
      description : props.hostCategory?.description ,
       image : null ,
      parent_id : props.hostCategory?.parent_id ,
      priority : props.hostCategory?.priority ,
    
    })

const submit = ()=> {
    router.post(`/admin/HostCategory/${props.hostCategory.slug}`,{
    _method: 'put',
    name : form.name ,
    description : form.description ,
    image : form.image ,
    parent_id : form.parent_id ,
    priority : form.priority ,
   })
}

function cleanForm(){
  
   toastr.success("Category Update Successfully");
}









</script>



<template>
    <AuthenticatedLayout>
    <section class="bg-slate-50 min-h-[100vh] flex justify-center items-center">
       
   
            <!-- form -->
            <form @submit.prevent="submit"  class="lg:w-6/12 w-full p-6 drop-shadow-lg bg-gray-100 rounded-lg">
                                <h3 class="text-2xl font-bold capitalize p-1 mb-5 text-center">Category Host Edit</h3>
                <div>
                    <InputLabel class="font-bold text-slate-900" for="name" value="Category Name" />
                    <TextInput id="name" v-model="form.name" type="text" class="mt-1 block w-full"  placeholder="Enter Category Name"/>
                    <InputError class="mt-2" :message="form.errors.name" />
                </div>         
    
                <div class="mt-4">
                    <InputLabel class="font-bold text-slate-900" for="parent" value="Parent Category" />
                  <select id="parent" v-model="form.parent_id" class="w-full rounded-lg p-1 text-slate-900">
                            
                             <option v-for="cat in allHostCategory" :key="cat" :value="cat.id" >{{ cat.name }} </option>
                             
                  </select>
                       
                  <InputError class="mt-2" :message="form.errors.parent" />
                </div>
 
                <div class="mt-4">
                    <InputLabel class="font-bold text-slate-900" for="priority" value="Priority" />
                    <TextInput id="priority" v-model="form.priority" type="text"  class="mt-1 block w-full" placeholder="Enter Priority"/>
                    <InputError class="mt-2" :message="form.errors.priority" />
                </div>
    
                <div class="mt-4">
                    <InputLabel class="font-bold text-slate-900" for="description" value="Description" />
                    <textarea v-model="form.description" id="description" class="form-control" rows="2" placeholder="Enter Description"></textarea>
                    <InputError class="mt-2" :message="form.errors.description" />
                </div>
    
                 

                   <div class="mt-4">
                    <InputLabel for="image" class="font-bold" value="Image" />
                    <input type="file"   @input="form.image = $event.target.files[0]" class="form-file "/>
                    <InputError :message="form.errors.image" />
                  </div>
             
                   
                  

                <div class="mt-4 flex justify-between items-end">      
                    <img :src="'/storage/'+ props.hostCategory.image" class="w-24 h-14" alt="category Logo">       
                    <PrimaryButton class="btn-indigo font-bold hover:bg-indigo-800" :class="{ 'opacity-80': form.processing }" :disabled="form.processing">
                        Update Category
                    </PrimaryButton>
                  
                </div>
    
                          
            </form>
    
   
    </section>
</AuthenticatedLayout>
</template>