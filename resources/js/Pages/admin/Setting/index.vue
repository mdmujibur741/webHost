<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Link, useForm } from "@inertiajs/vue3";
import TextInput from "@/Components/TextInput.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputError from "@/Components/InputError.vue";
import { ref } from "vue";
import { useToastr } from "../../../toastr.js";
import { QuillEditor } from '@vueup/vue-quill'
import '@vueup/vue-quill/dist/vue-quill.snow.css';



const about =ref('');
const use_link = ref('')
const home_feature_description = ref('');
const home_package_description = ref('');
const home_premium_description = ref('');
const toastr = useToastr();


const form = useForm({
  mobile : "",
  email : "",
  address : "",
  powered : "",
  logo : "",
  favicon : "",
  about : about,
  facebook : "",
  twitter : "",
  instagram : "",
  home_feature_title  : "",
  home_feature_description : home_feature_description,
  home_package_title : "",
  home_package_description : home_package_description,
  home_premium_title : "",
  home_premium_description : home_premium_description,
  home_premium_image : "",
  footer_img_one : "",
  footer_img_two : "",
  footer_img_three : "",
  footer_img_four : "",
  use_link : use_link,
   


});

const submit = () => {
  form.post(route('admin.setting.store'),{
        onSuccess: ()=> cleanForm ()
  });
};

function cleanForm() {
  form.reset();
  toastr.success("Setting Add Successfully");
}

</script>

<template>
  
  <AuthenticatedLayout>

    <section class="min-h-[95vh] bg-slate-50 p-2 rounded-2xl">
      <!--  -->
      <h4 class="text-3xl font-bold my-4 mx-8 capitalize"><i class="fa-solid fa-gears text-3xl"></i> App Setting </h4>
      <form @submit.prevent="submit" class="bg-gray-100 my-6 p-5">
        <div
          class="grid grid-cols-1 md:grid-cols-2 rounded-xl gap-6"
        >
          <div>
            <div class="w-full mx-auto">
              <div class="mt-4">
                <InputLabel class="text-slate-900 font-bold" for="mobile" value="Mobile" />
                <TextInput v-model="form.mobile" class="form-control w-full"  id="mobile"  type="tel" placeholder="Enter Mobile No"
                />
                <InputError class="mt-2" :message="form.errors.mobile" />
              </div>

              <div class="mt-4">
                <InputLabel class="text-slate-900 font-bold" for="email" value="Email" />
                <TextInput id="email" v-model="form.email" type="email"  class="mt-1 block w-full" placeholder="Enter Email ....."/>
                <InputError class="mt-2" :message="form.errors.email" />
              </div>

              <div class="mt-4">
                <InputLabel class="text-slate-900 font-bold" for="address" value="Address" />
                      <textarea class="form-control w-full" v-model="form.address" id="address"  rows="2" placeholder="Enter Address ......"></textarea>
                <InputError class="mt-2" :message="form.errors.address" />
              </div>


              <div class="mt-4">
                <InputLabel class="text-slate-900 font-bold" for="powered" value="Powered By" />
                <TextInput id="powered" v-model="form.powered" type="text"  class="mt-1 block w-full" placeholder="Enter Powered By"/>
                <InputError class="mt-2" :message="form.errors.powered" />
              </div>

             

              <div class="mt-4">
                <InputLabel for="logo" class="font-bold" value="App Logo " />
                <input type="file" :v-model="form.logo"  @input="form.logo = $event.target.files[0]" class="form-file "/>
                <InputError :message="form.errors.logo" />
              </div>

              <div class="mt-4">
                <InputLabel for="favicon" class="font-bold" value="Favicon Logo " />
                <input type="file" :v-model="form.favicon"  @input="form.favicon = $event.target.files[0]" class="form-file "/>
                <InputError :message="form.errors.favicon" />
              </div>

              <div class="mt-4">
                <InputLabel class="text-slate-900 font-bold" for="home_feature_title" value="home Feature Title" />
                <TextInput v-model="form.home_feature_title" class="form-control w-full"  id="mobile"  type="tel" placeholder="Enter home feature title" />
                <InputError class="mt-2" :message="form.errors.home_feature_title" />
              </div>

              <div class="mt-4">
                <InputLabel for="home_feature_description" class="font-bold" value="home_feature_description " />
                  <QuillEditor v-model:content="home_feature_description" id="home_feature_description" contentType="html"  theme="snow"  />
                </div>

              <div class="mt-4">
                <InputLabel class="text-slate-900 font-bold" for="home_package_title" value="home_package_title" />
                <TextInput v-model="form.home_package_title" class="form-control w-full"  id="home_package_title"  type="tel" placeholder="Enter home_package_title"/>
                <InputError class="mt-2" :message="form.errors.home_package_title" />
              </div>

              <div class="mt-4">
                <InputLabel for="home_package_description" class="font-bold" value="home_package_description " />
                  <QuillEditor v-model:content="home_package_description" id="home_package_description" contentType="html"  theme="snow"  />
                </div>


              <div class="mt-4">
                <InputLabel for="about" class="font-bold" value="About " />
                <QuillEditor v-model:content="about" contentType="html" toolbar="full" theme="snow"  />
              </div>
                     
            </div>
          </div>

          <div>

            <div class="mt-4">
              <InputLabel class="text-slate-900 font-bold" for="facebook" value="Facebook Url" />
              <TextInput id="facebook" v-model="form.facebook" type="text"  class="mt-1 block w-full" placeholder="Enter Facebook url"/>
              <InputError class="mt-2" :message="form.errors.facebook" />
            </div>

            <div class="mt-4">
              <InputLabel class="text-slate-900 font-bold" for="twitter" value="Twitter Url" />
              <TextInput id="twitter" v-model="form.twitter" type="text"  class="mt-1 block w-full" placeholder="Enter Twitter url"/>
              <InputError class="mt-2" :message="form.errors.twitter" />
            </div>

            <div class="mt-4">
              <InputLabel class="text-slate-900 font-bold" for="instagram" value="Instagram Url" />
              <TextInput id="instagram" v-model="form.instagram" type="text"  class="mt-1 block w-full" placeholder="Enter Instagram url"/>
              <InputError class="mt-2" :message="form.errors.instagram" />
            </div>

             
            <div class="mt-4">
              <InputLabel class="text-slate-900 font-bold" for="home_premium_title" value="home_premium_title" />
              <TextInput v-model="form.home_premium_title" class="form-control w-full"  id="home_premium_title"  type="tel" placeholder="Enter home_package_title" />
              <InputError class="mt-2" :message="form.errors.home_package_title" />
            </div>

            <div class="mt-4">
              <InputLabel for="home_premium_description" class="font-bold" value="home_premium_description " />
                <QuillEditor v-model:content="home_premium_description" id="home_premium_description" contentType="html"  theme="snow" />
              </div>

            <div class="mt-4">
              <InputLabel for="home_premium_image" class="font-bold" value="home_premium_image " />
              <input type="file"  @input="form.home_premium_image = $event.target.files[0]" class="form-file "/>
              <InputError :message="form.errors.home_premium_image" />
            </div>

            <div class="mt-4">
                <InputLabel for="footer_img_one	" class="font-bold" value="Footer Image One	" />
                <input type="file"   @input="form.footer_img_one = $event.target.files[0]" class="form-file "/>
                <InputError :message="form.errors.footer_img_one" />
              </div>

              <div class="mt-4">
                <InputLabel for="footer_img_two" class="font-bold" value="Footer Image Two " />
                <input type="file"   @input="form.footer_img_two = $event.target.files[0]" class="form-file "/>
                <InputError :message="form.errors.footer_img_two" />
              </div>

              <div class="mt-4">
                <InputLabel for="footer_img_three" class="font-bold" value="Footer Image Three " />
                <input type="file"  @input="form.footer_img_three = $event.target.files[0]" class="form-file "/>
                <InputError :message="form.errors.footer_img_three" />
              </div>

              <div class="mt-4">
                <InputLabel for="footer_img_four" class="font-bold" value="Footer Image Four " />
                <input type="file" @input="form.footer_img_four = $event.target.files[0]" class="form-file "/>
                <InputError :message="form.errors.footer_img_four" />
              </div>
  
              <div class="mt-4">
                <InputLabel for="use_link" class="font-bold" value="UseFul Link " />
                  <QuillEditor v-model:content="use_link" id="use_link" toolbar="full" contentType="html"  theme="snow"  />
              </div>
  
              <div class="mt-4 text-center">
                <PrimaryButton class="btn-indigo hover:bg-indigo-800" :class="{ 'opacity-80': form.processing }"  :disabled="form.processing">
                 Submit
                </PrimaryButton>
              </div>
      
         
           



           
          </div>
        </div>
       

     
               
      
      </form>
    </section>
  </AuthenticatedLayout>
</template>
