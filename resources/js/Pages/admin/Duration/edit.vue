<template>
   <AuthenticatedLayout>
    <section class="min-h-[95vh] bg-indigo-100 drop-shadow-2xl p-5 rounded-2xl">
        <!--  -->
        <div class="flex m-1 p-2 justify-end">
         
          <Link :href="route('admin.duration.index')" class="btn-indigo">Duration Table</Link>
        </div>
  

        <!-- form -->
        <form @submit.prevent="submit"  class="w-10/12 lg:w-5/12 mx-auto bg-gray-100 p-8 my-8 rounded-xl">
            <h4 class="text-3xl font-bold m-1 text-center"> Duration Edit </h4>
            <div>
                <InputLabel for="name" value="Name" />
                <TextInput id="name" v-model="form.name" type="text" class="mt-1 block w-full" autofocus autocomplete="name" placeholder="Enter Plan Name"/>
                <InputError class="mt-2" :message="form.errors.name" />
            </div>

         

     

            <div class="mt-4 text-center">             
                <PrimaryButton class="btn-indigo hover:bg-indigo-800" :class="{ 'opacity-80': form.processing }" :disabled="form.processing">
                  Update
                </PrimaryButton>

            </div>

            
        </form>


      </section>
    </AuthenticatedLayout>
</template>


<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Link,Head, useForm } from '@inertiajs/vue3';
import TextInput from '@/Components/TextInput.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import InputError from '@/Components/InputError.vue';
import {useToastr} from '../../../toastr.js'


const toastr = useToastr();

const props = defineProps({
    duration : Object
})

const form =useForm(props.duration)

const submit = ()=> {
    form.put(route("admin.duration.update",props.duration.slug),{
          onSuccess: ()=> cleanForm()
    });
}

function cleanForm(){
    form.reset();
    toastr.success("Duration Update Successfully");
}



</script>