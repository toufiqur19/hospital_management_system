@extends('backend.layout.layout')

@section('content')
<section class="lg:ml-[15rem] mt-[5rem] bg-gray-900 w-auto h-auto text-white p-[2.5rem] rounded-md">
    <div class="flex justify-between">
        <h1 class="text-xl">Service / <span class="text-[#07ccec]">Create</span></h1>
        <a href="{{route('admin.service')}}" class="bg-[#07ccec] py-1.5 px-3 rounded-md text-gray-900 hover:bg-gray-700 hover:text-white duration-500">Back</a>
    </div>
    <form class="space-y-4 md:space-y-6" action="{{ route('service.create.process')}}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="lg:flex lg:space-x-5">
            <div class="space-y-2 w-full">
                <label for="">Icon</label>
                <input type="text" name="icon" id="icon" class="rounded-lg bg-transparent border-2 text-white w-full text-sm border-[#07ccec] p-2.5 outline-none" placeholder="enter your sort icon" value="{{old('icon')}}">
                @error('icon')
                <div class="text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="space-y-2 w-full">
                <label for="">Department</label>
                <input type="text" name="department" id="department" class="rounded-lg bg-transparent border-2 text-white w-full text-sm border-[#07ccec] p-2.5 outline-none" placeholder="enter your department" value="{{old('department')}}">
            @error('description')
            <div class="text-red-600">{{ $message }}</div>
            @enderror
            </div>
        </div>
        <div class="space-y-2 w-full">
            <label for="">Description</label>
            <textarea name="description" id="description" class="rounded-lg bg-transparent border-2 text-white w-full text-sm border-[#07ccec] p-2.5 outline-none" placeholder="enter your description">{{old('department')}}</textarea>
        </div>
        @error('description')
            <div class="text-red-600">{{ $message }}</div>
        @enderror
        <div class="lg:mt-10 space-y-2">
            <label>Size (600x850)</label><br>
            <input type="file" name="image">
        </div>
        @error('image')
            <div class="text-red-600">{{ $message }}</div>
        @enderror
        <button type="submit" class=" text-gray-800 bg-[#07ccec] hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-md px-5 py-2.5 text-center ">Submit</button>
        
    </form>
</section>
@endsection