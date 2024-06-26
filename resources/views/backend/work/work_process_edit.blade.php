@extends('backend.layout.layout')

@section('content')
<section class="lg:ml-[15rem] mt-[5rem] bg-gray-900 w-auto h-auto text-white p-[2.5rem] rounded-md">
    <div class="flex justify-between">
        <h1 class="text-xl">Work Process / <span class="text-[#07ccec]">Edit</span></h1>
        <a href="{{route('admin.work')}}" class="bg-[#07ccec] py-1.5 px-3 rounded-md text-gray-900 hover:bg-gray-700 hover:text-white duration-500">Back</a>
    </div>
    <form class="space-y-4 md:space-y-6" action="{{ route('work.process.update',$workProcess->id) }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        <div class="lg:flex lg:space-x-5">
        <div class="space-y-2 w-full">
            <label for="">Sort Description</label>
            <input type="text" name="sort_description" id="sort_desc" class="rounded-lg bg-transparent border-2 text-white w-full text-sm border-[#07ccec] p-2.5 outline-none" placeholder="enter your sort description" value="{{$workProcess->sort_description}}">
            @error('sort_description')
            <div class="text-red-600">{{ $message }}</div>
            @enderror
        </div>
        <div class="space-y-2 w-full">
            <label for="">Number</label>
            <input type="text" name="number" id="number" class="rounded-lg bg-transparent border-2 text-white w-full text-sm border-[#07ccec] p-2.5 outline-none" placeholder="enter your number" value="{{$workProcess->number}}">
            @error('number')
            <div class="text-red-600">{{ $message }}</div>
            @enderror
        </div>
        </div>
        <div class="space-y-2 w-full">
            <label for="">Description</label>
            <textarea name="description" id="description" class="rounded-lg bg-transparent border-2 text-white w-full text-sm border-[#07ccec] p-2.5 outline-none" placeholder="enter your description">{{$workProcess->description}}</textarea>
            @error('description')
            <div class="text-red-600">{{ $message }}</div>
            @enderror
        </div>
        <div class="lg:mt-10">
            <input type="file" name="image">
            </div>
        <img src="{{asset('work/'.$workProcess->image)}}" alt="" width="50" height="50">
        @error('image')
            <div class="text-red-600">{{ $message }}</div>
        @enderror
        <button type="submit" class=" text-gray-800 bg-[#07ccec] hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-md px-5 py-2.5 text-center ">Submit</button>
        
    </form>
</section>
@endsection