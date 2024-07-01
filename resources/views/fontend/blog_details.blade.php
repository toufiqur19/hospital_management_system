@extends('layout.app')

@section('content')
<main class="">
    @include('fontend.banner',[
        'title'=>'Blog Details',
        'image'=>'assets/img/contact1.png',
    ])
    <!-- blog section start-->
    <section class="py-14">
      <div class="lg:flex gap-4 lg:mx-10 space-y-10 lg:space-y-0">
        
        <div class="lg:w-8/12 overflow-hidden bg-[#f1f5f9] shadow mx-10 lg:mx-0">
          <div class="cursor-pointer hover:scale-105 duration-300">
            <img class="w-full h-[22rem]" src="{{asset('uploads/blog/'.$blogDetails->image)}}" alt="" />
          </div>
          <div class="relative p-5">
            <div class="flex justify-between font-semibold text-[#07ccec]">
              <h1 class="text-xl"><span><i class="fa-solid fa-user pr-2"></i></span>{{$blogDetails->name}}</h1>
              <p><span><i class="fa-solid fa-calendar-days pr-2"></i></span>{{$blogDetails->date}}</p>
            </div>
            <h3 class="text-justify pt-3">
              {{$blogDetails->description}}
            </h3>
          </div>

          <div class="mt-5 mx-5 space-y-3">
            <h1 class="font-semibold text-2xl text-[#000d44]">Comments</h1>
               @if (Auth::check())
               <div class="">
                <textarea name="" id="" class="rounded-lg mb-3 h-[10rem] bg-transparent border-2 text-gray-600 w-full text-sm border-[#07ccec] p-2.5 outline-none" placeholder="Type Your Comment..."></textarea>
                <a class="px-6 py-2  min-w-[120px] text-center text-gray-600 border-2 border-[#07ccec] rounded hover:bg-[#07ccec] hover:text-black active:bg-indigo-500 focus:outline-none focus:ring duration-500" href="/download">Submit Comment</a>
                </div>
               @else
               <div class="text-red-600">Please Login First <a class="text-gray-700" href="{{route('login')}}">>>>>login</a></div>
               @endif
          </div>
        </div>

        <div class="lg:w-1/3 h-auto bg-[#f1f5f9] shadow mx-10 lg:mx-0 py-5 rounded-md cursor-pointer">
          <!-- search bar -->
          <div>
            <h2 class="blog pb-5 font-semibold text-[1.1rem] px-4 text-[#000d44]">Search Keywords</h2>
            <div class="my-2 mx-4">
             <input
                type="email"
                id="website-admin"
                class="rounded-md bg-transparent border-2 text-gray-900 w-full text-sm border-[#07ccec] p-2.5 outline-none"
                placeholder="Search Here..."
              />
            </div>
          </div>
          <!-- all category -->
          <h2 class="blog pb-5 font-semibold text-[1.1rem] px-4 text-[#000d44]">All Blog Category</h2>
          @foreach ($departments as $department)
            <div class="grid">
                <a href="" class="border-b border-[#07ccec] py-2 px-4 hover:bg-[#07ccec] duration-500">{{$department->department_name}}</a>
            </div>
          @endforeach
          <!-- recent post -->
          <div>
            <h2 class="blog py-5 font-semibold text-[1.1rem] px-4 text-[#000d44]">Recent Posts</h2>
            @foreach ($recentBlogs as $recentBlog)
            <div class="flex text-sm px-3 pr-5 space-x-3 pb-3 overflow-hidden">
                <a href="" class="flex space-x-3 mt-2 ">
                  <img class="w-[4rem] h-[5rem] rounded-md hover:scale-105 duration-500" src="{{asset('uploads/blog/'.$recentBlog->image)}}" alt="">
                  <div class="h-[5rem]">
                    <h2 class="text-[#07ccec]">{{ Carbon\Carbon::parse($recentBlog->date)->format('d-M-Y' ) }}</h2>
                    <p class="text-justify">{{ Str::words ($recentBlog->description,5)}}</p>
                  </div>
                </a>
              </div>
            @endforeach
          </div>
          <!-- tag -->
          <div class="mt-3">
            <h2 class="blog pb-5 font-semibold text-[1.1rem] px-4 text-[#000d44]">Tags</h2>
            <div class="gap-2 mt-3 mx-4 grid grid-cols-3 text-center">
                @foreach ($tags as $tag)
                <a class="border-2 px-3 py-2 border-[#07ccec] bg-transparent hover:bg-[#07ccec] duration-500"href="">{{$tag->tags}}</a>
                @endforeach
            </div>
            
          </div>
       </div>

      </div>
    </section>
    <!-- blog section end-->

    @include('fontend.footer_banner')
  </main>
@endsection