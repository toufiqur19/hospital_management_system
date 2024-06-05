@extends('backend.layout.layout')

@section('content')
<section class="lg:ml-[15rem] mt-[5rem] bg-gray-900 w-auto h-auto text-white p-[2.5rem] rounded-md">
    <div class="flex justify-between">
        <h1 class="text-xl">Carousel / <span class="text-[#07ccec]">Carousel</span></h1>
        <a href="{{route('carousel')}}" class="bg-[#07ccec] py-1.5 px-3 rounded-md text-gray-900 hover:bg-gray-700 hover:text-white duration-500">Back</a>
    </div>
    <form class="space-y-4 md:space-y-6" action="{{route('create.process')}}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="space-y-2 lg:mr-20">
            <label for="">Title</label>
            <input type="text" name="title" id="title" class="rounded-lg bg-transparent border-2 text-white w-full text-sm border-[#07ccec] p-2.5 outline-none" placeholder="enter your title">
        </div>
        @error('title')
            <div class="text-red-600">{{ $message }}</div>
        @enderror
        <div class="space-y-2 lg:mr-20">
            <label for="">Sort Description</label>
            <input type="text" name="sort_description" id="sort_description" placeholder="enter your sort_description" class="rounded-lg bg-transparent border-2 text-white w-full text-sm border-[#07ccec] p-2.5 outline-none">
        </div>
        @error('sort_description')
            <div class="text-red-600">{{ $message }}</div>
        @enderror
        <div>
            <input type="file" name="image">
        </div>
        @error('image')
            <div class="text-red-600">{{ $message }}</div>
        @enderror
        <button type="submit" class=" text-gray-800 bg-[#07ccec] hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-md px-5 py-2.5 text-center ">Submit</button>
        
    </form>
</section>
@endsection