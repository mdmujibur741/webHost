<script setup>
             import { Link } from '@inertiajs/vue3';
            import Pagination from '@/Components/Pagination.vue';
            import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';


             const props = defineProps({
                  hostPackageTrash : Object
             })
</script>

<template>
 <AuthenticatedLayout>
    <section class="bg-slate-100 p-3 min-h-[80vh] rounded-lg">
                      
           <h2 class="text-3xl font-bold text-center text-blue-600 mt-3 mb-14">Hosting Package Trash List</h2>
        <div class="w-full overflow-x-auto drop-shadow-xl rounded-xl ">
          

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
              <tbody class="bg-white" v-if="props.hostPackageTrash.data.length > 0">
                <tr v-for="(pac, index) in props.hostPackageTrash.data" :key="pac" class="text-gray-700">
                  <td class="px-4 py-2 border"> {{index+1}}</td>
                  <td class="px-4 py-2 border"> {{ pac.title }} </td>
                  <td class="px-4 py-2 border"> {{ pac.category }} </td>
                  <td class="px-4 py-2 border"> {{ pac.price }} </td>
                  <td class="px-4 py-2 border"> {{ pac.plan }} </td>
                  <td class="px-4 py-2 border"> {{ pac.duration }} </td>
                  <td class="px-4 py-2 border ">
                    <div class="flex justify-start items-center gap-3 lg:gap-1">
                   <div>  <Link :href="route('admin.trash.restore',pac.slug)" class="btn-show"> <i class="fa-solid fa-rotate-left"></i></Link></div>
                    <Link :href="route('admin.trash.delete',pac.slug)" onclick="return confirm('Are you sure you want to Permanent delete this item?');" as="button" type="button" method="delete" class="btn-delete"> <i class="fa-solid fa-trash"></i></Link>
                    </div>
                </td>
                </tr>
              </tbody>
             
            </table>
           <Pagination :links="props.hostPackageTrash.meta.links"/>
       
          </div>



</section>
</AuthenticatedLayout>
</template>