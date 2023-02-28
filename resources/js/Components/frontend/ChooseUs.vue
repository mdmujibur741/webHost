<template>
  <section class="bg-indigo-100 min-h-[100vh]">
    <div class="lg:w-10/12 w-full mx-auto p-3">
      <h3 class="text-4xl font-extrabold text-black py-3 m-1">Why Choose Us?</h3>
      <p class="text-md py-3 m-1">
        Running a business can be challenging, so to help we offer <br />
        a FREE website builder§ with FREE stock images and FREE email with every domain
        name.
      </p>

      <div
        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 my-6 justify-center bg-slate-100 p-4 drop-shadow-2xl"
      >
        <button @click="ActiveTabOne()" class="w-full text-lg font-bold">
          <i class="fa-solid fa-layer-group"></i> Support
        </button>
        <button @click="ActiveTabTwo()" class="w-full text-lg font-bold">
          <i class="fa-solid fa-layer-group"></i> SSl Certificate
        </button>
        <button @click="ActiveTabOne()" class="w-full text-lg font-bold">
          <i class="fa-solid fa-layer-group"></i> Support
        </button>
        <button @click="ActiveTabOne()" class="w-full text-lg font-bold">
          <i class="fa-solid fa-layer-group"></i> Support
        </button>
      </div>
    </div>

    <!-- =========================== -->
    <!-- fast tab -->
    <div v-if="tab === 1" class="bg-gray-100 p-3 min-h-[80vh] items-center">
      <div
        class="grid grid-cols-1 lg:grid-cols-2 lg:w-10/12 gap-4 w-full min-h-[80vh] mx-auto items-center"
      >
        <div>
          <h2 class="text-4xl font-extrabold m-1 py-3">Ultra fast cloud hosting</h2>
          <p class="text-lg font-normal m-1 py-2">
            Benefits of the Cloud + Simplicity of Shared Hosting
          </p>
          <div class="flex bg-slate-50 drop-shadow-2xl gap-x-3 p-4 mt-8">
            <div>
              <p class="m-1 p-1">
                <i class="fa-regular fa-circle text-sm pr-2"></i> Intel 3.25GHz Xeon
                Processor
              </p>
              <p class="m-1 p-1">
                <i class="fa-regular fa-circle text-sm pr-2"></i> 64GB RAM
              </p>
              <p class="m-1 p-1">
                <i class="fa-regular fa-circle text-sm pr-2"></i> 24x7x365 Support
              </p>
              <p class="m-1 p-1">
                <i class="fa-regular fa-circle text-sm pr-2"></i> 250GB SSD RAID 1 OS
                Drive
              </p>
              <p class="m-1 p-1">
                <i class="fa-regular fa-circle text-sm pr-2"></i> 6TB Cached Customer
                Drive
              </p>
              <p class="m-1 p-1">
                <i class="fa-regular fa-circle text-sm pr-2"></i>Apache 2.2x
              </p>
              <p class="m-1 p-1">
                <i class="fa-regular fa-circle text-sm pr-2"></i>PHP 5.3x, 5.4x, 7.x,
                Perl, Python
              </p>
            </div>

            <div>
              <p class="m-1 p-1">
                <i class="fa-regular fa-circle text-sm pr-2"></i> MySQL 5
              </p>
              <p class="m-1 p-1">
                <i class="fa-regular fa-circle text-sm pr-2"></i> Ruby On Rails
              </p>
              <p class="m-1 p-1">
                <i class="fa-regular fa-circle text-sm pr-2"></i>Anti Spam & Virus
                Protection
              </p>
              <p class="m-1 p-1">
                <i class="fa-regular fa-circle text-sm pr-2"></i> Secure FTP Access
              </p>
              <p class="m-1 p-1">
                <i class="fa-regular fa-circle text-sm pr-2"></i> Hotlink & Leech
                Protection
              </p>
              <p class="m-1 p-1">
                <i class="fa-regular fa-circle text-sm pr-2"></i> phpMyAdmin Access
              </p>
              <p class="m-1 p-1">
                <i class="fa-regular fa-circle text-sm pr-2"></i> Intel 3.25GHz Xeon
                Processor
              </p>
            </div>
          </div>
        </div>

        <div>
          <div class="grid grid-cols-1 md:grid-cols-2">
            <div>
              <!-- fast Box -->
              <div class="w-64 h-48 bg-red-400 text-center py-5 text-white mb-3">
                <p class="text-center py-2">
                  <i class="fa-solid fa-recycle text-xl"></i>
                </p>
                <h2 class="text-xl font-bold m-1">Reliable Power</h2>
                <hr class="w-4/12 mx-auto border border-gray-100" />
                <p class="py-1 my-1">Designed for Uninterrupted Operations</p>
              </div>

              <!-- 2nd box -->
              <div class="w-64 h-48 bg-yellow-400 text-center py-5 text-white mb-3">
                <p class="text-center py-2">
                  <i class="fa-solid fa-recycle text-xl"></i>
                </p>
                <h2 class="text-xl font-bold m-1">Reliable Power</h2>
                <hr class="w-4/12 mx-auto border border-gray-100" />
                <p class="py-1 my-1">Designed for Uninterrupted Operations</p>
              </div>
            </div>

            <div>
              <div class="flex h-full items-center">
                <div class="w-64 h-48 bg-purple-400 text-center py-5 text-white mb-3">
                  <p class="text-center py-2">
                    <i class="fa-solid fa-recycle text-xl"></i>
                  </p>
                  <h2 class="text-xl font-bold m-1">Reliable Power</h2>
                  <hr class="w-4/12 mx-auto border border-gray-100" />
                  <p class="py-1 my-1">Designed for Uninterrupted Operations</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div></div>
      </div>
    </div>

    <!-- ===================== -->
    <!-- 2nd tab -->

    <div v-if="tab === 2" class="bg-[#EAEFF2] p-3 min-h-[80vh] items-center">
      <div
        class="lg:w-10/12 w-full min-h-[75vh] mx-auto grid grid-cols-1 lg:grid-cols-4 items-center"
      >
        <div class="p-2">
          <img src="../../../../public/demo/csm-icon.png" alt="" />
        </div>

        <div class="p-2 lg:col-span-3">
          <h2 class="text-4xl font-bold py-2 m-1">
            install popular applications in seconds
          </h2>

          <p class="text-md font-normal py-2 m-1 leading-7 text-gray-500">
            Choose from over 70 free one-click installs including popular bolgging and
            content management systems like WordPress, joomla!, and Drupal, e-commerce
            solutions such as osCommerce, OpenCart and PrestaShop; and a huge variety of
            other popular software titles including phpBB, Open Web Analytics, and Moodle.
            All these and more are available as standard with our Home Pro and Business
            Pro packages.
          </p>

          <a href="" class="text-lg underline text-blue-600 font-semibold"
            >See our One Click apps</a
          >
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref } from "vue";

const tab = ref(1);

function ActiveTabOne() {
  this.tab = 1;
}
function ActiveTabTwo() {
  this.tab = 2;
}
</script>
