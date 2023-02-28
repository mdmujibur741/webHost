<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Link,Head, useForm } from '@inertiajs/vue3';
import TextInput from '@/Components/TextInput.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import InputError from '@/Components/InputError.vue';
import { ref } from 'vue';
import {useToastr} from '../../../toastr.js'


const toastr = useToastr();

const count = ref(12);

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

const form =useForm(props.hostPackage)

const submit = ()=> {
    form.put(route("admin.HostPackage.update",props.hostPackage.slug),{
          onSuccess: ()=> cleanForm ()
    });
}

function cleanForm(){
    form.reset();
    toastr.success("Host Package Update Successfully");
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

const props = defineProps({
       plans  : Object,
       hostCategory : Object,
       durations : Object,
       hostPackage : Object
})


</script>

<template>
        <AuthenticatedLayout>
            <section class="min-h-[95vh] bg-slate-50 p-2 rounded-2xl">
                <!--  -->
                <h4 class="text-3xl font-bold my-4  mx-8"> Host Package Edit</h4>
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
                                      <option v-for="category in hostCategory" :key="category" :value="category.id"> {{ category.name }} </option>
                           </select>
                            <InputError class="mt-2" :message="form.errors.hostCategory_id" />
                         </div>
       
                    
                         <div class="mt-4">
                           <InputLabel class="text-slate-900 font-bold" for="plan" value="Plan" />
                         <select id="plan" v-model="form.plan_id" class="w-full rounded-lg p-1 form-control">
                                    <option value="" selected >Choose Plan</option>
                                    <option v-for="plan in plans" :key="plan" :value="plan.id"> {{ plan.name }} </option>
                               
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
                    Update
                   </PrimaryButton>
       
               </div>
                 </div>
                </div>
               </form>
        
              </section>
       
        </AuthenticatedLayout>
</template>