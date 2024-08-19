@extends('layout.app')

@section('content')
<main class="">
    @include('fontend.banner',[
        'title'=>'Departments Details',
        'image'=>'https://www.swg.com/can/wp-content/uploads/sites/38/2019/04/Hospital-Case-Study-Banner-Daniel.png',
        ])

<section class="py-14">
    <div class="lg:flex gap-5 lg:mx-10 space-y-10 lg:space-y-0">
      
        <div class="lg:w-8/12">
        <div class="overflow-hidden bg-[#f1f5f9] shadow mx-10 lg:mx-0">
          <div class="cursor-pointer hover:scale-105 duration-300">
            <img class="w-full" src="./img/blog-1.jpg" alt="" />
          </div>
          <div class="relative p-5">
            <div class="flex justify-between font-semibold text-[#07ccec]">
              <h1 class="text-2xl blog">{{$departmentsDetails->department}}</h1>
            </div>
            <h3 class="text-justify pt-3">{{$departmentsDetails->description}}</h3>
          </div>
        </div>

        <div class="mt-10 mx-5 lg:mx-0">
          <h1 class="blog text-2xl font-semibold">Meet Our Doctors</h1>
          <div class="lg:flex lg:space-x-5">
            @foreach ($doctors as $doctor)
            <div
              class="mt-8 text-center lg:w-1/3 cursor-pointer hover:bg-[#07ccec] service rounded-md"
            >
              <a href="">
                <div class="relative">
                  <img
                    class="rounded-md"
                    src="{{asset('doctor/'.$doctor->image)}}"
                    alt=""
                  />
                  <div
                    class="d-info absolute rounded-md bottom-0 bg-[#07ccec] w-full h-auto pb-3 overflow-hidden"
                  >
                    <h2 class="text-[1.3rem] text-[#000d44] pt-3">
                      {{$doctor->name}}
                    </h2>
                    <p class="">{{$doctor->expart}}</p>
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
        </div>
      </div>

      <div class="lg:w-1/3 h-[140vh] lg:h-auto">
        <div
          class="h-[17rem] bg-[#f1f5f9] shadow mx-10 lg:mx-0 py-5 rounded-md cursor-pointer"
        >
          <!-- all category -->
          <h2
            class="blog pb-5 font-semibold text-[1.1rem] px-4 text-[#000d44]"
          >
            All Blog Category
          </h2>
          <div class="grid">
            @foreach ($categories as $categorie)
            <a
              href=""
              class="border-b border-[#07ccec] py-2 px-4 hover:bg-[#07ccec] duration-500"
              >{{$categorie->department_name}}</a
            >
            @endforeach
          </div>
          <!-- Opening Hours -->
          <div class="text-black bg-[#07ccec] mt-16 rounded-md px-4 py-5">
            <h1 class="font-semibold text-xl">Opening Hours</h1>
            @foreach ($workingHoures as $workingHoure)
             <div
              class="flex justify-between mt-5 border-b-2 border-dotted pb-1"
            >
              <span>{{$workingHoure->week_name}}</span>
              <p class="pl-2">{{$workingHoure->time}}</p>
            </div>
            @endforeach
          </div>
          <!-- faqs section start-->
          <div
            class="bg-[#f1f5f9] faqs lg:flex lg:pb-0 lg:space-x-10 text-gray-700 px-5 lg:pt-8 mt-8 rounded-md"
          >
            <div class="w-full py-10 lg:pt-0">
              <h1 class="text-3xl text-[#07ccec] font-bold tracking-widest">
                FAQS
              </h1>
              <p class="pt-2 font-semibold">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Nemo, quo?
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
          </div>
          <!-- faqs section end-->
        </div>
      </div>

    </div>
  </section>

   @include('fontend.footer_banner')
  </main>
@endsection