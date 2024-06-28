@extends('backend.layout.layout')

@section('content')
<section class="lg:ml-[15rem] mt-[5rem] bg-gray-900 w-auto h-auto text-white p-[2.5rem] rounded-md">
    <div class="flex justify-between">
        <h1 class="text-xl">working Hours / <span class="text-[#07ccec]">Edit</span></h1>
        <a href="{{route('admin.workingHours')}}" class="bg-[#07ccec] py-1.5 px-3 rounded-md text-gray-900 hover:bg-gray-700 hover:text-white duration-500">Back</a>
    </div>
    <form class="space-y-4 md:space-y-6" action="{{route('workingHours.update',$workingHours->id)}}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        <div class="lg:flex lg:space-x-5">
        <div class="space-y-2 w-full">
            <label for="">Week Name</label>
            <input type="text" name="week_name" id="week_name" class="rounded-lg bg-transparent border-2 text-white w-full text-sm border-[#07ccec] p-2.5 outline-none" placeholder="enter your week_name" value="{{old('week_name',$workingHours->week_name)}}">
            @error('week_name')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="space-y-2 w-full">
            <label for="">Time</label>
            <input type="text" name="time" id="time" class="rounded-lg bg-transparent border-2 text-white w-full text-sm border-[#07ccec] p-2.5 outline-none" placeholder="enter your time" value="{{ old('answer',$workingHours->time)}}">
            @error('time')
            <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        </div>
        <button type="submit" class=" text-gray-800 bg-[#07ccec] hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-md px-5 py-2.5 text-center ">Submit</button>
        
    </form>
</section>
@endsection