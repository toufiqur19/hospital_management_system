@extends('layout.app')

@section('content')
<main class="">
    @include('fontend.banner',[
        'title'=>'Departments',
        'image'=>'assets/img/contact1.png',
        ])

    <!-- services section start-->
    <section class="lg:px-10 px-10 py-14">
      <h2 class="footer_title text-center pb-10 text-[#e12454] font-bold text-2xl">
          Departments
      </h2>

      <div class="lg:flex gap-4 lg:space-x-0 space-y-4">
          <div class="lg:w-1/2 bg-[#f1f5f9] py-5 lg:mt-4 rounded-md cursor-pointer">
             <h2 class="footer_title font-semibold text-[1.3rem] pb-5 px-4 text-[#e12454]">All Department</h2>
             
             @foreach ($categories as $categorie)
             <div class="grid">
              <a href="" class="border-b border-[#07ccec] py-2 px-4 hover:bg-[#07ccec] duration-500">{{$categorie->department_name}}</a>
             </div>
             @endforeach

          </div>
          <div class="lg:grid lg:grid-cols-3 lg:gap-4 space-y-5 lg:space-y-0">
             @foreach ($departments as $department)
             <div
             class="text-center px-5 py-7 bg-[#f1f5f9] cursor-pointer hover:bg-[#07ccec] duration-300 service rounded-md"
           >
           <div class="relative">
            <i
              class="{{$department->icon}} s-icon duration-500 text-white text-5xl bg-[#07ccec] px-4 py-5 rounded-full"
            ></i>
          </div>
          <div>
            <h2 class="text-[1.3rem] pb-2 text-[#000d44] pt-3">{{$department->department}}</h2>
            <p class="text-justify">
              {{$department->description}}
            </p>
            <div class="mt-4">
              <a
                class="read px-6 py-2 min-w-[120px] text-center bg-[#07ccec] rounded text-white hover:bg-[#f1f5f9] hover:text-black duration-500"
                href="{{route('departments.details', $department->id)}}"
                >Read More</a
              >
            </div>
          </div>
           </div> 
             @endforeach
           </div>
      </div>
    </section>
    <!-- services section end-->

   @include('fontend.footer_banner')
  </main>
@endsection