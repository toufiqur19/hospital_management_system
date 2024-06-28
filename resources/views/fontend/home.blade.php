@extends('layout.app')

@section('content')
@if (session()->has('message'))
<div class="pr-10 my-4 float-end font-semibold text-green-500 role="alert">
    {{ session()->get('message') }}
</div>
@endif
<main class="bg-[#cbd5e1]">
    <!-- carousel slider  start-->
    <section class="hero_slider">
        <div class="slideshow-container">
            @foreach ($carousels as $carousel)
            <div class="mySlides fade">
                <img
                  class="w-[100%] lg:h-[58.5vh] h-[42vh]"
                  src="{{asset('/uploads/carousel/'.$carousel->image)}}"
                  alt=""
                />
              </div>
            @endforeach
        </div>

        <div style="text-align: center" class="hidden">
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
        </div>

        <div
          class="overlay2 w-[100%] lg:h-[58.6vh] h-[36vh] text-white text-center lg:pt-28 pt-16"
        >
        @foreach ($carouselsData as $carouselsData)
        <h1>{{$carouselsData->title}}</h1>
        <h1 class="text-3xl">
          {{$carouselsData->sort_description}}
        </h1>
        @endforeach
          <div class="flex space-x-5 justify-center mt-5">
            <a
              class="px-6 py-2 min-w-[120px] text-center text-black bg-[#07ccec] border-2 border-[#07ccec] rounded active:text-violet-500 hover:bg-transparent hover:text-[#07ccec] focus:outline-none focus:ring duration-500"
              href="doctor.html"
            >
              Find Doctors
            </a>

            <a
              class="px-6 py-2 min-w-[120px] text-center text-white border-2 border-[#07ccec] rounded hover:bg-[#07ccec] hover:text-black active:bg-indigo-500 focus:outline-none focus:ring duration-500"
              href="appointment .html"
            >
              Make an Appoinment
            </a>
          </div>
        </div>
      </section>
    <!-- carousel slider  end-->

    <!-- about us section start-->
    <section class="py-10 px-10 bg-gray-100">
      @foreach ($abouts as $about)
      <h2
      class="footer_title text-center text-[#e12454] pt-3 font-bold text-2xl"
    >
      {{$about->heading}}
    </h2>
    <h4 class="text-center pb-10 pt-5 text-xl">
      {{$about->title}}
    </h4>
    <div class="lg:flex lg:gap-10">
      <div class="lg:w-[50%]">
        <img src="{{asset('about/'.$about->image)}}" alt="" />
      </div>
      <div class="lg:w-[50%]">
        <div class="mt-5">
          <p class="text-justify">
            {{$about->description}}
          </p>

          <div class="mt-5 space-y-2">
            <div class="flex gap-3">
              <i
                class="fa-solid fa-envelope text-xl text-white bg-[#07ccec] hover:bg-[#4a6ab3] duration-300 cursor-pointer rounded-full p-2 w-10 h-10 justify-center flex"
              ></i>
              <p class="text-[1.2rem]">{{$about->email}}</p>
            </div>
            <div class="flex gap-3">
              <i
                class="fa-solid fa-phone text-xl text-white bg-[#07ccec] hover:bg-[#4a6ab3] duration-300 cursor-pointer rounded-full p-2 w-10 h-10 justify-center flex"
              ></i>
              <p class="text-[1.2rem]">{{$about->mobile}}</p>
            </div>
            <div class="flex gap-3">
              <i
                class="fa-solid fa-truck-medical text-xl text-white bg-[#07ccec] hover:bg-[#4a6ab3] duration-300 cursor-pointer rounded-full p-2 w-10 h-10 justify-center flex"
              ></i>
              <p class="text-[1.2rem]">{{$about->service_time}}</p>
            </div>
          </div>
          <a href="about.html">
            <button
            class="mt-5 bg-[#07ccec] py-2 px-4 rounded-md hover:bg-[#e12454] hover:text-white duration-300"
          >
            More About Us
          </button>
          </a>
        </div>
      </div>
    </div>
      @endforeach
    </section>
    <!-- about us section end-->

    <!-- work process section start-->
    <section class="mt-10 lg:px-32 px-20">
      <h2 class="footer_title text-center text-[#e12454] font-bold text-2xl">
        Work Process
      </h2>
      <h4 class="text-center pb-10 pt-5 text-xl">
        Let`s See How We Work Process
      </h4>

      <div class="lg:flex lg:space-x-10 space-x-0 space-y-10 lg:space-y-0">
        @foreach ($workProcess as $workProces)
        <div class="text-center work_p">
          <div class="relative">
            <img
              class="rounded-full ring-4 ring-green-400 w-img duration-500"
              src="{{asset('work/'.$workProces->image)}}"
              alt=""
            />
            <h3
              class="absolute top-0 right-0 bg-[#07ccec] py-[1rem] px-[1.3rem] rounded-full text-white font-bold"
            >
              {{$workProces->number}}
            </h3>
          </div>
          <div>
            <h2 class="text-[1.3rem] pb-2 text-[#000d44] pt-3">
              {{$workProces->sort_description}}
            </h2>
            <p class="text-justify">
             {{$workProces->description}}
            </p>
          </div>
        </div>
        @endforeach

      </div>
    </section>
    <!-- work process section end-->

    <!-- doctors section start-->
    <section class="mt-10 lg:px-20 px-10 bg-[#f1f5f9] py-14">
      <h2 class="footer_title text-center text-[#e12454] font-bold text-2xl">
        Expert Doctors
      </h2>
      <h4 class="text-center pb-10 pt-5 text-xl">
        Meet Our Professional Doctors
      </h4>

      <div class="lg:flex lg:space-x-4 space-y-5 lg:space-y-0">
       
        @foreach ($doctors as $doctor)
        <div class="text-center lg:w-1/4 lg:h-[18.55rem] p-4 pt-5 bg-[#cbd5e1] cursor-pointer hover:bg-[#07ccec] service rounded-md">
          <a href="doctorDetails .html">
            <div class="relative">
              <img
                class=""
                src="{{ asset('doctor/'.$doctor->image)}}"
                alt=""
              />
              <div
                class="d-info absolute bottom-0 bg-[#07ccec] w-full h-auto pb-3 overflow-hidden"
              >
                <h2 class="text-[1.3rem] text-[#000d44] pt-3">{{ $doctor->name }}</h2>
                <p class="">{{ $doctor->expart }}</p>
                <div class="d-icon mb-[-2.6rem] duration-500">
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
        @endforeach

      </div>
      <a class="float-right mt-4 hover:text-[#07ccec] duration-300" href="doctor.html"
        >Explor All Doctors >></a
      >
    </section>
    <!-- doctors section end-->

    <!-- services section start-->
    <section class="lg:px-20 px-10 py-14">
      <h2 class="footer_title text-center text-[#e12454] font-bold text-2xl">
        Our Services
      </h2>
      <h4 class="text-center pb-10 pt-5 text-xl">
        Our Specialties Technical Service
      </h4>

      <div class="lg:flex lg:space-x-1.5 space-y-5 lg:space-y-0">
        @foreach ($services as $service)
        <a href="departmentDetails .html"><div class="lg:w-1/4 text-center px-5 py-7 bg-[#f1f5f9] cursor-pointer hover:bg-[#07ccec] duration-300 service rounded-md">
          <div class="relative">
            <i
              class="{{$service->icon}} s-icon duration-500 text-white text-5xl bg-[#07ccec] px-4 py-5 rounded-full"
            ></i>
          </div>
          <div>
            <h2 class="text-[1.3rem] pb-2 text-[#000d44] pt-3">{{$service->departments}}</h2>
            <p class="text-justify">
              {{$service->description}}
            </p>
            <div class="mt-4">
              <a
                class="read px-6 py-2 min-w-[120px] text-center bg-[#07ccec] rounded text-white hover:bg-[#f1f5f9] hover:text-black duration-500"
                href="/download"
                >Read More</a
              >
            </div>
          </div>
        </div></a>
        @endforeach
      </div>
      <a class="float-right mt-4 hover:text-[#07ccec] duration-300" href="departments.html"
        >Explor All Services >></a
      >
    </section>
    <!-- services section end-->

    <!-- testimonial slider  start-->
    <section class="bg-[#f1f5f9] py-10">
      <div class="swiper mySwiper overflow-hidden lg:mx-[5rem] my-10">
        <h2
          class="footer_title text-center text-[#e12454] font-bold text-2xl"
        >
          Testimonials
        </h2>
        <h4 class="text-center pb-10 pt-5 text-xl">
          What Our Customers Says?
        </h4>
        <div class="swiper-wrapper">
          
          @foreach ($testimonials as $testimonial)
          <div class="swiper-slide">
            <div class="lg:w-[90%] mx-5 py-5 t-deltels hover:bg-[#07ccec] duration-300 cursor-pointer bg-[#cbd5e1] rounded-md space-y-4 mt-5">
              <p class="mx-10 text-justify">
                <i class="fa-solid fa-quote-left"></i>
                {{$testimonial->comment}}
              </p>

              <div class="flex mx-10 mt-9 lg:mt-0 space-x-4">
                <div>
                  <img
                    class="w-20 h-20 rounded-[50%]"
                    src="{{asset('uploads/testimonial/'.$testimonial->image)}}"
                    alt=""
                  />
                </div>
                <div>
                  <h1>{{$testimonial->name}}</h1>
                  <h1>{{$testimonial->expart}}</h1>
                  <div class="">
                      @php
                        $retingPer = $testimonial->star/5*100
                      @endphp

                      <div class="star-ratings">
                        <div class="fill-ratings text-[#fec624]" style="width: {{$retingPer}}%;">
                          <span>★★★★★</span>
                        </div>
                        <div class="empty-ratings block">
                          <span>★★★★★</span>
                        </div>
                      </div>
                      
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </section>
    <!-- testimonial slider  end-->

    <!-- blog section start-->
    <section class="py-14">
      <h2 class="footer_title text-center text-[#e12454] font-bold text-2xl">
        Our Blog
      </h2>
      <h4 class="text-center pb-10 pt-5 text-xl">Our Latest News & Blogs</h4>

      <div class="lg:flex lg:space-x-5 space-y-5 lg:space-y-0 lg:mx-20 mx-5">
        
        @foreach ($blogs as $blog)
        <a href="blogDetails.html"><div
          class="bg-[#07ccec] lg:w-1/3 news overflow-hidden cursor-pointer rounded-md"
        >
          <div class="news_banner duration-300">
            <img src="{{asset('uploads/blog/'.$blog->image)}}" alt="" />
          </div>
          <div class="relative p-5">
            <div class="flex justify-between">
              <h1>{{$blog->name}}</h1>
              <p>{{$blog->date}}</p>
            </div>
            <h3>
              {{$blog->description}}
            </h3>
            <div class="mt-5">
              <a
                class="read px-6 py-2 min-w-[120px] text-center bg-[#f1f5f9] rounded text-[#07ccec] border-2 border-[#f1f5f9] hover:bg-transparent hover:text-black duration-500"
                href="/download"
                >Read More</a
              >
            </div>
          </div>
        </div></a>
        @endforeach

      </div>
      <a
        class="float-right mx-20 mt-4 hover:text-[#07ccec] duration-300"
        href="blog.html"
        >Explor All Blogs >></a
      >
    </section>
    <!-- blog section end-->

    <!-- Appointment section start-->
    <section class="bg-[#f1f5f9]">
      <div class="py-10 lg:px-20 px-10">
        <h2
          class="footer_title tracking-wide text-center text-[#e12454] pt-3 font-bold text-2xl"
        >
          Appointment
        </h2>
        <h4 class="text-center pb-10 pt-5 text-xl">
          Choose Our Hospital Choose The Best Care For Yourself
        </h4>
        <div
          class="lg:flex lg:space-x-10 lg:space-y-0 space-y-8 cursor-pointer"
        >
          <div class="lg:w-1/2 lg:mt-10 bg-[#07ccec] rounded-md">
            <img class="h-[25.5rem]" src="{{asset('assets/img/appmointment.png')}}" alt="" />
          </div>
          <div class="lg:w-1/2">
            <h1 class="font-semibold text-xl text-gray-600">
              Book An Appointment
            </h1>
            <div class="text-black">
              <div class="flex mt-5">
                <span
                  class="inline-flex items-center px-3 text-sm bg-[#07ccec] border rounded-e-0 border-[#07ccec] border-e-0 rounded-s-md"
                >
                <i class="fa-solid fa-user text-[#e12454] text-lg"></i>
                </span>
                <input
                  type="text"
                  id="website-admin"
                  class="rounded-none rounded-e-lg bg-transparent border-2 text-gray-900 w-full text-sm border-[#07ccec] p-2.5 outline-none"
                  placeholder="your name"
                />
              </div>

              <div class="flex mt-5">
                <span
                  class="inline-flex items-center px-3 text-sm bg-[#07ccec] border rounded-e-0 border-[#07ccec] border-e-0 rounded-s-md"
                >
                <i class="fa-solid fa-envelope text-[#c12454] text-lg"></i>
                </span>
                <input
                  type="email"
                  id="website-admin"
                  class="rounded-none rounded-e-lg bg-transparent border-2 text-gray-900 w-full text-sm border-[#07ccec] p-2.5 outline-none"
                  placeholder="your email"
                />
              </div>

              <div class="flex mt-5">
                <span
                  class="inline-flex items-center px-3 text-sm bg-[#07ccec] border rounded-e-0 border-[#07ccec] border-e-0 rounded-s-md"
                >
                <i class="fa-solid fa-phone-volume text-[#c12454] text-lg"></i>
                </span>
                <input
                  type="text"
                  id="website-admin"
                  class="rounded-none rounded-e-lg bg-transparent border-2 text-gray-900 w-full text-sm border-[#07ccec] p-2.5 outline-none"
                  placeholder="your phone number"
                />
              </div>

              <div class="flex mt-5">
                <span
                  class="inline-flex items-center px-3 text-sm bg-[#07ccec] border rounded-e-0 border-[#07ccec] border-e-0 rounded-s-md"
                >
                <i class="fa-solid fa-calendar-days text-[#e12454] text-lg"></i>
                </span>
                <input
                  type="date"
                  id="website-admin"
                  class="rounded-none rounded-e-lg bg-transparent border-2 text-gray-500 w-full text-sm border-[#07ccec] p-2.5 outline-none"
                  placeholder="your phone number"
                />
              </div>

              <div class="flex mt-5">
                <span
                  class="inline-flex items-center px-3 text-sm bg-[#07ccec] border rounded-e-0 border-[#07ccec] border-e-0 rounded-s-md"
                >
                <i class="fa-solid fa-clock text-[#e12454] text-lg"></i>
                </span>
                <input
                  type="time"
                  id="website-admin"
                  class="rounded-none rounded-e-lg bg-transparent border-2 text-gray-500 w-full text-sm border-[#07ccec] p-2.5 outline-none"
                  placeholder="your phone number"
                />
              </div>

              <div class="pt-3">
                <select
                  class="w-full flex flex-row justify-between pl-5 py-2.5 text-gray-500 bg-transparent border-2 border-[#07ccec] rounded-md shadow outline-none text-sm"
                >
                  <option value="Choice Department" selected>
                    Choice Department
                  </option>
                  <option value="">sobuj1</option>
                  <option value="">sobuj2</option>
                  <option value="">sobuj3</option>
                  <option value="">sobuj4</option>
                </select>
              </div>

              <div class="mt-5">
                <a
                  class="px-6 py-2 min-w-[120px] text-center text-gray-600 border-2 border-[#07ccec] rounded hover:bg-[#07ccec] hover:text-black active:bg-indigo-500 focus:outline-none focus:ring duration-500"
                  href="/download"
                >
                Get In Touch!
                </a>
              </div>
            </div>
          </div>
          <div class="lg:w-1/3">
            <div class="text-gray-600">
              <h1 class="font-semibold text-xl">Working Houres</h1>
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
          </div>
        </div>
      </div>
    </section>
    <!-- Appointment section end-->

    <div class="f-banner">
      <div class="overlay-b text-center lg:pt-[6%] pt-[10%]">
        <h4 class="text-xl">Need a Doctor for Check-up?</h4>
        <h1 class="text-3xl text-bold text-[#e12454]">
          Just Make An Appointment
        </h1>
        <div class="mt-5">
          <a
            class="px-6 py-2 min-w-[120px] text-center text-black border-2 border-[#f1f5f9] rounded hover:bg-[#f1f5f9] hover:text-black active:bg-indigo-500 focus:outline-none focus:ring duration-500"
            href="appointment .html"
          >
            Make an Appoinment
          </a>
        </div>
      </div>
    </div>
  </main>
@endsection
