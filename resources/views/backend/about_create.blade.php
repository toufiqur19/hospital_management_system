@extends('backend.layout.layout')

@section('content')
<section class="lg:ml-[15rem] mt-[5rem] bg-gray-900 w-auto h-auto text-white p-[2.5rem] rounded-md">
    <div class="flex justify-between">
        <h1 class="text-xl">About / <span class="text-[#07ccec]">Create</span></h1>
        <a href="{{route('admin.about')}}" class="bg-[#07ccec] py-1.5 px-3 rounded-md text-gray-900 hover:bg-gray-700 hover:text-white duration-500">Back</a>
    </div>
    <form class="space-y-4 md:space-y-6" action="#" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="lg:flex lg:space-x-5">
            <div class="space-y-2 w-full">
                <label for="">Heading</label>
                <input type="text" name="heading" id="heading" class="rounded-lg bg-transparent border-2 text-white w-full text-sm border-[#07ccec] p-2.5 outline-none" placeholder="enter your heading">
            </div>
            <div class="space-y-2 w-full">
                <label for="">Title</label>
                <input type="text" name="title" id="title" class="rounded-lg bg-transparent border-2 text-white w-full text-sm border-[#07ccec] p-2.5 outline-none" placeholder="enter your title">
            </div>
        </div>
        <div class="lg:flex lg:space-x-5">
        <div class="space-y-2 w-full">
            <label for="">Email</label>
            <input type="email" name="email" id="email" class="rounded-lg bg-transparent border-2 text-white w-full text-sm border-[#07ccec] p-2.5 outline-none" placeholder="enter your gmail">
        </div>
        <div class="space-y-2 w-full">
            <label for="">Mobile</label>
            <input type="text" name="mobile" id="mobile" class="rounded-lg bg-transparent border-2 text-white w-full text-sm border-[#07ccec] p-2.5 outline-none" placeholder="enter your mobile">
        </div>
        </div>
        <div class="lg:flex lg:space-x-5">
        <div class="space-y-2 w-full">
            <label for="">Service Time</label>
            <input type="text" name="service_time" id="service_time" class="rounded-lg bg-transparent border-2 text-white w-full text-sm border-[#07ccec] p-2.5 outline-none" placeholder="enter your service time">
        </div>
        </div>
        <div class="space-y-2 w-full">
            <label for="">Description</label>
            <textarea name="description" id="description" placeholder="enter your description" class="rounded-lg bg-transparent border-2 text-white w-full text-sm border-[#07ccec] p-2.5 outline-none"></textarea>
        </div>
        <div class="lg:mt-10">
            <input type="file">
        </div>
        <button type="submit" class=" text-gray-800 bg-[#07ccec] hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-md px-5 py-2.5 text-center ">Submit</button>
        
    </form>
</section>
@endsection