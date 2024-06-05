@extends('backend.layout.layout')

@section('content')
<section class="lg:ml-[15rem] mt-[5rem] bg-gray-900 w-auto h-auto text-white p-[2.5rem] rounded-md">
    <div class="flex justify-between">
        <h1 class="text-xl">Contact Info/ <span class="text-[#07ccec]">Create</span></h1>
        <a href="{{route('admin.contactInfo')}}" class="bg-[#07ccec] py-1.5 px-3 rounded-md text-gray-900 hover:bg-gray-700 hover:text-white duration-500">Back</a>
    </div>
    <form class="space-y-4 md:space-y-6" action="#" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="lg:flex lg:space-x-5">
            <div class="space-y-2 w-full">
                <label for="">Call</label>
                <input type="text" name="call" id="call" class="rounded-lg bg-transparent border-2 text-white w-full text-sm border-[#07ccec] p-2.5 outline-none" placeholder="enter your call">
            </div>
            <div class="space-y-2 w-full">
                <label for="">Call Icon</label>
                <input type="text" name="callicon" id="callicon" class="rounded-lg bg-transparent border-2 text-white w-full text-sm border-[#07ccec] p-2.5 outline-none" placeholder="enter your callicon">
            </div>v>
        </div>

        <div class="lg:flex lg:space-x-5">
            <div class="space-y-2 w-full">
                <label for="">Email</label>
                <input type="text" name="email" id="email" class="rounded-lg bg-transparent border-2 text-white w-full text-sm border-[#07ccec] p-2.5 outline-none" placeholder="enter your email">
            </div>
            <div class="space-y-2 w-full">
                <label for="">Email</label>
                <input type="text" name="emailicon" id="emailicon" class="rounded-lg bg-transparent border-2 text-white w-full text-sm border-[#07ccec] p-2.5 outline-none" placeholder="enter your emailicon">
            </div>
        </div>

        <div class="lg:flex lg:space-x-5">
            <div class="space-y-2 w-full">
                <label for="">Location</label>
                <input type="text" name="location" id="location" class="rounded-lg bg-transparent border-2 text-white w-full text-sm border-[#07ccec] p-2.5 outline-none" placeholder="enter your location">
            </div>
            <div class="space-y-2 w-full">
                <label for="">location</label>
                <input type="text" name="locationicon" id="locationicon" class="rounded-lg bg-transparent border-2 text-white w-full text-sm border-[#07ccec] p-2.5 outline-none" placeholder="enter your locationicon">
            </div>
        </div>
        
        <button type="submit" class=" text-gray-800 bg-[#07ccec] hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-md px-5 py-2.5 text-center ">Submit</button>
        
    </form>
</section>
@endsection