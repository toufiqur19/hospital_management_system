@extends('backend.layout.layout')

@section('content')
<section class="lg:ml-[15rem] mt-[5rem] bg-gray-900 w-auto h-auto text-white p-[2.5rem] rounded-md">
    <div class="flex justify-between">
        <h1 class="text-xl">Testimonials / <span class="text-[#07ccec]">Edit</span></h1>
        <a href="{{route('admin.testimonials')}}" class="bg-[#07ccec] py-1.5 px-3 rounded-md text-gray-900 hover:bg-gray-700 hover:text-white duration-500">Back</a>
    </div>
    <form class="space-y-4 md:space-y-6" action="{{route('testimonials.update',$testimonials->id)}}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        <div class="lg:flex lg:space-x-5">
            <div class="space-y-2 w-full">
                <label for="">Name</label>
                <input type="text" name="name" id="name" class="rounded-lg bg-transparent border-2 text-white w-full text-sm border-[#07ccec] p-2.5 outline-none" placeholder="enter your sort name" value="{{old('name',$testimonials->name)}}">
                @error('name')
                <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="space-y-2 w-full">
                <label for="">Star</label>
                <input type="text" name="star" id="star" class="rounded-lg bg-transparent border-2 text-white w-full text-sm border-[#07ccec] p-2.5 outline-none" placeholder="enter your star" value="{{old('star',$testimonials->star)}}">
            @error('star')
            <div class="text-red-600">{{ $message }}</div>
            @enderror
            </div>
        </div>
        <div class="space-y-2 w-full">
            <label for="">Expert</label>
            <input type="text" name="expert" id="expert" class="rounded-lg bg-transparent border-2 text-white w-full text-sm border-[#07ccec] p-2.5 outline-none" placeholder="enter your expert " value="{{old('expert',$testimonials->expert)}}">
        @error('expert')
        <div class="text-red-600">{{ $message }}</div>
        @enderror
        </div>
        

        <div class="space-y-2 w-full">
            <label for="">Comment</label>
            <textarea name="comment" id="comment" class="rounded-lg bg-transparent border-2 text-white w-full text-sm border-[#07ccec] p-2.5 outline-none" placeholder="enter your comment">{{old('comment',$testimonials->comment)}}</textarea>
        </div>
        @error('comment')
            <div class="text-red-600">{{ $message }}</div>
        @enderror
        <div class="lg:mt-10 space-y-2">
            <input type="file" name="image">
            <img src="{{asset('uploads/testimonial/'.$testimonials->image)}}" alt="" width="50"; height="50">
        </div>
        @error('image')
            <div class="text-red-600">{{ $message }}</div>
        @enderror
        <button type="submit" class=" text-gray-800 bg-[#07ccec] hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-md px-5 py-2.5 text-center ">Submit</button>
        
    </form>
</section>
@endsection