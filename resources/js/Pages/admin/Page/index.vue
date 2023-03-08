<script setup>
     import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
     import { Link } from '@inertiajs/vue3';
     import TextInput from '@/Components/TextInput.vue';
     import { ref,watch } from 'vue';
     import {useToastr} from '../../../toastr.js';
     import Pagination from '@/Components/Pagination.vue';
     import { router } from '@inertiajs/vue3'


    

     const toastr = useToastr();
    const props = defineProps({
           pages : Object,
           filters: Object
    })

    function status($id){
          router.get(route('admin.page.status',$id))
    }

</script>

<template>
    <AuthenticatedLayout>
<section class="min-h-[95vh] bg-slate-50 p-2 rounded-2xl">

    <div class="m-1 flex justify-between items-center gap-3">
         <h2 class="text-2xl font-extrabold m-1 p-2 text-indigo-600"> ALL PAGE </h2>
           <div>
              <Link :href="route('admin.page.create')" class="btn rounded-lg"> Page Create </Link>
           </div>
    </div>


    <div class="w-full overflow-x-auto drop-shadow-xl rounded-xl p-2">
                          
        <div class="flex justify-between my-1  gap-5 ">
          <div class="relative text-gray-600 focus-within:text-gray-400">
            <span class="absolute inset-y-0 left-0 flex items-center pl-2">
              <button type="submit" class="p-1 focus:outline-none focus:shadow-outline">
                <i class="fa-solid fa-magnifying-glass py-2 px-3"></i>
              </button>
            </span>
            <TextInput  type="search" name="q" class="py-2 px-8 text-sm text-gray-800 bg-blue-50 rounded-lg pl-10 focus:outline-none focus:bg-white focus:text-gray-900 " placeholder="Search..." autocomplete="off"/>
          </div>


      
           <select v-model="perPage" class="mt-1 block w-24 px-3 py-1 rounded-lg bg-blue-50" >
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
                <th scope="col" class="px-4 py-2">Meta Tag </th>
                <th scope="col" class="px-4 py-2">Priority</th>
                <th scope="col" class="px-4 py-2"> Status </th>
                <th scope="col" class="px-4 py-2">Action</th>
              </tr>
            </thead>
            <tbody class="bg-white" >
              <tr v-for="(page, index) in props.pages.data" :key="page.index" class="text-gray-700">
                <td class="px-4 py-2 border"> {{ index+1 }} </td>
                <td class="px-4 py-2 border"> {{ page.title }} </td>
                <td class="px-4 py-2 border"> {{ page.meta_tag }}  </td>
                <td class="px-4 py-2 border">  {{ page.priority }}  </td>
                <td class="px-4 py-2 border">  
                  <div @click="status(page.id)">
                    <input v-if="page.status == 1"  class="switch" type="checkbox" checked  role="switch" id="index+1"   />
                    <input v-else  class="switch" type="checkbox" role="switch" id="index+1"   />  
                  </div> 
                </td>
                <td class="px-4 py-2 border ">
                  <div class="flex justify-start items-center gap-3 lg:gap-1">
                 <div>  <Link :href="route('admin.page.show',page.slug)" class="btn-show"> <i class="fa-solid fa-eye"></i></Link></div>
                 <div>  <Link :href="route('admin.page.edit',page.slug)" class="btn-edit"> <i class="fa-solid fa-pen-to-square"></i></Link></div>
                  <Link :href="route('admin.page.destroy',page.slug)" onclick="return confirm('Are you sure you want to delete this item?');" as="button" type="button" method="delete" class="btn-delete"> <i class="fa-solid fa-trash"></i></Link>
                  </div>
              </td>
              </tr>
            </tbody>
           
          </table>
         <Pagination :links="props.pages.meta.links"/>
     
        </div>
</section>
</AuthenticatedLayout>
</template>