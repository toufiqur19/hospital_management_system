@extends('layout.app')

@section('content')
<main class="">
    @include('fontend.banner',[
        'title'=>'Doctors Details',
        'image'=>'https://www.swg.com/can/wp-content/uploads/sites/38/2019/04/Hospital-Case-Study-Banner-Daniel.png',
        ])

<section class="bg-gray-200">
    <div class="py-14 mx-10 lg:mx-16 md:mx-16">
      <div
        class="lg:flex md:flex gap-5 md:space-y-0 lg:space-y-0 space-y-5"
      >
        <div class="static lg:w-1/4 md:w-1/4">
          <!-- profile image -->
          <div
            class="text-center p-3 pt-3 bg-gray-100 shadow cursor-pointer hover:bg-[#07ccec] service rounded-md"
          >
            <a href="doctorDetails .html">
              <div class="relative">
                <img class="" src="./img/doc/doc-2.png" alt="" />
                <div
                  class="d-info absolute bottom-0 bg-[#07ccec] w-full h-auto pb-2 overflow-hidden"
                >
                  <h2 class="text-[1.3rem] text-[#000d44] pt-3">
                    Dr. John Doe
                  </h2>
                  <p class="">Medicine</p>
                  <div class="d-icon mb-[-2.5rem] duration-500">
                    <i
                      class="fa-brands fa-facebook text-[#1877F2] p-2 text-[1.3rem] cursor-pointer"
                    ></i>
                    <i
                      class="fa-brands fa-linkedin text-[#0077b5] p-2 text-[1.3rem] cursor-pointer"
                    ></i>
                    <i
                      class="fa-brands fa-x-twitter text-black p-2 text-[1.3rem] cursor-pointer"
                    ></i>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- profile details -->
          <div
            class="py-5 px-5 mt-5 bg-gray-100 shadow cursor-pointer rounded-md"
          >
            <h1 class="text-[#e12454] font-semibold text-xl">
              Personal Information
            </h1>
            <div class="pt-3 text-gray-800 space-y-1.5">
              <h2>
                <span class="pr-2"
                  ><i class="fa-solid fa-phone-volume"></i></span
                >01734743888
              </h2>
              <h2>
                <span class="pr-2"
                  ><i class="fa-solid fa-envelope"></i></span
                >info@gmail.com
              </h2>
              <h2>
                <span class="pr-2"
                  ><i class="fa-solid fa-location-dot"></i></span
                >doctors location
              </h2>
            </div>
          </div>
          <!-- Opening Hours -->
          <div class="text-black bg-[#07ccec] mt-5 rounded-md px-4 py-5">
            <h1 class="text-[#e12454] font-semibold text-xl">Schedules</h1>
            <div
              class="flex justify-between mt-5 border-b-2 border-dotted pb-1"
            >
              <span>Mon-Fri</span>
              <p class="pl-2">8:00 am - 8:00 pm</p>
            </div>
            <div
              class="flex justify-between mt-3 border-b-2 border-dotted pb-1"
            >
              <span>Saturday</span>
              <p class="pl-2">9:00 am - 6:00 pm</p>
            </div>
            <div
              class="flex justify-between mt-3 border-b-2 border-dotted pb-1"
            >
              <span>Sunday</span>
              <p class="pl-2">9:00 am - 4:00 pm</p>
            </div>
          </div>
          <!-- Schedule Appoinment-->
          <div class="text-black text-center bg-[#07ccec] mt-5 rounded-md px-4 py-8">
            <a
              class="px-6 py-3 bg-[#e12454] font-semibold text-white rounded-sm my-2"
              href="appointment .html"
              >Book Appointment</a
            >
          </div>
        </div>
        <!-- profile details -->
        <div
          class="lg:w-9/12 md:w-9/12 lg:h-auto bg-gray-100 shadow rounded-md pt-5 px-5"
        >
          <!-- Personal Information  -->
          <div>
            <h1 class="text-[#e12454] font-semibold text-xl blog">
              Introduction
            </h1>
            <p class="mx-10 text-justify my-5">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Molestias veniam mollitia ipsum ducimus aperiam alias
              perspiciatis? Deleniti hic assumenda alias ipsam quos, dolorem
              dignissimos aliquam? Obcaecati hic recusandae optio beatae
              harum cupiditate quia dolorem exercitationem necessitatibus
              voluptas, ducimus dicta sunt dolores quidem aspernatur
              perspiciatis maxime repellat natus, possimus iste quaerat!
              Fuga asperiores id animi debitis rerum, porro corporis dolorem
              sed explicabo accusamus magnam, numquam repudiandae itaque
              natus aliquid. Deserunt consectetur iste provident quas
              quibusdam animi ipsam perspiciatis praesentium, magnam vero.
            </p>
          </div>
          <!-- Specialties  -->
          <div class="">
            <h1 class="text-[#e12454] font-semibold text-xl blog">
              Specialties
            </h1>
            <div class="my-5 mx-10">
              <p class="text-justify">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus soluta corporis corrupti asperiores numquam minima dolores iure natus optio incidunt.
              </p>
              <h4 class="mt-2 font-semibold text-lg"><span class="bg-[#07ccec] px-1 py-[.1rem] rounded-full text-[#e12454] text-sm font-bold mr-1.5"><i class="fa-solid fa-check"></i></span>Medicine <span class="pl-2 text-[.75rem] text-gray-400">MBBS,BCS</span></h4>
              <h4 class="font-semibold text-lg"><span class="bg-[#07ccec] px-1 py-[.1rem] rounded-full text-[#e12454] text-sm font-bold mr-1.5"><i class="fa-solid fa-check"></i></span>Surgery<span class="pl-2 text-[.75rem] text-gray-400">MBBS,BCS</span></h4>
            </div>
          </div>
          <!-- education -->
          <div class="">
            <h1 class="text-[#e12454] font-semibold text-xl">
              Educational & Expreance Info
            </h1>
            <button
              id="eduBtn"
              class="mt-3 border border-[#e12454] px-3 py-1 rounded-md active"
            >
              Educational
            </button>
            <button
              id="expBtn"
              class="mt-3 border border-[#e12454] px-3 py-1 rounded-md ml-5"
            >
              Expreance
            </button>
            <!-- Timeline -->
            <div id="education" class="my-5 mx-10 pb-10 lg:pb-0">
              <!-- Item -->
              <div class="flex gap-x-3">
                <!-- Left Content -->
                <div class="w-[13.1rem] pt-[.2rem]">
                  <span class="text-md font-semibold">2007 - 2008</span>
                </div>
                <!-- Icon -->
                <div
                  class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-[.8rem] after:w-[3px] after:lg:h-[6.5rem] after:h-auto after:-translate-x-[0.5px] after:bg-[#07ccec]"
                >
                  <div
                    class="relative z-10 size-7 flex justify-center items-center"
                  >
                    <div class="size-3.5 rounded-full bg-[#07ccec]"></div>
                  </div>
                </div>
                <!-- Right Content -->
                <div class="grow pt-[] pb-3">
                  <h3 class="font-semibold text-lg">
                    Dhaka Madical College
                  </h3>
                  <p class="mt-1 text-sm text-gray-600">MBBS, M.D</p>
                  <p class="mt-1 text-md text-gray-600">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla facere corrupti obcaecati tempora reprehenderit eaque vero exercitationem nemo laboriosam necessitatibus.</p>
                </div>
              </div>
              <div class="flex gap-x-3">
                <!-- Left Content -->
                <div class="w-[13.1rem] pt-[.2rem]">
                  <span class="text-md font-semibold">2007 - 2008</span>
                </div>
                <!-- Icon -->
                <div
                  class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-[.8rem] after:w-[3px] after:lg:h-[6.5rem] after:h-auto after:-translate-x-[0.5px] after:bg-[#07ccec]"
                >
                  <div
                    class="relative z-10 size-7 flex justify-center items-center"
                  >
                    <div class="size-3.5 rounded-full bg-[#07ccec]"></div>
                  </div>
                </div>
                <!-- Right Content -->
                <div class="grow pt-[] pb-3">
                  <h3 class="font-semibold text-lg">
                    Dhaka Madical College
                  </h3>
                  <p class="mt-1 text-sm text-gray-600">MBBS, M.D</p>
                  <p class="mt-1 text-md text-gray-600">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla facere corrupti obcaecati tempora reprehenderit eaque vero exercitationem nemo laboriosam necessitatibus.</p>
                </div>
              </div>
            </div>
            <!-- End Timeline -->
            <!-- Timeline -->
            <div id="expremance" class="my-5 mx-10 hidden pb-10 lg:pb-0">
              <!-- Item -->
              <div class="flex gap-x-3">
                <!-- Left Content -->
                <div class="pt-[.2rem]">
                  <span class="text-md font-semibold">2007 - 2008</span>
                </div>
                <!-- Icon -->
                <div
                  class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-[.8rem] after:w-[3px] after:lg:h-[4rem] after:h-auto after:-translate-x-[0.5px] after:bg-[#07ccec]"
                >
                  <div
                    class="relative z-10 size-7 flex justify-center items-center"
                  >
                    <div class="size-3.5 rounded-full bg-[#07ccec]"></div>
                  </div>
                </div>
                <!-- Right Content -->
                <div class="grow pt-[] pb-5">
                  <h3 class="font-semibold text-lg">
                    Avicenna Hospital Limited, Sirajganj
                  </h3>
                  <p class="mt-1 text-md text-gray-600">Senior Prof.</p>
                  <p class="mt-1 text-sm text-gray-600">MBBS, M.D</p>
                </div>
              </div>
              <!-- Item -->
              <div class="flex gap-x-3">
                <!-- Left Content -->
                <div class="pt-[.2rem]">
                  <span class="text-md font-semibold">2007 - 2008</span>
                </div>
                <!-- Icon -->
                <div
                  class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-[.8rem] after:w-[3px] after:lg:h-[4rem] after:h-auto after:-translate-x-[0.5px] after:bg-[#07ccec]"
                >
                  <div
                    class="relative z-10 size-7 flex justify-center items-center"
                  >
                    <div class="size-3.5 rounded-full bg-[#07ccec]"></div>
                  </div>
                </div>
                <!-- Right Content -->
                <div class="grow pt-[] pb-5">
                  <h3 class="font-semibold text-lg">
                    Avicenna Hospital Limited, Sirajganj
                  </h3>
                  <p class="mt-1 text-md text-gray-600">Senior Prof.</p>
                  <p class="mt-1 text-sm text-gray-600">MBBS, M.D</p>
                </div>
              </div>
              <!-- Item -->
              <div class="flex gap-x-3">
                <!-- Left Content -->
                <div class="pt-[.2rem]">
                  <span class="text-md font-semibold">2007 - 2008</span>
                </div>
                <!-- Icon -->
                <div
                  class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-[.8rem] after:w-[3px] after:lg:h-[4rem] after:h-auto after:-translate-x-[0.5px] after:bg-[#07ccec]"
                >
                  <div
                    class="relative z-10 size-7 flex justify-center items-center"
                  >
                    <div class="size-3.5 rounded-full bg-[#07ccec]"></div>
                  </div>
                </div>
                <!-- Right Content -->
                <div class="grow pt-[] pb-5">
                  <h3 class="font-semibold text-lg">
                    Avicenna Hospital Limited, Sirajganj
                  </h3>
                  <p class="mt-1 text-md text-gray-600">Senior Prof.</p>
                  <p class="mt-1 text-sm text-gray-600">MBBS, M.D</p>
                </div>
              </div>
            </div>
            <!-- End Timeline -->
          </div>
        </div>
      </div>
    </div>
  </section>

   @include('fontend.footer_banner')
  </main>

  @section('script')
      <script>
        const eduBtn = document.getElementById("eduBtn");
      const expBtn = document.getElementById("expBtn");
      const education = document.getElementById("education");
      const expremance = document.getElementById("expremance");

      eduBtn.addEventListener("click", () => {
        education.classList.remove("hidden");
        eduBtn.classList.add("active");
        expBtn.classList.remove("active");
        expremance.classList.add("hidden");
      });
      expBtn.addEventListener("click", () => {
        expremance.classList.remove("hidden");
        expBtn.classList.add("active");
        eduBtn.classList.remove("active");
        education.classList.add("hidden");
      });
      </script>
  @endsection
@endsection