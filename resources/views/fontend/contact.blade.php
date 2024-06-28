@extends('layout.app')

@section('content')
<main class="">
    <!-- about banner section start-->
    <section>
      <img
        class="w-full lg:h-[17.5rem] h-[16rem]"
        src="./img/contact1.png"
        alt=""
      />
      <div
        class="space-y-4 text-xl overlay3 w-[100%] h-[12.5rem] lg:h-[34.5vh] text-white text-center justify-center lg:pt-20 pt-12"
      >
        <h1 class="text-gray-50 font-semibold text-4xl tracking-widest">
          Contact
        </h1>
        <div class="flex text-center justify-center space-x-2">
          <h1>Home</h1>
          <p>/</p>
          <h1 class="text-[#07ccec]">Contact</h1>
        </div>
      </div>
    </section>
    <!-- about banner section end-->

    <!-- Appointment section start-->
    <section class="bg-[#f1f5f9]">
        @if (session()->has('message'))
        <div class="pr-10 my-4 float-end font-semibold text-green-500 role="alert">
            {{ session()->get('message') }}
        </div>
        @endif
      <div class="py-10 lg:px-40 px-10">
        <h2
          class="footer_title tracking-wide text-center text-[#e12454] pt-3 font-bold text-2xl"
        >
          Contact Us
        </h2>
        <h4 class="text-center pb-10 pt-5 text-xl">
          Choose Our Hospital Choose The Best Care For Yourself
        </h4>
        <div
          class="lg:flex lg:space-x-10 lg:space-y-0 space-y-8 cursor-pointer"
        >
          <!-- contact info -->
          <div class="lg:w-1/3 bg-[#07ccec] rounded-md py-10">
            <h1 class="text-center text-gray-700 font-bold text-2xl tracking-wider">Contact Info</h1>
            <div class="mt-4 mx-10">
              <div class="text-center">
                <i class="fa-solid fa-phone-volume text-xl text-[#e12454]"></i>
                <p class="text-gray-700">0175323762</p>
              </div>
              <div class="text-center mt-3">
                <i class="fa-solid fa-envelope text-xl text-[#e12454]"></i>
                <p class="text-gray-700">info@gmail.com</p>
              </div>
              <div class="text-center mt-3">
                <i class="fa-solid fa-location-dot text-xl text-[#e12454]"></i>
                <p class="text-gray-700">sirajgonj, sadar</p>
              </div>
              <div class="space-x-2 mt-5 text-center">
                <a href=""><i
                  class="fa-brands fa-facebook bg-gray-700 text-[#07ccec] p-1.5 rounded-md text-[1.1rem] hover:text-gray-700 hover:bg-transparent duration-300 border-2 border-gray-700 cursor-pointer"
                ></i></a>
                <a href=""><i
                  class="fa-brands fa-linkedin bg-gray-700 text-[#07ccec] p-1.5 rounded-md text-[1.1rem] hover:text-gray-700 hover:bg-transparent duration-300 border-2 border-gray-700 cursor-pointer"
                ></i></a>
                <a href=""><i
                  class="fa-brands fa-x-twitter bg-gray-700 text-[#07ccec] p-1.5 rounded-md text-[1.1rem] hover:text-gray-700 hover:bg-transparent duration-300 border-2 border-gray-700 cursor-pointer"
                ></i></a>
              </div>
            </div>
          </div>          
          <!-- appointment -->
          <div class="lg:w-1/2">
            <h1 class="font-semibold text-xl text-gray-600">
              Book An Appointment
            </h1>
            <div class="text-black">

                <form action="{{route('contact.store')}}" method="POST">
                    @csrf
              <div class="flex mt-5">
                <span
                  class="inline-flex items-center px-3 text-sm bg-[#07ccec] border rounded-e-0 border-[#07ccec] border-e-0 rounded-s-md"
                >
                <i class="fa-solid fa-user text-[#e12454] text-lg"></i>
                </span>
                <input
                  type="text" name="name"
                  id="website-admin"
                  class="rounded-none rounded-e-lg bg-transparent border-2 text-gray-900 w-full text-sm border-[#07ccec] p-2.5 outline-none"
                  placeholder="your name"
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
                  placeholder="your email"
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
                  placeholder="your phone number"
                />
              </div>
              @error('phone')
              <div class="text-red-500">{{$message}}</div>
              @enderror
              <div class="flex mt-5">
                <textarea name="message" id="message" class="rounded-lg bg-transparent border-2 text-gray-900 w-full text-sm border-[#07ccec] p-2.5 outline-none" placeholder="enter your message">{{old('department')}}</textarea>
              </div>

              @error('message')
              <div class="text-red-500">{{$message}}</div>
              @enderror
              <div class="mt-5">
                <button type="submit" class=" text-gray-800 bg-[#07ccec] hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-md px-5 py-2.5 text-center ">Submit</button>             
              </div>

            </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Appointment section end-->

    <div>
      <iframe class="w-full" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14527.341267688464!2d89.7035361!3d24.4564983!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fdea7442bffdd7%3A0x22024fb81061e39d!2sAvicenna%20Hospital!5e0!3m2!1sen!2sbd!4v1714022656599!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </main>
@endsection