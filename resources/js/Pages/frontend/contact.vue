<script setup>
     import FrontendLayout from '@/Layouts/FrontendLayout.vue';
     import TextInput from '@/Components/TextInput.vue';
     import InputLabel from '@/Components/InputLabel.vue';
     import InputError from '@/Components/InputError.vue';
     import PrimaryButton from '@/Components/PrimaryButton.vue';
     import { useForm } from '@inertiajs/vue3';
     import { useToastr } from '../../toastr.js';

     const toastr = useToastr();

     const form = useForm({
          name : '',
          email : '',
          phone : '',
          message : '',
     })

     const submit = ()=>{
    form.post(route("web.contact.store"),{
          onSuccess: ()=> cleanForm ()
    });
}
function cleanForm(){
    form.reset();
    toastr.success("Thank You For Message!");
}
</script>

 <template>
        <FrontendLayout>

           <section class=" min-h-[90vh] bg-indigo-100 p-5 lg:p-20 ">
           
        
    <div class="grid lg:grid-cols-2 gap-x-3 lg:justify-between justify-center ">

    
        <!-- Google Map Location -->
         <div class="map overflow-hidden py-5 ">
          <div class="mapouter lg:w-9/12">
            <div class="gmap_canvas">
              <iframe
                width="550"
                height="450"
                id="gmap_canvas"
                src="https://maps.google.com/maps?q=moulvibazar&t=k&z=9&ie=UTF8&iwloc=&output=embed"
                frameborder="0"
                scrolling="no"
                marginheight="0"
                marginwidth="0"
                class="rounded-2xl border-4 border-gray-300"
              ></iframe
              >
              <!-- <a href="https://2piratebay.org">pirate bay</a><br />
              <a href="https://www.embedgooglemap.net">embed map on website</a> -->
            </div>
          </div>
        </div> 
  
        <!-- Contact  -->
         <div class="py-5  ">
          <div class="relative">

         
          <div class="absolute top-0 -left-4 w-96 h-96 bg-purple-400 rounded-full mix-blend-multiply filter blur-2xl"> </div>
          <div class="absolute top-0 -right-4 w-96 h-96 bg-yellow-400 rounded-full mix-blend-multiply filter blur-2xl"> </div>
          <div class="absolute top-0 -bottom-8 -right-10 w-72 h-72 bg-pink-400 rounded-full mix-blend-multiply filter blur-2xl"> </div>
    
          <div class="bg-violet-50 p-5  rounded-2xl opacity-70 lg:w-9/12 mx-auto">
            <h2 class="font-bold text-3xl text-center my-6">CONTACT US</h2>
  
            <form @submit.prevent="submit">
              <div class="mb-3">
                <InputLabel for="name" value="NAME" />
                <TextInput v-model="form.name" id="name" placeholder="Enter Your Name" />
                <InputError :message="form.errors.name" />
              </div>
  
              <div class="mb-3">
                <InputLabel for="email" value="Email" />
                <TextInput v-model="form.email" id="email" placeholder="Enter Your Email" />
                <InputError :message="form.errors.email" />
              </div>
  
              <div class="mb-3">
                <InputLabel for="phone" value="Phone" />
                <TextInput v-model="form.phone" id="phone" placeholder="Enter Your Phone" />
                <InputError :message="form.errors.phone" />
              </div>
  
              <div class="mb-3">
                <InputLabel for="message" value="Message" />
                <textarea
                  id=""
                  v-model="form.message"
                  rows="3"
                  class="form-control"
                  placeholder="Enter Your Message"
                ></textarea>
                <InputError :message="form.errors.message" />
              </div>
  
              <div class="text-center">
                <PrimaryButton
                  class="bg-blue-700 opacity-95 text-white px-6 py-3 rounded-xl hover:bg-blue-900"
                  :class="{ 'opacity-30': processing }"
                  :disabled="processing"
                >
                  <b> SEND</b>
                </PrimaryButton>
              </div>
            </form>
          </div>
        </div> 
      </div>
      </div>
  
           </section>
 
        </FrontendLayout> 
</template>

