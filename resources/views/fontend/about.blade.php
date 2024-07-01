@extends('layout.app')

@section('content')
<main class="">
    @include('fontend.banner',[
        'title'=>'About Us',
        'image'=>'assets/img/contact1.png',
        ])
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

    <!-- faqs section start-->
    <section
      class="bg-gray-400 pb-10 faqs lg:flex lg:pb-0 lg:space-x-10 text-gray-700 px-10 pt-16"
    >
      <div class="w-1/1">
        <img src="assets/img/hero_2_1.png" alt="" />
      </div>
      <div class="w-full pt-10 lg:pt-0">
        <h1 class="text-3xl text-[#e12454] font-bold tracking-widest">
          FAQS
        </h1>
        <p class="pt-2 font-semibold">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo, quo?
        </p>

        @foreach ($faqs as $faq)
        <details
            class="bg-gray-300 text-lg font-semibold py-2 px-3 rounded-md mt-5 cursor-pointer"
            >
            <summary class="flex justify-between items-center">
            {{$faq->question}}
            </summary>
            <p class="pt-2 font-normal">
            {{$faq->answer}}
            </p>
        </details>
        @endforeach

      </div>
    </section>
    <!-- faqs section end-->

    <!-- Appointment section start-->
    <section class="bg-[#f1f5f9]">
        @if (session()->has('message'))
        <div class="pr-10 my-4 top-10 float-end font-semibold text-green-400 role="alert">
            {{ session()->get('message') }}
        </div>
        @endif
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
              <img class="h-[25.5rem] lg:mt-6" src="{{asset('assets/img/appmointment.png')}}" alt="" />
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
                  
                  <form action="{{route('appointment.create.process')}}" method="POST">
                    @csrf
                  <input
                    type="text" name="name"
                    id="website-admin"
                    class="rounded-none rounded-e-lg bg-transparent border-2 text-gray-900 w-[15.5rem] text-sm border-[#07ccec] p-2.5 outline-none"
                    placeholder="enter your name"
                  />
                </div>
                @error('name')
                <div class="text-red-500">{{$message}}</div>
                @enderror
  
                <div class="flex mt-5">
                  <span
                    class="inline-flex items-center px-3 text-sm bg-[#07ccec] border rounded-e-0 border-[#07ccec] border-e-0 rounded-s-md"
                  >
                  <i class="fa-solid fa-envelope text-[#c12454] text-lg"></i>
                  </span>
                  <input
                    type="email" name="email"
                    id="website-admin"
                    class="rounded-none rounded-e-lg bg-transparent border-2 text-gray-900 w-full text-sm border-[#07ccec] p-2.5 outline-none"
                    placeholder="enter your email"
                  />
                </div>
                @error('email')
                <div class="text-red-500">{{$message}}</div>
                @enderror
  
                <div class="flex mt-5">
                  <span
                    class="inline-flex items-center px-3 text-sm bg-[#07ccec] border rounded-e-0 border-[#07ccec] border-e-0 rounded-s-md"
                  >
                  <i class="fa-solid fa-phone-volume text-[#c12454] text-lg"></i>
                  </span>
                  <input
                    type="text" name="phone"
                    id="website-admin"
                    class="rounded-none rounded-e-lg bg-transparent border-2 text-gray-900 w-full text-sm border-[#07ccec] p-2.5 outline-none"
                    placeholder="enter your phone number"
                  />
                </div>
                @error('phone')
                <div class="text-red-500">{{$message}}</div>
                @enderror
  
                <div class="flex mt-5">
                  <span
                    class="inline-flex items-center px-3 text-sm bg-[#07ccec] border rounded-e-0 border-[#07ccec] border-e-0 rounded-s-md"
                  >
                  <i class="fa-solid fa-calendar-days text-[#e12454] text-lg"></i>
                  </span>
                  <input
                    type="date" name="date"
                    id="website-admin"
                    class="rounded-none rounded-e-lg bg-transparent border-2 text-gray-500 w-full text-sm border-[#07ccec] p-2.5 outline-none"
                    placeholder="enter your phone number"
                  />
                </div>
                @error('date')
                <div class="text-red-500">{{$message}}</div>
                @enderror
  
                <div class="flex mt-5">
                  <span
                    class="inline-flex items-center px-3 text-sm bg-[#07ccec] border rounded-e-0 border-[#07ccec] border-e-0 rounded-s-md"
                  >
                  <i class="fa-solid fa-clock text-[#e12454] text-lg"></i>
                  </span>
                  <input
                    type="time" name="time"
                    id="website-admin"
                    class="rounded-none rounded-e-lg bg-transparent border-2 text-gray-500 w-full text-sm border-[#07ccec] p-2.5 outline-none"
                    placeholder="enter your phone number"
                  />
                </div>
  
                @error('time')
                <div class="text-red-500">{{$message}}</div>
                @enderror
  
                <div class="pt-3">
                  <select name="department" class="w-full flex flex-row justify-between pl-5 py-2.5 text-gray-500 bg-transparent border-2 border-[#07ccec] rounded-md shadow outline-none text-sm">
                    <option value="Choice Department" selected>
                      Choice Department
                    </option>
                    @if($categories->count() > 0)
                      @foreach($categories as $categorie)
                        <option value="{{$categorie->department_name}}">{{$categorie->department_name}}</option>
                      @endForeach
                    @else
                    No Record Found
                    @endif   
                 </select>        
                </div>
                @error('department')
                <div class="text-red-500">{{$message}}</div>
                @enderror
                <div class="mt-5">
                  <button type="submit" class=" text-gray-800 bg-[#07ccec] hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-md px-5 py-2.5 text-center ">Submit</button>
                 
                </div>
              </form>
              </div>
            </div>
  
            <div class="lg:w-1/3">
              <div class="text-gray-600">
                <h1 class="font-semibold text-xl">Working Houres</h1>
               
                @foreach ($workingHoures as $workingHoure)
                  <div
                  class="flex justify-between mt-5 border-b-2 border-dotted pb-1"
                >
                  <span>{{$workingHoure->week_name}}</span>
                  <p class="pl-2">{{$workingHoure->time}}</p>
                </div>
                @endforeach
               
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Appointment section end-->
  </main>
@endsection