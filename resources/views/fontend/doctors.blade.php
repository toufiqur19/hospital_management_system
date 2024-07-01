@extends('layout.app')

@section('content')
<main class="">
    @include('fontend.banner',[
        'title'=>'Doctors',
        'image'=>'assets/img/contact1.png',
        ])
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
  </section>
  <!-- doctors section end--> 

   @include('fontend.footer_banner')
  </main>
@endsection