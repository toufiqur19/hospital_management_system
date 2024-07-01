@extends('layout.app')

@section('content')
<main class="">
    @include('fontend.banner',[
        'title'=>'Blog',
        'image'=>'assets/img/contact1.png',
        ])

<!-- blog section start-->
<section class="py-14">
    <h2 class="footer_title text-center text-[#e12454] font-bold text-2xl">
      Our Blog
    </h2>
    <h4 class="text-center pb-10 pt-5 text-xl">Our Latest News & Blogs</h4>

    <div class="lg:flex gap-4 lg:space-x-0 space-y-4 lg:mx-10 w-[100%]">
      <div class="lg:w-[22%] bg-[#f1f5f9] mx-10 lg:mx-0 py-5 lg:mt-4 rounded-md cursor-pointer">
        <!-- search bar -->
        <div>
          <h2 class="blog pb-5 font-semibold text-[1.1rem] px-4 text-[#e12454]">Search Keywords</h2>
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
        <h2 class="blog font-semibold text-[1.3rem] py-4 px-4 text-[#e12454]">All Blog Category</h2>
        @foreach ($departments as $department)
        <div class="grid">
            <a href="" class="border-b border-[#07ccec] py-2 px-4 hover:bg-[#07ccec] duration-500">{{$department->department_name}}</a>
        </div>
        @endforeach
        
        <!-- recent post -->
        <div class="">
        <h2 class="blog py-5 font-semibold text-[1.1rem] px-4 text-[#e12454]">Recent Posts</h2>
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
          <h2 class="blog pb-5 font-semibold text-[1.1rem] px-4 text-[#e12454]">Tags</h2>
          <div class="gap-2 mt-3 grid grid-cols-2 text-center px-4">
            @foreach ($tags as $tag)
            <a class="border-2 px-3 py-2 border-[#07ccec] bg-transparent hover:bg-[#07ccec] duration-500"href="">{{$tag->tags}}</a>
            @endforeach
          </div>
        </div>

     </div>
      <div class="lg:w-[70%] lg:h-[100vh] h-auto lg:grid lg:grid-cols-3 lg:gap-4 space-y-5 lg:space-y-0 lg:mx-20 mx-10">
      
        @foreach ($blogs as $blog)
        <div class="bg-[#07ccec] lg:h-[25rem] news overflow-hidden cursor-pointer rounded-md">
            <div class="news_banner duration-300">
                <img class="w-full h-40" src="{{asset('uploads/blog/'.$blog->image)}}" alt="" />
            </div>
            <div class="relative p-5">
              <div class="flex justify-between">
                <h1><span><i class="fa-solid fa-user pr-2"></i></span>{{$blog->name}}</h1>
              <p><span><i class="fa-solid fa-calendar-days pr-2"></i></span>{{$blog->date}}</p>
              </div>
              <h3>
                {{ Str::words ($blog->description,20)}}
              </h3>
              <div class="mt-5">
                <a
                  class="read px-6 py-2 min-w-[120px] text-center bg-[#f1f5f9] rounded text-[#07ccec] border-2 border-[#f1f5f9] hover:bg-transparent hover:text-black duration-500"
                  href="{{route('blog.details',$blog->id)}}"
                  >Read More</a
                >
              </div>
            </div>
          </div>
        @endforeach

      </div>
    </div>
  </section>
  <!-- blog section end-->

    @include('fontend.footer_banner')
  </main>
@endsection