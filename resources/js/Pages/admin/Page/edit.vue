<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Link,Head, useForm } from '@inertiajs/vue3';
import TextInput from '@/Components/TextInput.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import InputError from '@/Components/InputError.vue';
import Pagination from "@/Components/Pagination.vue";
import {useToastr} from '../../../toastr.js';
import { QuillEditor } from '@vueup/vue-quill';
import '@vueup/vue-quill/dist/vue-quill.snow.css';
import { ref } from 'vue';
import { router } from '@inertiajs/vue3';

const content = ref(props.page.content);
const toastr = useToastr();

const props = defineProps({
       page : Object
})

const form = useForm({
        title: props.page?.title,
        meta_tag : props.page?.meta_tag,
        priority : props.page?.priority,
        meta_description : props.page?.meta_description,
        content : content,
})

const submit = ()=>{
    form.put(route("admin.page.update", props.page.slug),{
          onSuccess: ()=> cleanForm ()
    });
}
function cleanForm(){
    toastr.success("Page Data Update Successfully!");
}
</script>


<template>
    <AuthenticatedLayout>
         <section class="min-h-[90vh] bg-blue-50 flex justify-center items-center m-1 p-2 rounded-md">
            <form @submit.prevent="submit"  class="w-full lg:w-8/12  bg-blue-50 m-3 p-4 rounded-xl shadow-md">
                
                <h3 class="text-2xl font-extrabold text-blue-900 mb-5 mt-1 text-center">Edit Page  </h3>

                <div class="mt-2">
                    <InputLabel class="font-bold text-slate-900" for="title" value="Title" />
                    <TextInput id="name" v-model="form.title" type="text" class="form-control"  placeholder="Enter Title"/>
                    <InputError class="mt-2" :message="form.errors.title" />
                </div>   
              <div class="grid lg:grid-cols-2 gap-4">
                    
                <div class="mt-3">
                    <InputLabel class="font-bold text-slate-900" for="priority" value="Page Priority" />
                    <TextInput id="meta_tag" v-model="form.priority" type="text"  class="mt-1 block w-full" placeholder="Enter Priority"/>
                    <InputError class="mt-2" :message="form.errors.priority" />
                </div>

             <div class="mt-3">
                <InputLabel class="font-bold text-slate-900" for="meta_tag" value="Page Meta Tag" />
                <TextInput id="meta_tag" v-model="form.meta_tag" type="text"  class="mt-1 block w-full" placeholder="Enter Meta Tag"/>
                <InputError class="mt-2" :message="form.errors.meta_tag" />
            </div>

         

              </div>
              <div class="mt-4">
                <InputLabel class="font-bold text-slate-900" for="meta_description" value="Page Meta Description" />
                 <textarea id="meta_description" v-model="form.meta_description" class="form-control" rows="2" placeholder="Enter Meta Description"></textarea>
                <InputError class="mt-2" :message="form.errors.meta_description" />
            </div>
                <div class="mt-4">
                 <InputLabel class="font-bold text-slate-900" for="content" value="Page Content" />
                 <QuillEditor v-model:content="content" id="content" contentType="html"  toolbar="full" />
                 <InputError class="mt-2" :message="form.errors.content" />
             </div>
 
               
    
                <div class="mt-4 text-center">             
                    <PrimaryButton class="btn-indigo font-bold hover:bg-indigo-800" :class="{ 'opacity-80': form.processing }" :disabled="form.processing">
                        Update Page
                    </PrimaryButton>
    
                </div>
    
                          
            </form>
         </section>
    </AuthenticatedLayout>
</template>