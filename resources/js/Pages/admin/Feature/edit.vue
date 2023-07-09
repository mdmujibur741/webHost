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
import { QuillEditor } from '@vueup/vue-quill'
import '@vueup/vue-quill/dist/vue-quill.snow.css';

const description = ref(props.feature.description)
const toastr = useToastr();

const props = defineProps({
       feature : Object,
       hostCategory : Object
})

const form =useForm({
      title : props.feature?.title ,
      description : description ,
       image : null ,
      priority : props.feature?.priority ,
      hostCategory_id : props.feature?.hostCategory_id
    })

const submit = ()=> {
    router.post(`/admin/feature/${props.feature.slug}`,{
    _method: 'put',
    title : form.title ,
    description : form.description ,
    image : form.image ,
    priority : form.priority ,
    hostCategory_id : form.hostCategory_id
   },{
        onSuccess : ()=> cleanForm()
   })
}

function cleanForm(){
  
   toastr.success("Feature Update Successfully");
}









</script>



<template>
    <AuthenticatedLayout>
    <section class="bg-slate-50 min-h-[100vh] flex justify-center items-center">
       
   
            <!-- form -->
            <form @submit.prevent="submit"  class="lg:w-6/12 w-full p-6 drop-shadow-lg bg-gray-100 rounded-lg">
                                <h3 class="text-2xl font-bold capitalize p-1 mb-5 text-center">Feature Edit</h3>
                <div>
                    <InputLabel class="font-bold text-slate-900" for="name" value="Feature Title" />
                    <TextInput id="name" v-model="form.title" type="text" class="mt-1 block w-full"  placeholder="Enter Feature Title"/>
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
                                  <option :value="0" selected>All Category</option> <!-- 100# Menes all Category -->
                                  <option  v-for="category in hostCategory" :key="category" :value="category.id"> {{ category.slug }} </option>
                      </select>
                    <InputError :message="form.errors.hostCategory_id" />
                  </div>

                   <div class="mt-4">
                    <InputLabel for="image" class="font-bold" value="Image" />
                    <input type="file"   @input="form.image = $event.target.files[0]" class="form-file "/>
                    <InputError :message="form.errors.image" />
                  </div>
             
                   
                  

                <div class="mt-4 flex justify-between items-end">      
                    <img :src="props.feature.image" class="w-24 h-14" alt="category Logo">       
                    <PrimaryButton class="btn-indigo font-bold hover:bg-indigo-800" :class="{ 'opacity-80': form.processing }" :disabled="form.processing">
                        Update Feature
                    </PrimaryButton>
                  
                </div>
    
                          
            </form>
    
   
    </section>
</AuthenticatedLayout>
</template>