@extends('backend.layout.layout')

@section('content')
<section class="lg:ml-[15rem] mt-[5rem] bg-gray-900 w-auto h-auto text-white p-[2.5rem] rounded-md">
    <div class="flex justify-between">
        <h1 class="text-xl">Doctors / <span class="text-[#07ccec]">Create</span></h1>
        <a href="{{route('admin.doctors')}}" class="bg-[#07ccec] py-1.5 px-3 rounded-md text-gray-900 hover:bg-gray-700 hover:text-white duration-500">Back</a>
    </div>
    <form class="space-y-4 md:space-y-6" action="{{ route('doctors.create.process')}}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="lg:flex lg:space-x-5">
        <div class="space-y-2 w-full">
            <label for="">Name</label>
            <input type="text" name="name" id="name" class="rounded-lg bg-transparent border-2 text-white w-full text-sm border-[#07ccec] p-2.5 outline-none" placeholder="enter your name">
            @error('name')
                <div class="bg-red-600">{{ message }}</div>
            @enderror
        </div>
        <div class="space-y-2 w-full">
            <label for="">Expart</label>
            <input type="text" name="expart" id="expart" class="rounded-lg bg-transparent border-2 text-white w-full text-sm border-[#07ccec] p-2.5 outline-none" placeholder="enter your expart">
            @error('expart')
            <div class="bg-red-600">{{ message }}</div>
            @enderror
        </div>
        </div>
        <div class="lg:mt-10 space-y-2">
            <label>Size (600x850)</label><br>
            <input type="file" name="image">
        </div>
        @error('image')
            <div class="bg-red-600">{{ message }}</div>
        @enderror
        <button type="submit" class=" text-gray-800 bg-[#07ccec] hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-md px-5 py-2.5 text-center ">Submit</button>
        
    </form>
</section>
@endsection